<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
//variable to hold transactions information
$user_account_info = get_user_account();
//use the account number to match with the transactions table
?>

<div class="container-fluid">
    <h1>Transaction History</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Account Number</th>
                <th scope="col">Transaction ID</th>
                <th scope="col">Account Source</th>
                <th scope="col">Account Destination</th>
                <th scope="col">Balance Change</th>
                <th scope="col">Transaction Type</th>
                <th scope="col">Memo</th>
                <th scope="col">Expected Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user_account_info as $account) : ?>
                <tr>
                    <?php $account_num = $account["account_num"] ?>
                    <?php $account_id = $account["id"] ?>
                    <td><?php echo $account_num ?></td>
                    <td><?php echo $account_id ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>