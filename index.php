<?php
session_start();

// 🔒 Redirect if not logged in
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include('includes/header.php');
include('includes/navbar.php');
?>

<!-- USER WELCOME -->
<div class="container mt-3">
    <div class="alert alert-success text-center">
        Welcome, <?php echo $_SESSION['fullname']; ?> 👋
        <a href="logout.php" class="btn btn-sm btn-danger ms-3">Logout</a>
    </div>
</div>

<!-- HERO SECTION -->
<section class="hero d-flex align-items-center justify-content-center text-center text-white"
    style="background: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url('images/fashion-hero.jpg') no-repeat center center/cover;
    min-height: 80vh;">

    <div>
        <h1 class="display-2 fw-bold mb-3" style="letter-spacing: 2px;">
            <span style="color:#ff69b4;">LA FASHION HOUSE</span>
        </h1>

        <p class="lead mb-4 text-uppercase" style="font-size: 1.1rem; color: #dcdcdc;">
            Luxury • Elegance • Modern Style
        </p>

        <a href="products.php" class="btn btn-fashion px-5 py-3 text-uppercase fw-semibold">
            Shop The Collection
        </a>
    </div>
</section>

<!-- CATEGORIES -->
<div class="container mt-5">

    <h2 class="section-title">Shop By <span>Category</span></h2>

    <div class="row text-center">

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>👗 Women's Wear</h4>
                    <p>Elegant dresses and trendy outfits.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>🧥 Men's Wear</h4>
                    <p>Modern and stylish fashion.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>👠 Accessories</h4>
                    <p>Bags, shoes and fashion accessories.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- FEATURED PRODUCTS -->
<div class="container mt-5">

    <h2 class="section-title">Featured <span>Products</span></h2>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card product-card">
                <img src="images/dress1.jpg" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Luxury Evening Dress</h5>
                    <p>Elegant premium evening dress for special occasions.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card product-card">
                <img src="images/shoes1.jpg" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Designer Heels</h5>
                    <p>Stylish heels for both casual and formal wear.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card product-card">
                <img src="images/jacket1.jpg" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Premium Jacket</h5>
                    <p>Modern comfortable jacket for everyday fashion.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- WHY CHOOSE US -->
<div class="container mt-5">
    <div class="row text-center">

        <div class="col-md-4">
            <h3>🚚</h3>
            <h5>Fast Delivery</h5>
            <p>Quick and reliable shipping.</p>
        </div>

        <div class="col-md-4">
            <h3>💳</h3>
            <h5>Secure Payment</h5>
            <p>Safe and trusted transactions.</p>
        </div>

        <div class="col-md-4">
            <h3>⭐️</h3>
            <h5>Quality Products</h5>
            <p>Premium fashion at affordable prices.</p>
        </div>

    </div>
</div>
<!-- NEWSLETTER -->
<div class="container mt-5 mb-5">
    <div class="card bg-dark text-white p-5 text-center">

        <h3>Join Our Fashion Community</h3>
        <p>Subscribe to get updates and offers.</p>

        <form class="row justify-content-center">
            <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="col-md-2">
                <button class="btn btn-fashion w-100">
                    Subscribe
                </button>
            </div>
        </form>

    </div>
</div>

<?php include('includes/footer.php'); ?>