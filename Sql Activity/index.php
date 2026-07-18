<?php
include 'config.php';

$result = mysqli_query($conn,"SELECT * FROM products");
$total = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>

<title>XYZ Product Inventory System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="text-center mb-4">
XYZ Product Inventory System
</h2>

<div class="d-flex justify-content-between mb-3">

<a href="add.php" class="btn btn-primary">
Add Product
</a>

<h5>Total Products:
<span class="badge bg-success">
<?php echo $total; ?>
</span>
</h5>

</div>

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Product Name</th>
<th>Category</th>
<th>Price</th>
<th>Quantity</th>
<th width="150">Action</th>

</tr>

</thead>

<tbody>

<?php

while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['product_id']; ?></td>

<td><?php echo $row['product_name']; ?></td>

<td><?php echo $row['category']; ?></td>

<td><?php echo $row['price']; ?></td>

<td><?php echo $row['quantity']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['product_id']; ?>" class="btn btn-warning btn-sm">

<i class="bi bi-pencil-square"></i>

</a>

<a href="delete.php?id=<?php echo $row['product_id']; ?>"

class="btn btn-danger btn-sm"

onclick="return confirm('Delete this product?');">

<i class="bi bi-trash"></i>

</a>

</td>

</tr>

<?php
}
?>

</tbody>

</table>

</div>

</body>
</html>