<?php
require(__DIR__ . "/../../partials/nav.php"); ?>
<div class="container-fluid">
    <h1>Dashboard</h1>
    <a href='#' class="btn btn-secondary dropdown-toggle" name="create_account">Create Account</a>
    <a href='#' class="btn btn-primary">My Accounts</a>
    <a href='#' class="btn btn-primary">Deposit</a>
    <a href='#' class="btn btn-primary">Withdraw</a>
    <a href='#' class="btn btn-primary">Transfer</a>
    <a href="<?php echo get_url('profile.php'); ?>" class="btn btn-primary">Profile</a>
    
</div>