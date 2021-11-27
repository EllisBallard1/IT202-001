<?php
require(__DIR__ . "/../../partials/nav.php"); ?>
<div class="container-fluid">
    <h1>Dashboard</h1>
    <h2>Might need to use an id tag isntead of a name tag</h2>
    <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="book-dropdown" data-bs-toggle="dropdown">
            Create Account
        </button>
        <ul class="dropdown-menu" aria-labelledby="book-dropdown">
            <li><a href="#" class="dropdown-item">Checking Account</a>
            <li><a href="#" class="dropdown-item">Savings Account</a> 
        </ul>
        <a href='#' class="btn btn-primary">My Accounts</a>
        <a href='#' class="btn btn-primary">Deposit</a>
        <a href='#' class="btn btn-primary">Withdraw</a>
        <a href='#' class="btn btn-primary">Transfer</a>
        <a href="<?php echo get_url('profile.php'); ?>" class="btn btn-primary">Profile</a>
    </div>
</div>