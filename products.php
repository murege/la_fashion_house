<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('db.php');
?>

<div class="container mt-5">

    <h1 class="text-center mb-4">Our Collection</h1>

    <p class="text-center mb-5">
        Discover our latest fashion pieces carefully selected
        for style, elegance, and comfort.
    </p>
    <!-- ================= WOMEN COLLECTION ================= -->
    <h2 class="section-title text-center mb-4">
        Women's <span>Collection</span>
    </h2>

    <div class="row">

        <?php
        $query = "SELECT * FROM products WHERE category='Women'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){
        ?>

        <div class="col-md-3 mb-4">
            <div class="card product-card h-100">

                <img src="images/<?php echo $row['image']; ?>" class="card-img-top" height="200">

                <div class="card-body text-center">

                    <h5><?php echo $row['product_name']; ?></h5>

                    <p><?php echo $row['description']; ?></p>

                    <h6>KSh <?php echo $row['price']; ?></h6>

                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="name" value="<?php echo $row['product_name']; ?>">
                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">

                        <button type="submit" class="btn btn-fashion">
                            Add To Cart
                        </button>
                    </form>

                </div>
            </div>
        </div>

        <?php
            }
        } else {
            echo "<p class='text-center'>No women's products found</p>";
        }
        ?>

    </div>


    <!-- ================= MEN COLLECTION ================= -->
    <h2 class="section-title text-center mb-4 mt-5">
        Men's <span>Collection</span>
    </h2>

    <div class="row">

        <?php
        $query = "SELECT * FROM products WHERE category='Men'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){
        ?>

        <div class="col-md-3 mb-4">
            <div class="card product-card h-100">

                <img src="images/<?php echo $row['image']; ?>" class="card-img-top" height="200">

                <div class="card-body text-center">

                    <h5><?php echo $row['product_name']; ?></h5>

                    <p><?php echo $row['description']; ?></p>

                    <h6>KSh <?php echo $row['price']; ?></h6>

                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="name" value="<?php echo $row['product_name']; ?>">
                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">

                        <button type="submit" class="btn btn-fashion">
                            Add To Cart
                        </button>
                    </form>

                </div>
            </div>
        </div>

        <?php
            }
        } else {
            echo "<p class='text-center'>No men's products found</p>";
        }
        ?>

    </div>

</div>

<?php include('includes/footer.php'); ?>