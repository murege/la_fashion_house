<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include('db.php');
include('includes/header.php');
include('includes/navbar.php');

$email = $_SESSION['user'];

$result = mysqli_query($conn,
"SELECT * FROM orders WHERE user_email='$email' ORDER BY id DESC");
?>

<div class="container mt-5">

    <h2>My Order Tracking & Delivery</h2>

    <table class="table table-bordered">

        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Payment</th>
            <th>Order Date</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['quantity']; ?></td>

            <td>
                <?php
                if ($row['order_status'] == "Pending") {
                    echo "<span class='badge bg-warning'>Pending</span>";
                } elseif ($row['order_status'] == "Processing") {
                    echo "<span class='badge bg-info'>Processing</span>";
                } elseif ($row['order_status'] == "Out for Delivery") {
                    echo "<span class='badge bg-primary'>Out for Delivery</span>";
                } elseif ($row['order_status'] == "Delivered") {
                    echo "<span class='badge bg-success'>Delivered</span>";
                }
                ?>
            </td>

            <td><?php echo $row['payment_method']; ?></td>
            <td><?php echo $row['order_date']; ?></td>
        </tr>

        <?php } ?>

    </table>

</div>
echo " <script>
    alert(Order placed successfully!);
    window.location.href='track_order.php';
    </script>
<?php include('includes/footer.php'); ?>