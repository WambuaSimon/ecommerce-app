<?php
include("includes/db.php");
?>


<!DOCTYPE html>
<head>
<title>Inserting Product</title>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
	tinymce.init({selector:'textarea'});
	</script>
</head>
<body bgcolor="skyblue">

<form action="insert_product.php" method="post" enctype="multipart/form-data">

<table align="center" width="700" border="2" bgcolor="purple ">

<tr align="center">
	<td colspan='8'><h2>Insert new post here</h2></td>
	
	</tr>
	<tr>
	<td align='right' ><b>Product Title:</b></td>
	<td><input type="text" name="product_title" size="60" required /></td>
	</tr>
	<tr>
	<td align='right'><b>Product Category:</b></td>
	<td>
	<select name="product_cart" required>
	<option>Select a category<br>  </option>
	<?php
	$get_carts="select * from categories";
$run_carts=mysqli_query($con,$get_carts);
while($row_carts=mysqli_fetch_array($run_carts)){
	$cart_id=$row_carts['cart_id'];
	$cart_title=$row_carts['cart_title'];
	echo "<option value='$cart_id'>$cart_title<option>";
}
?>
</select>
	
	
	</tr>
	<tr>
	<td align='right'><b>Product Brand:</b></td>
	<td>
	<select name="product_brand" required>
	<option>Select a brand<br>  </option>
	<?php
	$get_brands="select * from brands";
$run_brands=mysqli_query($con,$get_brands);
while($row_brands=mysqli_fetch_array($run_brands)){
	$brand_id=$row_brands['brand_id'];
	$brand_title=$row_brands['brand_title'];
	echo "<option value='$brand_id'>$brand_title<option>";
}
?>
	</tr>
	<tr>
	<td align='right'><b>Product Image:</b></td>
	<td><input type="file" name="product_image" required /></td>
	</tr>
	<tr>
	<td align='right'><b>Product Price:</b></td>
	<td><input type="text" name="product_price" /></td>
	</tr>
	<tr>
	<td align="right"><b>Product Description:</b></td>
	<td><textarea name="product_desc" cols="20" rows="20" > </textarea></td>
	</tr>
	<tr>
	<td align='right'><b>Product Keywords:</b></td>
	<td><input type="text" name="product_keywords" size="50" required/></td>
	</tr>
	
	
	<tr align="center">
	<td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now" /></td>
	</tr>
	
	</table>
	</form>
	<?php
	if(isset($_POST['insert_post'])){
		//getting the text data from the fields
$product_title=$_POST['product_title'];
$product_cart=$_POST['product_cart'];
$product_brand=$_POST['product_brand'];
$product_price=$_POST['product_price'];
$product_desc=$_POST['product_desc'];		
$product_keywords=$_POST['product_keywords'];

//getting the image from the fields
$product_image=$_FILES['product_image']['name'];
$product_img_tmp=$_FILES['product_image']['tmp_name'];

 move_uploaded_file($product_image_tmp,"product_images/$product_image");
 $insert_product="insert into products(product_cart,product_brand,product_title,product_price,product_desc,product_image,product_keywords )values('$product_cart','$product_brand','$product_title','product_price','$product_desc','$product_image','$product_keywords')" ;
	$insert_pro=mysqli_query($con,$insert_product);
	if($insert_pro){
		echo "<script>alert('Product Has Been inserted!')</script>";
		echo "<script>window.open('insert_product.php','_self')</script>";
	}
	}
	