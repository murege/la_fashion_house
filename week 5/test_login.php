<?php
include('db.php');

$email = 'grace@gmail.com';

$result = mysqli_query(
    $conn,
    "SELECT * FROM users WHERE email='$email'"
);

echo "Rows found: " . mysqli_num_rows($result);
?>