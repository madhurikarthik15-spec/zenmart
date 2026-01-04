<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }

    // Update cart count
    $_SESSION['cart_count'] = array_sum(
        array_column($_SESSION['cart'], 'qty')
    );
}

header("Location: cart.php");
exit;
