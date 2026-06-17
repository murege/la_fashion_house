<?php

include('config/db.php');

$product_name = $_POST['product_name'];
$category = $_POST['category'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO products
(product_name, category, description, price)

VALUES
('$product_name','$category','$description','$price')";

mysqli_query($conn,$sql);

header("Location: manage_products.php");
?>