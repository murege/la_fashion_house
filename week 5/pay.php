<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('db.php'); // database connection

// Check cart
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<div class='container mt-5'><h3 class='text-center'>Cart is empty 🛒</h3></div>";
    include('includes/footer.php');
    exit;
}

// Handle payment
if (isset($_POST['pay_method'])) {

    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);

    // Validation
    if ($phone == "" || $address == "") {
        echo "<div class='container mt-5'><h4 class='text-danger text-center'>Phone and Address are required</h4></div>";
        include('includes/footer.php');
        exit;
    }

    // Calculate total
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    $orderId = rand(10000, 99999);

    // Save main order
    mysqli_query($conn, "INSERT INTO orders 
    (order_id, phone, address, payment_method, amount, status)
    VALUES (
        '$orderId',
        '$phone',
        '$address',
        '{$_POST['pay_method']}',
        '$total',
        'Processing'
    )");

    // OPTIONAL: Save each item (ONLY if you have order_items table)
    /*
    foreach ($_SESSION['cart'] as $item) {

        $name = $item['name'];
        $price = $item['price'];
        $qty = $item['quantity'];
        $totalItem = $price * $qty;

        mysqli_query($conn, "INSERT INTO order_items
        (order_id, product_name, price, quantity, total)
        VALUES (
            '$orderId',
            '$name',
            '$price',
            '$qty',
            '$totalItem'
        )");
    }
    */

    // Clear cart
    $_SESSION['cart'] = [];

    ?>

    <div class="container mt-5 text-center">

        <h2 class="text-success">Payment Successful 🎉</h2>

        <div class="card p-4 mt-3">

            <p><strong>Order ID:</strong> <?= $orderId ?></p>
            <p><strong>Phone:</strong> <?= $phone ?></p>
            <p><strong>Address:</strong> <?= $address ?></p>
            <p><strong>Payment Method:</strong> <?= $_POST['pay_method'] ?></p>
            <p><strong>Status:</strong> Processing</p>

            

        </div>

    </div>

    <?php
    include('includes/footer.php');
    exit;
}

// Calculate total
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>

<div class="container mt-5">

    <h2 class="text-center mb-4">Checkout 💳</h2>

    <div class="card p-4 shadow-sm">

        <h4 class="mb-3">Total Amount: <strong>KSh <?= $total ?></strong></h4>

        <form method="POST">

            <div class="form-group mb-3">
                <label>Phone Number 📱</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>Delivery Address 🏠</label>
                <textarea name="address" class="form-control" required></textarea>
            </div>

            <div class="form-group mb-3">
                <label>Payment Method 💳</label><br>

                <input type="radio" name="pay_method" value="Cash on Delivery" required> Cash on Delivery <br>
                <input type="radio" name="pay_method" value="M-Pesa"> M-Pesa <br>
                <input type="radio" name="pay_method" value="Card"> Card Payment

            </div>

            <button type="submit" class="btn btn-success btn-lg w-100">
                Checkout
            </button>

        </form>

    </div>

</div>

<?php include('includes/footer.php'); ?>