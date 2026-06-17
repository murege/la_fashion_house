<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "la_fashion_house";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connected successfully!";
?>