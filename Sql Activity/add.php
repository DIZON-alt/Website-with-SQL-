<?php
include 'config.php';

if(isset($_POST['save'])){

$name=$_POST['name'];
$category=$_POST['category'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

mysqli_query($conn,"INSERT INTO products(product_name,category,price,quantity)

VALUES('$name','$category','$price','$quantity')");

header("Location:index.php");

}
?>

<!DOCTYPE html>

<html>

<head>

<title>Add Product</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h3>Add Product</h3>

<form method="POST" onsubmit="return validateForm();">

<div class="mb-3">

<label>Product Name</label>

<input type="text" id="name" name="name" class="form-control">

</div>

<div class="mb-3">

<label>Category</label>

<input type="text" id="category" name="category" class="form-control">

</div>

<div class="mb-3">

<label>Price</label>

<input type="number" step="0.01" id="price" name="price" class="form-control">

</div>

<div class="mb-3">

<label>Quantity</label>

<input type="number" id="quantity" name="quantity" class="form-control">

</div>

<button class="btn btn-success" name="save">

Save Product

</button>

<a href="index.php" class="btn btn-secondary">

Back

</a>

</form>

</div>

<script>

function validateForm(){

let name=document.getElementById("name").value;

let category=document.getElementById("category").value;

let price=document.getElementById("price").value;

let quantity=document.getElementById("quantity").value;

if(name==""||category==""||price==""||quantity==""){

alert("All fields are required.");

return false;

}

if(price<=0){

alert("Price must be greater than 0.");

return false;

}

if(quantity<0){

alert("Quantity cannot be less than 0.");

return false;

}

return true;

}

</script>

</body>

</html>