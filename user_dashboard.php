<?php
session_start();

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">
            Welcome to Your Dashboard
        </h1>

        <p class="text-muted">
            Manage your account and shopping activities.
        </p>
    </div>

    <div class="row">

        <!-- Profile -->
        <div class="col-md-3 mb-4">
            <div class="card shadow text-center h-100">
                <div class="card-body">
                    <h2>👤</h2>
                    <h5>My Profile</h5>
                    <p>View and update account details.</p>
                    <a href="profile.php" class="btn btn-dark">
                        View Profile
                    </a>
                </div>
            </div>
        </div>

        <!-- Orders -->
        <div class="col-md-3 mb-4">
            <div class="card shadow text-center h-100">
                <div class="card-body">
                    <h2>📦</h2>
                    <h5>My Orders</h5>
                    <p>Track all your purchases.</p>
                    <a href="orders.php" class="btn btn-primary">
                        View Orders
                    </a>
                </div>
            </div>
        </div>

        <!-- Cart -->
        <div class="col-md-3 mb-4">
            <div class="card shadow text-center h-100">
                <div class="card-body">
                    <h2>🛒</h2>
                    <h5>Shopping Cart</h5>
                    <p>Review items before checkout.</p>
                    <a href="cart.php" class="btn btn-success">
                        Open Cart
                    </a>
                </div>
            </div>
        </div>

        <!-- Settings -->
        <div class="col-md-3 mb-4">
            <div class="card shadow text-center h-100">
                <div class="card-body">
                    <h2>⚙️</h2>
                    <h5>Account Settings</h5>
                    <p>Manage login and preferences.</p>
                    <a href="settings.php" class="btn btn-warning">
                        Settings
                    </a>
                </div>
            </div>
        </div>

    </div>

    <hr class="my-5">

    <div class="card bg-dark text-white shadow">
        <div class="card-body text-center p-5">
            <h3>LA Fashion House</h3>
            <p>
                Discover the latest fashion trends and exclusive collections.
            </p>

            <a href="products.php"
               class="btn btn-light">
               Continue Shopping
            </a>
        </div>
    </div>

</div>

<?php include('includes/footer.php'); ?>