<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $barcode = $_POST['barcode'];

    $sql = "UPDATE products SET name='$name', description='$description', price=$price, quantity=$quantity, barcode='$barcode' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully";
    } else {
        echo "Error updating product: " . $conn->error;
    }

    $conn->close();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        Description: <textarea name="description"><?php echo $row['description']; ?></textarea><br>
        Price: <input type="number" step="0.01" name="price" value="<?php echo $row['price']; ?>" required><br>
        Quantity: <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required><br>
        Barcode: <input type="text" name="barcode" value="<?php echo $row['barcode']; ?>"><br>
        <input type="submit" value="Update Product">
    </form>
<?php
}
$conn->close();
?>
