<?php
include 'data.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>DSG Inventory|EAV KIVUMU TSS</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        .btn {
            padding: 5px 10px;
            background: #28a745;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h2 style="text-align:center;">DSG Ltd Inventory|EAV KIVUMU TSS</h2>
    <table>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price ($)</th>
            <th>Stock</th>
            <th>Action</th>
        </tr>
        <?php foreach ($products as $id => $product): ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['category']) ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['stock'] ?></td>
                <td><a href="update.php?id=<?= $id ?>" class="btn">Update</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>