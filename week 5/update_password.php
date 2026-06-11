<?php
session_start();
include('config/db.php');

$password = $_POST['password'];
$email = $_SESSION['user'];

mysqli_query($conn,
"UPDATE users
SET password='$password'
WHERE email='$email'");

header("Location: settings.php");
exit();
?>