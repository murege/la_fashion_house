<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

include('db.php');

if(isset($_POST['login'])) {

    $email = strtolower(trim($_POST['email']));
    $password = trim($_POST['password']);

    // STEP 1: get user by email only
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        // STEP 2: verify hashed password
        if(password_verify($password, $user['password'])) {

            $_SESSION['user'] = $user['email'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['role'] = $user['role'];

            // redirect based on role
            if($user['role'] == 'admin') {
                header("Location: admin_panel.php");
                exit();
            } else {
                header("Location: user_dashboard.php");
                exit();
            }

        } else {
            die("Wrong password");
        }

    } else {
        die("Email not found");
    }
}
?>