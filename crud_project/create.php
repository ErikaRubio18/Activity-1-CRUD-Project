<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $barcode = $_POST['barcode'];

    $sql = "INSERT INTO products (name, description, price, quantity, barcode) 
            VALUES ('$name', '$description', $price, $quantity, '$barcode')";

    if ($conn->query($sql) === TRUE) {
        echo "New product created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form method="POST" action="">
    Name: <input type="text" name="name" required><br>
    Description: <textarea name="description"></textarea><br>
    Price: <input type="number" step="0.01" name="price" required><br>
    Quantity: <input type="number" name="quantity" required><br>
    Barcode: <input type="text" name="barcode"><br>
    <input type="submit" value="Create Product">
</form>
