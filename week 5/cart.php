<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-5">

    <h2 class="text-center mb-4">
        Shopping Cart
    </h2>

    <table class="table table-bordered">

        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>

        <?php

        $grandTotal = 0;

        if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0)
        {
            foreach($_SESSION['cart'] as $item)
            {
                $total = $item['price'] * $item['quantity'];
                $grandTotal += $total;
        ?>

        <tr>
            <td><?php echo $item['name']; ?></td>
            <td>KSh <?php echo $item['price']; ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td>KSh <?php echo $total; ?></td>
        </tr>

        <?php
            }
        }
        else
        {
            echo "<tr><td colspan='4' class='text-center'>Cart is Empty</td></tr>";
        }
        ?>

        <tr>
            <td colspan="3">
                <strong>Grand Total</strong>
            </td>
            <td>
                <strong>KSh <?php echo $grandTotal; ?></strong>
            </td>
        </tr>

    </table>

    <a href="products.php" class="btn btn-primary">
        Continue Shopping
    </a>

    <a href="clear_cart.php" class="btn btn-danger">
        Clear Cart
    </a>

</div>

<?php include('includes/footer.php'); ?>