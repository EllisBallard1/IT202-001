<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<h1 class="text-center mt-4">Create New Account</h1>
<div class="container-fluid">
    <form  onsubmit="return validate(this)" method="POST">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="account_type" id="checking_account">
            <label class="form-check-label" for="checking_account">
                Checking Account
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="account_type" id="savings_account">
            <label class="form-check-label" for="savings_account">
                Savings Account
            </label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
                <input type="number" id="initial_deposit" name = "deposit" placeholder="Please enter a minimum of $5 for your first deposit" class="form-control" min="5.0" step="0.01">
            <span class="input-group-text">.00</span>
        </div>
        <input type="submit" name="create" class="btn btn-primary" value="Create Account"/>
    </form>
</div>

<?php
if (isset($_POST["create"])) {
    $db = getDB();
    create_account();
    //now need to call the function to create the account
    //but how do I call the function properly

}

?>




