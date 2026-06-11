<?php
session_start();

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-5">

    <h1 class="text-center mb-4">
        Admin Dashboard
    </h1>

    <div class="row">

        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body text-center">
                    <h3>Users</h3>
                    <h2>25</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body text-center">
                    <h3>Products</h3>
                    <h2>8</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-warning text-dark">
                <div class="card-body text-center">
                    <h3>Orders</h3>
                    <h2>12</h2>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <div class="row">

        <div class="col-md-4 mb-3">
            <a href="add_product.php" class="btn btn-dark w-100">
                Add Product
            </a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="manage_products.php" class="btn btn-primary w-100">
                Manage Products
            </a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="view_orders.php" class="btn btn-success w-100">
                View Orders
            </a>
        </div>

    </div>

</div>
<li class="nav-item">
    <a class="nav-link" href="dashboard.php">
        Dashboard
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="admin_panel.php">
        Admin Panel
    </a>
</li>

<?php include('includes/footer.php'); ?>