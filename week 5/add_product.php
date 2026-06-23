<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-5">

<h2 class="mb-4">Add Product 🛍️</h2>

<form action="save_product.php" method="POST">

<div class="mb-3">
<label class="form-label">Product Name</label>
<input type="text"
name="product_name"
class="form-control"
required>
</div>

<div class="mb-3">
<label class="form-label">Category</label>
<input type="text"
name="category"
class="form-control"
required>
</div>

<div class="mb-3">
<label class="form-label">Description</label>
<textarea
name="description"
class="form-control">
</textarea>
</div>

<div class="mb-3">
<label class="form-label">
Price (Ksh)
</label>

<input
type="number"
name="price"
class="form-control"
required>
</div>

<!-- IMAGE SELECT -->
<div class="mb-3">

<label class="form-label">
Select Product Image
</label>

<select
id="imageSelect"
name="image"
class="form-select"
size="11"
required>
<?php
echo "<br>Current file:";
echo_FILE_;
echo"<br><br>";
echo "Images path:<br>";
echo realpath("images");
echo "<br><br>";
print_r(scandir("images"));
?>

<option value="">
-- Choose Image --
</option>
<option value="dress1.jpg">dress1.jpg</option>
<option value="dress2.jpg">dress2.jpg</option>
<option value="shoes.jpg">shoes.jpg</option>
<option value="heels.jpg">heels.jpg</option>

<option value="bag1.jpg">bag1.jpg</option>
<option value="bag.jpg">bag.jpg</option>

<option value="sneakers.jpg">sneakers.jpg</option>
<option value="sneakers1.jpg">sneakers1.jpg</option>

<option value="trousers.jpg">trousers.jpg</option>

<option value="mens-shirt.jpg">mens-shirt.jpg</option>

<option value="mens-jacket.jpg">mens-jacket.jpg</option>

</select>

</div>

<!-- PREVIEW -->
<div class="mt-3">

<img
id="preview"
src=""
width="200"
style="display:none; border-radius:10px;">

</div>

<button
type="submit"
class="btn btn-success">

Save Product

</button>

</form>

</div>

<script>

const select =
document.getElementById("imageSelect");

const preview =
document.getElementById("preview");

select.addEventListener(
"change",
function(){

if(this.value){

preview.src =
"images/" +
this.value;

preview.style.display =
"block";

}else{

preview.style.display =
"none";

}

}
);

</script>

<?php include('includes/footer.php'); ?>