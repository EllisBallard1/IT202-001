<?php
require_once(__DIR__ . "/db.php");
$BASE_PATH = '/Project/'; //This is going to be a helper for redirecting to our base project path since it's nested in another folder
function se($v, $k = null, $default = "", $isEcho = true)
{
    if (is_array($v) && isset($k) && isset($v[$k])) {
        $returnValue = $v[$k];
    } else if (is_object($v) && isset($k) && isset($v->$k)) {
        $returnValue = $v->$k;
    } else {
        $returnValue = $v;
        //added 07-05-2021 to fix case where $k of $v isn't set
        //this is to kep htmlspecialchars happy
        if (is_array($returnValue) || is_object($returnValue)) {
            $returnValue = $default;
        }
    }
    if (!isset($returnValue)) {
        $returnValue = $default;
    }
    if ($isEcho) {
        //https://www.php.net/manual/en/function.htmlspecialchars.php
        echo htmlspecialchars($returnValue, ENT_QUOTES);
    } else {
        //https://www.php.net/manual/en/function.htmlspecialchars.php
        return htmlspecialchars($returnValue, ENT_QUOTES);
    }
}
//TODO 2: filter helpers
function sanitize_email($email = "")
{
    return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
}
function is_valid_email($email = "")
{
    return filter_var(trim($email), FILTER_VALIDATE_EMAIL);
}
//TODO 3: User Helpers
function is_logged_in($redirect = false, $destination = "login.php")
{
    $isLoggedIn = isset($_SESSION["user"]);
    if ($redirect && !$isLoggedIn) {
        flash("You must be logged in to view this page", "warning");
        die(header("Location: $destination"));
    }
    return $isLoggedIn; //se($_SESSION, "user", false, false);
}
function has_role($role)
{
    if (is_logged_in() && isset($_SESSION["user"]["roles"])) {
        foreach ($_SESSION["user"]["roles"] as $r) {
            if ($r["name"] === $role) {
                return true;
            }
        }
    }
    return false;
}
function get_username()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "username", "", false);
    }
    return "";
}
function get_user_email()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "email", "", false);
    }
    return "";
}
function get_user_id()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "id", false, false);
    }
    return false;
}
//TODO 4: Flash Message Helpers
function flash($msg = "", $color = "info")
{
    $message = ["text" => $msg, "color" => $color];
    if (isset($_SESSION['flash'])) {
        array_push($_SESSION['flash'], $message);
    } else {
        $_SESSION['flash'] = array();
        array_push($_SESSION['flash'], $message);
    }
}

function getMessages()
{
    if (isset($_SESSION['flash'])) {
        $flashes = $_SESSION['flash'];
        $_SESSION['flash'] = array();
        return $flashes;
    }
    return array();
}
//TODO generic helpers
function reset_session()
{
    session_unset();
    session_destroy();
    session_start();
}
function users_check_duplicate($errorInfo)
{
    if ($errorInfo[1] === 1062) {
        //https://www.php.net/manual/en/function.preg-match.php
        preg_match("/Users.(\w+)/", $errorInfo[2], $matches);
        if (isset($matches[1])) {
            flash("The chosen " . $matches[1] . " is not available.", "warning");
        } else {
            //TODO come up with a nice error message
            flash("<pre>" . var_export($errorInfo, true) . "</pre>");
        }
    } else {
        //TODO come up with a nice error message
        flash("<pre>" . var_export($errorInfo, true) . "</pre>");
    }
}
function get_url($dest)
{
    global $BASE_PATH;
    if (str_starts_with($dest, "/")) {
        //handle absolute path
        return $dest;
    }
    //handle relative path
    return $BASE_PATH . $dest;
}


function create_account($type="checking") {
    if (!is_logged_in()) {
        flash("You're not logged in", "danger");
        return;
    }
    if ($type !== "checking" && $type !== "savings") {
        flash("Invalid account type: {$type}", "danger");
        return;
    }
//add section for balance with a default of zero
    $query = "INSERT INTO Accounts (user_id, account_type) values (:uid, :type)";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":uid" => get_user_id(), ":type" => $type]);
        $account_id = $db->lastInsertId();
    }
    catch (PDOException $e) {
        flash("Failed to insert new account", "danger");
        return;
    }
    if (isset($account_id)) {
        $account_num = str_pad($account_id, 12, "0", STR_PAD_LEFT);

        $query = "UPDATE Accounts SET account_num = :account_num WHERE id = :account_id";

        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":account_num" => $account_num, ":account_id" => $account_id]);
            flash("Account Created Successfully!", "success");
        }
        catch (PDOException $e) {
            flash("Failed to insert new account", "danger");
            return;
        }
    }
}





    // $account = ["id" => -1, "account" => false, "balance" => 0];
    // $query = "SELECT id, account, balance from Accounts where user_id = :uid LIMIT 1";
    // $db = getDB();
    // $stmt = $db->prepare($query);
    // try {
    //     $stmt->execute([":uid" => get_user_id()]);
    //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //     if (!$result) {
    //         $created = false;
            
    //         $query = "INSERT INTO Accounts (account, user_id) VALUES (:an, :uid)";
    //         $stmt = $db->prepare($query);
    //         $user_id = get_user_id();
    //         $account_number = "";

    //         while (!$created) {
    //             try {
    //                 $account_number = get_random_str(12);
    //                 $stmt->execute([":an" => $account_number, ":uid" => $user_id]);
    //                 $created = true;
    //                 flash("Welcome! Your account has been successfully created!", "success");
    //             } catch (PDOException $e) {
    //                 $code = se($e->errorInfo, 0, "00000", false);

    //                 if (
    //                     $code !== "23000"
    //                 ) {
    //                     throw $e;
    //                 }
    //             }
    //         }
    //         $account["id"] = $db->lastInsertId();
    //         $account["account"] = $account_number;
    //     } else {
    //         $account["id"] = $result["id"];
    //         $account["account"] = $result["account"];
    //         $account["balance"] = $result["balance"];
    //     }
    // } catch (PDOException $e) {
    //     flash("Technical Error: " . var_export($e->errorInfo, true), "danger");
    // }
    // $_SESSION["user"]["account"] = $account;



function get_account_balance() {
    if (is_logged_in() && isset($_SESSION["user"]["account"])) {
        return (int)se($_SESSION["user"]["account"], "balance", 0, false);
    }
    return 0;
}

function get_user_account_id() {
    if (is_logged_in() && isset($_SESSION["user"]["account"])) {
        return (int)se($_SESSION["user"]["account"], "id", 0, false);
    }
    return 0;
}