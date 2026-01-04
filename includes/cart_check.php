<?php
include "header.php";
?>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    $_SESSION['redirect_after_login'] = "cart.php";
    header("Location: login.php");
    exit;
}

header("Location: cart.php");
exit;
