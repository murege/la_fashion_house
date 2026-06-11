<?php
session_start();
include('config/db.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE email='$email'
        AND password='$password'
        AND role='admin'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{
    $_SESSION['admin'] = true;

    header("Location: admin_dashboard.php");
}
else
{
    echo "
    <script>
    alert('Invalid Admin Credentials');
    window.location='admin_login.php';
    </script>";
}
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}
?>
