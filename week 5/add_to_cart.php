<?php
session_start();

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

$item = [
    'id' => $id,
    'name' => $name,
    'price' => $price,
    'quantity' => 1
];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$_SESSION['cart'][] = $item;

header("Location: cart.php");
exit();
?>