<?php
include("functions/functions.php");
?>
<!DOCTYPE html>
<head>
<title>My Online Shop</title>
<link rel="stylesheet" a href="styles/style.css" type="text/css" media="all"/>
</head>
<body>
  <!--main container starts here-->
   <div class="main_wrapper">


<div class="header_wrapper">
<!--header starts here-->
<img id="banner" src="images/slogan.gif" />
<img id="logo" src="images/logo.png" />


 </div>
 <!--header ends here-->
 
 <!--navigaton bar starts here-->
 
<div class="menubar">
 <!--navigaton bar starts here-->
 <ul id="menu">
 <li><a href="#">Home</a></li>
 <li><a href="#">All Products</a></li>
 <li><a href="#">My Account</a></li>
 <li><a href="#">Sign Up</a></li>
 <li><a href="#">Shopping Cart</a></li>
 <li><a href="#">Contact Us</a></li>
 </ul>
 <div id="form">
 <form method="get" action="results.php" enctype="multipart/form-data">
 <input type="text" name="user_query" placeholder="search a product"/>
 <input type="submit" name="search" value="Search" />
 
 </form></div>
 </div>
 <!--navigaton bar ends here-->
 
 
 <!--content wrapper starts-->
<div class="content_wrapper">
<div id="sidebar">

	<div id="sidebar_title">Categories</div>
	
	<ul id="carts">
	
<?php
getCarts();

	?>
	</ul>
	
	<div id="sidebar_title">Brands</div>
	<ul id="carts">
<?php getBrands(); ?> 
	</ul>
</div>
<div id ="content_area"></div>
<!--content wrapper starts-->

<div id="footer">
<h2 style="text-align:center;padding-top:30px;">&copy;2015 by www.e-market.org </h2></div>  

</div>
<!--main wrapper ends here-->
   
</body>
</html>