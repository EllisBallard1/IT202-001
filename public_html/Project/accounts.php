<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$user_account_info = get_user_account();
?>

<div class="container-fluid">
    <h1>My Accounts</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Account Number</th>
                <th scope="col">Account Type</th>
                <th scope="col">Balance</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user_account_info as $account) : ?>
                <tr>
                    <td><?php echo $account["account_num"] ?></td>
                    <td><?php echo $account["account_type"] ?></td>
                    <td><?php echo $account["balance"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>