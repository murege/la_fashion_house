<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("db.php");

if (isset($_POST['register'])) {

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $raw_password = $_POST['password'];

    // ================= VALIDATION =================
    if (empty($fullname) || empty($email) || empty($raw_password)) {
        echo "<script>
                alert('All fields are required!');
                window.history.back();
              </script>";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
                alert('Invalid email format!');
                window.history.back();
              </script>";
        exit();
    }

    // ================= CHECK EMAIL EXISTS =================
    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($check) > 0) {
        echo "<script>
                alert('Email already exists! Please use another email.');
                window.history.back();
              </script>";
        exit();
    }

    // ================= SECURE PASSWORD =================
    $password = password_hash($raw_password, PASSWORD_DEFAULT);

    // ================= INSERT USER =================
    $sql = "INSERT INTO users (fullname, email, password)
            VALUES ('$fullname', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {

        // ================= SUCCESS =================
        echo "<script>
                alert('Registration successful!');
                window.location.href = 'login.php';
              </script>";
        exit();

    } else {

        // ================= FAILURE =================
        echo "<script>
                alert('Registration failed. Please try again.');
                window.history.back();
              </script>";
        exit();
    }
}
?>