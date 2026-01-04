<?php
include "header.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<div class="container mt-4">
    <h4>Your Cart (<?= $_SESSION['cart_count'] ?? 0 ?> items)</h4>

<?php if (!empty($_SESSION['cart'])) { ?>

<?php foreach ($_SESSION['cart'] as $id => $item) { ?>
    <div class="card mb-3 p-3">
        <div class="row align-items-center">
            
            <div class="col-md-2">
                <img src="<?= $item['image'] ?>" class="img-fluid">
            </div>

            <div class="col-md-6">
                <h6><?= $item['name'] ?></h6>
                <p class="text-muted">Seller: ZenMart</p>
                <strong>₹<?= $item['price'] ?></strong>
            </div>

            <div class="col-md-4 text-end">
                <div class="d-flex align-items-center mb-2">
    <a href="update_cart.php?id=<?= $id ?>&action=minus"
       class="btn btn-light">−</a>

    <span class="mx-2"><?= $item['qty'] ?></span>

    <a href="update_cart.php?id=<?= $id ?>&action=plus"
       class="btn btn-light">+</a>
</div>


                <a href="remove_from_cart.php?id=<?= $id ?>" class="me-3">REMOVE</a>
                <a href="#">SAVE FOR LATER</a>
            </div>

        </div>
    </div>
<?php } ?>

<div class="text-end">
    <a href="checkout.php" class="btn btn-warning btn-lg">
        PLACE ORDER
    </a>
</div>

<?php } else { ?>
    <p>Your cart is empty</p>
<?php } ?>
</div>
