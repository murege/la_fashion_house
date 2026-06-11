<?php
session_start();
include('db.php');
if(isset ($_POST['login']))
    {
$email =strtolower(trim($_POST['email']));
$password = trim($_POST['password']);
    }

$sql = "SELECT * FROM users
        WHERE email='$email'
        AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1)
{
    $user = mysqli_fetch_assoc($result);

    $_SESSION['user'] = $user['email'];
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['fullname'] = $user['fullname'];
    $_SESSION['role'] = $user['role'];

    if($user['role'] == 'admin')
    {
        header("Location: admin_panel.php");
        exit();
    }
    else
    {
        header("Location: user_dashboard.php");
        exit();
    }
}
else
{
    die("Login failed. Email or password not found in database.");
}
?>