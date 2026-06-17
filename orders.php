<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include('db.php');
include('includes/header.php');
include('includes/navbar.php');

$result = mysqli_query($conn, "SELECT * FROM orders ORDER BY id DESC");
?>

<div class="container mt-5">

    <h2 class="mb-4">Admin - Manage Orders 📦</h2>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Order ID</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>payment_method</th>
                        <th>amount</th>
                        <th>Status</th>
                        <th>Update Status</th>
                    </tr>
                </thead>

                <tbody>

                <?php if (mysqli_num_rows($result) > 0) { ?>

                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['order_id']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['payment_method']; ?></td>
                            <td><?php echo $row['amount']; ?></td>
                            

                            <!-- STATUS DISPLAY -->
                            <td>
                                <?php 
                                $status = $row['status'];

                                if ($status == "Pending") {
                                    echo "<span class='badge bg-warning text-dark'>Pending</span>";
                                } elseif ($status == "Processing") {
                                    echo "<span class='badge bg-info'>Processing</span>";
                                } elseif ($status == "Out for Delivery") {
                                    echo "<span class='badge bg-primary'>Out for Delivery</span>";
                                } elseif ($status == "Delivered") {
                                    echo "<span class='badge bg-success'>Delivered</span>";
                                } else {
                                    echo "<span class='badge bg-secondary'>$status</span>";
                                }
                                ?>
                            </td>

                            <!-- ACTION BUTTONS -->
                            <td>
                                <a href="update_status.php?id=<?php echo $row['id']; ?>&status=Processing"
                                   class="btn btn-info btn-sm">Processing</a>

                                <a href="update_status.php?id=<?php echo $row['id']; ?>&status=Out for Delivery"
                                   class="btn btn-primary btn-sm">Out</a>

                                <a href="update_status.php?id=<?php echo $row['id']; ?>&status=Delivered"
                                   class="btn btn-success btn-sm">Done</a>
                            </td>

                        </tr>
                    <?php } ?>

                <?php } else { ?>
                    <tr>
                        <td colspan="8" class="text-center text-muted">
                            No Orders Found 🛒
                        </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>

        </div>
    </div>

</div>

<?php include('includes/footer.php'); ?>