<?php
include('db.php');
include('includes/header.php');
include('includes/navbar.php');

$id = $_GET['id'];

// GET CURRENT PRODUCT DATA
$query = "SELECT * FROM products WHERE id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// UPDATE PRODUCT
if(isset($_POST['update'])){

    $name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $image = $_POST['image']; // simple version (same images folder)

    $update = "UPDATE products SET 
                product_name='$name',
                category='$category',
                price='$price',
                description='$description',
                image='$image'
                WHERE id=$id";

    mysqli_query($conn, $update);

    header("Location: manage_product.php");
}
?>

<div class="container mt-5">

<h2>Edit Product</h2>

<form method="POST">

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="product_name"
               value="<?php echo $row['product_name']; ?>"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Category</label>
        <input type="text" name="category"
               value="<?php echo $row['category']; ?>"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description"
                  class="form-control"><?php echo $row['description']; ?></textarea>
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="number" name="price"
               value="<?php echo $row['price']; ?>"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Image (filename from images folder)</label>
        <input type="text" name="image"
               value="<?php echo $row['image']; ?>"
               class="form-control">
    </div>

    <button name="update" class="btn btn-success">
        Update Product
    </button>

</form>

</div>

<?php include('includes/footer.php'); ?>