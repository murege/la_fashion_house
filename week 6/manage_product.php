<?php

include('db.php');
include('includes/header.php');
include('includes/navbar.php');

$result = mysqli_query($conn,
"SELECT * FROM products");
if(!$result){
    die("Query failed:" .mysqli_error($conn));
}
?>

<div class="container mt-5">

<h2>Manage Products</h2>

<table class="table table-bordered">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['price']; ?></td>

<td>

<a href="edit_product.php?id=<?php echo $row['id']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a href="delete_product.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm">

Delete

</a>

</td>

</tr>

<?php
}
?>

</table>

</div>

<?php include('includes/footer.php'); ?>