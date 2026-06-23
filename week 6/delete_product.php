<?php
include('db.php');

if (isset($_GET['id'])) {

    $id = intval($_GET['id']); // Security: convert to integer

    $query = "DELETE FROM products WHERE id=$id";

    if (mysqli_query($conn, $query)) {

        // Success message then redirect
        echo "<script>
                alert('Product deleted successfully');
                window.location.href='add_product.php';
              </script>";

    } else {
        echo "<script>
                alert('Error deleting product');
                window.location.href='manage_product.php';
              </script>";
    }

} else {
    echo "<script>
            alert('Invalid request');
            window.location.href='manage_product.php';
          </script>";
}
?>