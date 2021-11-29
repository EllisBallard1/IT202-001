<?php
require(__DIR__ . "/../../partials/nav.php"); 
?>
<div class="container-fluid">
    <h1>Dashboard</h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="book-dropdown" data-bs-toggle="dropdown">
                Create Account
            </button>
            <ul class="dropdown-menu" aria-labelledby="book-dropdown">
                <li><button href="#" name="create_checking" class="dropdown-item">Checking Account</button>
                <li><button href="#" class="dropdown-item">Savings Account</button>
            </ul>
            <a href='#' class="btn btn-primary">My Accounts</a>
            <a href='#' class="btn btn-primary">Deposit</a>
            <a href='#' class="btn btn-primary">Withdraw</a>
            <a href='#' class="btn btn-primary">Transfer</a>
            <a href="<?php echo get_url('profile.php'); ?>" class="btn btn-primary">Profile</a>
        </div>
    </form>
</div>