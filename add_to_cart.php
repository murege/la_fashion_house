<?php
session_start();

// Get product details from POST or GET
$id = $_POST['id'] ?? $_GET['id'];
$name = $_POST['name'] ?? $_GET['name'];
$price = $_POST['price'] ?? $_GET['price'];

// Make sure cart exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Check if item already exists in cart
$found = false;

foreach ($_SESSION['cart'] as $key => $item) {
    if ($item['id'] == $id) {
        $_SESSION['cart'][$key]['quantity'] += 1;
        $found = true;
        break;
    }
}

// If not found, add new item
if (!$found) {
    $_SESSION['cart'][] = [
        'id' => $id,
        'name' => $name,
        'price' => $price,
        'quantity' => 1
    ];
}

header("Location: cart.php");
exit;
?>