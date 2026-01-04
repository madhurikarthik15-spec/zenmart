<?php
session_start();


$product_id   = $_POST['product_id'];
$product_name = $_POST['product_name'];
$price        = $_POST['price'];
$image        = $_POST['image'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id]['qty']++;
} else {
    $_SESSION['cart'][$product_id] = [
        'name'  => $product_name,
        'price' => $price,
        'image' => $image,
        'qty'   => 1
    ];
}

$_SESSION['cart_count'] = array_sum(array_column($_SESSION['cart'], 'qty'));

header("Location: cart.php");
exit;
?>