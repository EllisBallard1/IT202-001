<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
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
            <tr>
                <th scope="row">account #1</th>
                <td>Checking</td>
                <td>011010101</td>
            </tr>
        </tbody>
    </table>
</div>

