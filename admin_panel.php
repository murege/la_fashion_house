<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}

include('includes/header.php');
include('includes/navbar.php');
?>
<link rel="stylesheet" href="style.css">

<div class="container mt-5">

<h1 class="text-center">
    LA Fashion House Admin Centre
</h1>

<div class="row mt-4">

<div class="col-md-3">
<div class="card shadow">
<div class="card-body text-center">
<h4>Add Product</h4>
<a href="add_product.php"
class="btn btn-dark">
Open
</a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow">
<div class="card-body text-center">
<h4>Manage Products</h4>
<a href="manage_products.php"
class="btn btn-primary">
Open
</a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow">
<div class="card-body text-center">
<h4>Orders</h4>
<a href="orders.php"
class="btn btn-success">
Open
</a>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow">
<div class="card-body text-center">
<h4>Users</h4>
<a href="users.php"
class="btn btn-warning">
Open
</a>
</div>
</div>
</div>

</div>

</div>

<?php include('includes/footer.php'); ?>