<?php
session_start();

include('db.php');

$fullname = $_POST['fullname'];
$email = $_POST['email'];

$currentEmail = $_SESSION['user'];

$sql = "UPDATE users
        SET fullname='$fullname',
            email='$email'
        WHERE email='$currentEmail'";

mysqli_query($conn,$sql);

$_SESSION['user'] = $email;

header("Location: profile.php");
exit();
?>