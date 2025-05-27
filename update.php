<?php
include 'data.php';

$id = $_GET['id'] ?? null;

if (!$id || !isset($products[$id])) {
    echo "Product not found!";
    exit;
}

$product = $products[$id];

// Process update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $products[$id]['name'] = $_POST['name'];
    $products[$id]['category'] = $_POST['category'];
    $products[$id]['price'] = (float) $_POST['price'];
    $products[$id]['stock'] = (int) $_POST['stock'];
    echo "<p style='color:green;'>Product updated! (Changes won't persist after refresh)</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
</head>
<body>
    <h2 style="text-align:center;">Update Product #<?= $id ?></h2>
    <form method="post" style="width:300px; margin:auto;">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>"><br><br>
        <label>Category:</label><br>
        <input type="text" name="category" value="<?= htmlspecialchars($product['category']) ?>"><br><br>
        <label>Price ($):</label><br>
        <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>"><br><br>
        <label>Stock:</label><br>
        <input type="number" name="stock" value="<?= $product['stock'] ?>"><br><br>
        <button type="submit">Update</button>
    </form>
    <p style="text-align:center;"><a href="index.php">← Back to list</a></p>
</body>
</html>
