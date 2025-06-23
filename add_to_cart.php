<?php
session_start();

if (isset($_POST['product_name'], $_POST['product_price'], $_POST['product_image'])) {
    $item = [
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'image' => $_POST['product_image']
    ];
    $_SESSION['cart'][] = $item;
}

header('Location: cart.php');
exit;
?>