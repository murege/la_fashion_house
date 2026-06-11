<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-5">

<h2>Add Product</h2>

<form action="save_product.php" method="POST">

    <div class="mb-3">
        <label>Product Name</label>
        <input type="text"
               name="product_name"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Category</label>
        <input type="text"
               name="category"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea
            name="description"
            class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="number"
               name="price"
               class="form-control">
    </div>

    <button class="btn btn-success">
        Save Product
    </button>

</form>

</div>

<?php include('includes/footer.php'); ?>