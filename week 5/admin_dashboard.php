<?php
session_start();

// SECURITY FIRST
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include('db.php');
include('includes/header.php');
include('includes/navbar.php');

// COUNTS (dynamic instead of hardcoded)
$users = mysqli_query($conn, "SELECT COUNT(*) as total FROM users");
$users = mysqli_fetch_assoc($users)['total'];

$products = mysqli_query($conn, "SELECT COUNT(*) as total FROM products");
$products = mysqli_fetch_assoc($products)['total'];

$orders = mysqli_query($conn, "SELECT COUNT(*) as total FROM orders");
$orders = mysqli_fetch_assoc($orders)['total'];
?>

<div class="container mt-5">

    <h1 class="text-center mb-4">Admin Dashboard</h1>

    <div class="row">

        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body text-center">
                    <h3>Users</h3>
                    <h2><?php echo $users; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body text-center">
                    <h3>Products</h3>
                    <h2><?php echo $products; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-warning text-dark">
                <div class="card-body text-center">
                    <h3>Orders</h3>
                    <h2><?php echo $orders; ?></h2>
                </div>
            </div>
        </div>

    </div>

    <hr class="my-5">

    <div class="row">

        <div class="col-md-4 mb-3">
            <a href="add_product.php" class="btn btn-dark w-100">Add Product</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="manage_product.php" class="btn btn-primary w-100">Manage Products</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="orders.php" class="btn btn-success w-100">View Orders</a>
        </div>

    </div>

</div>

<?php include('includes/footer.php'); ?>