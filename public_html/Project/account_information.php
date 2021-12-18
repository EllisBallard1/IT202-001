<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<h1>Account Information</h1>
<?php
echo $_GET["acc_id"];
?>
