<?php
include('db.php');

if(isset($_POST['product_name'])){

$product_name = trim($_POST['product_name']);
$category = trim($_POST['category']);
$description = trim($_POST['description']);
$price = trim($_POST['price']);
$image = trim($_POST['image']);

$stmt = mysqli_prepare(
$conn,
"INSERT INTO products
(product_name, category, description, price, image)
VALUES (?, ?, ?, ?, ?)"
);

mysqli_stmt_bind_param(
$stmt,
"sssis",
$product_name,
$category,
$description,
$price,
$image
);

if(mysqli_stmt_execute($stmt)){

header("Location: products.php");
exit();

}else{

echo "Error saving product";

}

mysqli_stmt_close($stmt);

}
?>