<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully";
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    $conn->close();
}
?>
<a href="read_products.php">Back to list</a>
