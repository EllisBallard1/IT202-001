<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<h1 class="text-center mt-4">Create New Account</h1>
<div class="container-fluid">
    <form  onsubmit="return validate(this)" method="POST">
    <!-- account type select options -->
        <select class="form-select" aria-label="Default option">
            <option selected>Account Type</option>
            <option value="checking">Checking</option>
        </select>
        <br><br>
    <!-- initial deposit input field --> 
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
                <input type="number" id="initial_deposit" name = "deposit" placeholder="Please enter a minimum of $5 for your first deposit" class="form-control" min="5.0" step="0.01">
            <span class="input-group-text">.00</span>
        </div>
        <input type="submit" name="create" class="btn btn-primary" value="Create Account"/>
    </form>
</div>

<?php
//validaton for when create button is clicked
if (isset($_POST["create"])) {
    $db = getDB();
    $query = $db->prepare("SELECT account_num FROM Accounts WHERE account_num = :acc_num");
    //now need to call the function to create the account
    //but how do I call the function properly
}

?>




