<?php
session_start();

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-5">

    <h1 class="text-center mb-4">Our Collection</h1>

    <p class="text-center mb-5">
        Discover our latest fashion pieces carefully selected
        for style, elegance, and comfort.
    </p>

    <!-- WOMEN COLLECTION -->
    <h2 class="section-title text-center mb-4">
        Women's <span>Collection</span>
    </h2>

    <div class="row">

        <!-- Product 1 -->
        <div class="col-md-3 mb-4">
            <div class="card product-card h-100">
                <img src="images/dress1.jpg" class="card-img-top" alt="Dress">

                <div class="card-body text-center">
                    <h5>Luxury Evening Dress</h5>
                    <p>Elegant evening wear suitable for weddings.</p>
                    <h6>KSh 4,500</h6>

                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="name" value="Luxury Evening Dress">
                        <input type="hidden" name="price" value="4500">

                        <button type="submit" class="btn btn-fashion">
                            Add To Cart
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col-md-3 mb-4">
            <div class="card product-card h-100">
                <img src="images/shoes1.jpg" class="card-img-top" alt="Heels">

                <div class="card-body text-center">
                    <h5>Designer Heels</h5>
                    <p>Sophisticated heels designed for elegance and comfort.</p>
                    <h6>KSh 3,800</h6>

                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="name" value="Designer Heels">
                        <input type="hidden" name="price" value="3800">

                        <button type="submit" class="btn btn-fashion">
                            Add To Cart
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="col-md-3 mb-4">
            <div class="card product-card h-100">
                <img src="images/bag1.jpg" class="card-img-top" alt="Bag">

                <div class="card-body text-center">
                    <h5>Luxury Handbag</h5>
                    <p>Stylish handbag perfect for daily fashion and events.</p>
                    <h6>KSh 4,200</h6>

                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="name" value="Luxury Handbag">
                        <input type="hidden" name="price" value="4200">

                        <button type="submit" class="btn btn-fashion">
                            Add To Cart
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <!-- MEN COLLECTION -->
    <h2 class="section-title text-center mb-4 mt-5">
        Men's <span>Collection</span>
    </h2>

    <div class="row">

        <!-- Shirt -->
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card product-card h-100">
                <img src="images/mens-shirt.jpg" class="card-img-top" alt="Shirt">

                <div class="card-body text-center">
                    <h5>Classic Men's Shirt</h5>
                    <p>Smart casual shirt for office and weekend wear.</p>
                    <h6>KSh 2,500</h6>
                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="5">
                        <input type="hidden" name="name" value="Classic Men's Shirt">
                        <input type="hidden" name="price" value="2500">

                        <button type="submit" class="btn btn-fashion">
                            Add To Cart
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Trousers -->
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card product-card h-100">
                <img src="images/trousers.jpg" class="card-img-top" alt="Trousers">

                <div class="card-body text-center">
                    <h5>Premium Trousers</h5>
                    <p>Comfortable and stylish trousers for all occasions.</p>
                    <h6>KSh 3,000</h6>

                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="6">
                        <input type="hidden" name="name" value="Premium Trousers">
                        <input type="hidden" name="price" value="3000">

                        <button type="submit" class="btn btn-fashion">
                            Add To Cart
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sneakers -->
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card product-card h-100">
                <img src="images/sneakers.jpg" class="card-img-top" alt="Sneakers">

                <div class="card-body text-center">
                    <h5>Urban Sneakers</h5>
                    <p>Trendy sneakers for comfort and everyday wear.</p>
                    <h6>KSh 4,500</h6>

                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="7">
                        <input type="hidden" name="name" value="Urban Sneakers">
                        <input type="hidden" name="price" value="4500">

                        <button type="submit" class="btn btn-fashion">
                            Add To Cart
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Jacket -->
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card product-card h-100">
                <img src="images/mens-jacket.jpg" class="card-img-top" alt="Jacket">

                <div class="card-body text-center">
                    <h5>Luxury Men's Jacket</h5>
                    <p>Premium jacket for a modern and classy look.</p>
                    <h6>KSh 5,800</h6>

                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="8">
                        <input type="hidden" name="name" value="Luxury Men's Jacket">
                        <input type="hidden" name="price" value="5800">

                        <button type="submit" class="btn btn-fashion">
                            Add To Cart
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

<?php include('includes/footer.php'); ?>