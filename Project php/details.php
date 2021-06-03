<?php

	session_start();

	include("connection.php");
	include("function.php");

	//User validation check
	$user_data = check_login($con);


?>

<!DOCTYPE >
<?php
include("functions/functions.php");

?>
<html>
<head>
	<title>my online shop</title>

	<link rel="stylesheet" type="text/css" href="Css/style.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="Css/details.css" media="all"/>

</head>
<body>
<!--main wrapper stras from here-->
	<div class="main_wrapper">
	<!--header starts here	
		<div class="header_wrapper">
		
			<img id="logo" src="" alt="image" />
			<img id="banner" src="" alt="image" />
		</div>
		header ends here-->

		<!--navigation bar starts

		<div class="menubar">
			<ul id="menu">
				<li> <a href="#">Home </a></li>
				<li> <a href="#">All products</a></li>
				<li> <a href="#">My account </a></li>
				<li> <a href="#">Sign up </a></li>
				<li> <a href="#">shopping Cart </a></li>
				<li> <a href="#">contact us </a></li>
			
			</ul>

			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text"  name="user_query" placeholder="search a product"/>
					<input type="submit" name="search" value="search"/>

				</form>

			</div>

		 </div>
	navigation bar end-->
		
	<!--content wrapper starts-->
		<div class="content_wrapper">

		<div id="sidebar">

			<div id="sidebar_title">categories</div>
			
			<ul id="cats">
			<?php getCats();  ?>
			
			</ul>

			<div id="sidebar_title">Brands</div>
			
			<ul id="cats">
			
			<?php getBrands();  ?>
			
			</ul>
		

		</div>

		<div id="content_area">

			<div id="shopping_cart">
				<span style="float: right; font-size: 18px; padding: 5px; line-height:40px; ">

				Welcome Guest! <b style="color: yellow">Shopping Cart - </b>Total Items:  Total price: <a href="cart.php" style="color:orange;">GO to Cart</a>
			</span>
				
			</div>




			
		

<?php

if (isset($_GET['pro_id'])) {
	# code...


$product_id =$_GET['pro_id'];

$get_pro="select * from products Where product_id='$product_id' ";

$run_pro=mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

	$pro_id=$row_pro['product_id'];

	$pro_title=$row_pro['product_title'];
	$pro_price=$row_pro['product_price'];
	$pro_image=$row_pro['product_image'];

	$pro_desc = $row_pro['product_desc'];

echo "

<div id='single_product'>

	<div id='col1'>

		<div>
					<img src='product_images/$pro_image' width='400' height='300'>
		</div>

		<div id= 'content'>
			<h1>$pro_title</h1>

			<p id='price'> $ $pro_price </p>

			<a href='index.php? pro_id = $pro_id'><center><button style='float:right'>Add TO Cart </button></center></a>

			<a href='index.php'  style='float:left;'>Go Back</a>

		</div>	

   </div>
   
     <h2>DESCRIPTION</h2>
	<p> $pro_desc</p>

</div> 

";



}

	

}

					?>

					
		
		</div>

	</div>
	<!--content wrapper end-->

	<!--footer starts-->

		<div id="footer">
			<h2 style="text-align: center; padding-top: 0px;">&copy;2021 pasidhu naveen </h2>
		</div>

		<!--footer starts-->


	</div>
<!--main wrapper stras from here-->
</body>
</html>