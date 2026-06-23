<?php
include('db.php');

if(isset($_POST['product_name'])){

    $name = $_POST['product_name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $query = "INSERT INTO products (product_name, category, description, price, image)
              VALUES ('$product_name', '$category', '$description', '$price', '$image')";

    mysqli_query($conn, $query);

    header("Location: products.php");
}
?>