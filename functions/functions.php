<?php
 $con=mysqli_connect("localhost","root","spoiler433","ecommerce");
 
//getting the categories

function getCarts(){
	global $con;
$get_carts="select * from categories";
$run_carts=mysqli_query($con,$get_carts);
while($row_carts=mysqli_fetch_array($run_carts)){
	$cart_id=$row_carts['cart_id'];
	$cart_title=$row_carts['cart_title'];
	echo "<li><a href='#'>$cart_title</a></li>";
}
	
}
//getting the brands

function getBrands(){ 
	global $con;
$get_brands="select * from brands";
$run_brands=mysqli_query($con,$get_brands);
while($row_brands=mysqli_fetch_array($run_brands)){
	$brand_id=$row_brands['brand_id'];
	$brand_title=$row_brands['brand_title'];
	echo "<li><a href='#'>$brand_title</a></li>";
}
	
}