<?php
include 'config.php';

$sql = "SELECT id, name, description, price, quantity, barcode, createdAt, updatedAt FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Quantity</th><th>Barcode</th><th>Created At</th><th>Updated At</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td><td>" . $row["price"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["barcode"] . "</td><td>" . $row["createdAt"] . "</td><td>" . $row["updatedAt"] . "</td>";
        echo "<td><a href='update_product.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete_product.php?id=" . $row["id"] . "'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
