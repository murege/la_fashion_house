<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-5">

<h2>Account Settings</h2>

<div class="card shadow p-4">

<h5>Security</h5>

<a href="change_password.php"
   class="btn btn-dark mb-3">
   Change Password
</a>

<hr>

<h5>Session</h5>

<a href="logout.php"
   class="btn btn-danger">
   Logout
</a>

</div>

</div>

<?php include('includes/footer.php'); ?>