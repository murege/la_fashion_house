<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}

include('db.php');
include('includes/header.php');
include('includes/navbar.php');

$email = $_SESSION['user'];

$result = mysqli_query($conn,
"SELECT * FROM orders WHERE user_email='$email'");
?>

<div class="container mt-5">

    <h2 class="mb-4">My Orders</h2>

    <div class="card shadow">

        <div class="card-body">

            <table class="table table-bordered">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>

                </thead>

                <tbody>

                <?php

                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['product_name']."</td>
                            <td>".$row['quantity']."</td>
                            <td>".$row['order_status']."</td>
                            <td>".$row['order_date']."</td>
                        </tr>";
                    }
                }
                else
                {
                    echo "
                    <tr>
                        <td colspan='5' class='text-center'>
                            No Orders Found
                        </td>
                    </tr>";
                }

                ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?php include('includes/footer.php'); ?>