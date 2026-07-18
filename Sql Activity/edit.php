<?php

include 'config.php';

$id=$_GET['id'];

$product=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE product_id=$id"));

if(isset($_POST['update'])){

$name=$_POST['name'];
$category=$_POST['category'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

mysqli_query($conn,"UPDATE products SET

product_name='$name',

category='$category',

price='$price',

quantity='$quantity'

WHERE product_id=$id");

header("Location:index.php");

}
?>

<!DOCTYPE html>

<html>

<head>

<title>Edit Product</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h3>Edit Product</h3>

<form method="POST">

<div class="mb-3">

<label>Product Name</label>

<input type="text" name="name"

value="<?php echo $product['product_name']; ?>"

class="form-control">

</div>

<div class="mb-3">

<label>Category</label>

<input type="text" name="category"

value="<?php echo $product['category']; ?>"

class="form-control">

</div>

<div class="mb-3">

<label>Price</label>

<input type="number"

step="0.01"

name="price"

value="<?php echo $product['price']; ?>"

class="form-control">

</div>

<div class="mb-3">

<label>Quantity</label>

<input type="number"

name="quantity"

value="<?php echo $product['quantity']; ?>"

class="form-control">

</div>

<button class="btn btn-primary" name="update">

Update

</button>

<a href="index.php" class="btn btn-secondary">

Back

</a>

</form>

</div>

</body>

</html>