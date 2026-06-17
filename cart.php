<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

// Remove item logic
if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    unset($_SESSION['cart'][$index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    header("Location: cart.php");
    exit;
}
?>

<div class="container mt-5">

    <h2 class="text-center mb-4">Shopping Cart 🛒</h2>

    <table class="table table-bordered text-center">

        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        <?php
        $grandTotal = 0;

        if (!empty($_SESSION['cart'])) {

            foreach ($_SESSION['cart'] as $index => $item) {

                $total = $item['price'] * $item['quantity'];
                $grandTotal += $total;
        ?>

        <tr>
            <td><?= $item['name']; ?></td>
            <td>KSh <?= number_format($item['price']); ?></td>
            <td><?= $item['quantity']; ?></td>
            <td>KSh <?= number_format($total); ?></td>
            <td>
                <a href="cart.php?remove=<?= $index ?>" class="btn btn-sm btn-danger">
                    Remove
                </a>
            </td>
        </tr>

        <?php
            }

        } else {
            echo "<tr><td colspan='5' class='text-center'>Your cart is empty 🛒</td></tr>";
        }
        ?>

        <tr>
            <td colspan="3"><strong>Grand Total</strong></td>
            <td colspan="2">
                <strong>KSh <?= number_format($grandTotal); ?></strong>
            </td>
        </tr>

    </table>

    <div class="d-flex justify-content-between">

        <a href="products.php" class="btn btn-primary">
            Continue Shopping 🛍️
        </a>

        <a href="clear_cart.php" class="btn btn-danger">
            Clear Cart 🗑️
        </a>

        <a href="pay.php" class="btn btn-success btn-lg">
            Proceed to pay 💳
        </a>

    </div>

</div>

<?php include('includes/footer.php'); ?>