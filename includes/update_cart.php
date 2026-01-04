<?php

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'], $_GET['action'])) {
    $product_id = $_GET['id'];
    $action = $_GET['action'];

    if (isset($_SESSION['cart'][$product_id])) {
        if ($action === 'plus') {
            $_SESSION['cart'][$product_id]['qty']++;
        }

        if ($action === 'minus') {
            $_SESSION['cart'][$product_id]['qty']--;

            // If qty becomes 0 → remove item
            if ($_SESSION['cart'][$product_id]['qty'] <= 0) {
                unset($_SESSION['cart'][$product_id]);
            }
        }
    }

    // Update cart count
    $_SESSION['cart_count'] = !empty($_SESSION['cart'])
        ? array_sum(array_column($_SESSION['cart'], 'qty'))
        : 0;
}

header("Location: cart.php");
exit;
