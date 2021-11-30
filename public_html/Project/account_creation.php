<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Account Creation</h1>
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
                <input type="text" placeholder="Please enter a minimum of $5 for your first deposit" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
        </div>
        <input type="submit" class="btn btn-primary" value="Create Account"/>
    </form>
</div>





