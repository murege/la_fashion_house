<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-5">

<h2>Change Password</h2>

<form action="update_password.php"
      method="POST">

<div class="mb-3">
<label>New Password</label>
<input type="password"
       name="password"
       class="form-control"
       required>
</div>

<button class="btn btn-dark">
Update Password
</button>

</form>

</div>

<?php include('includes/footer.php'); ?>