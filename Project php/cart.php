<?php

	session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);


?>


<!DOCTYPE >
<?php
include("functions/functions.php");

?>
<html>
<head>
	<title>my online shop</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"><!--This link got from www.fomtawesome web sitte to add icons -->
	<link rel="stylesheet" type="text/css" href="Css/O.M.I.S1.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="Css/cart.css">

</head>
<body>

		<!--Header start -->

	<div class="header">
		<div class="logo">
			<a href="O.M.I.S.php"><img src="Images/Logo/Logo04.jpg" alt="LOGO of Frandy O.M.I.S" style="width: 200px;"></a>
		</div>
		<div class="S1">
			<div id="slideshuffle" class="Slidingbanner">
				<img src="Images/Sliding Banners/banner 01.jpg" alt="Slidingbanner">
				<img src="Images/Sliding Banners/banner 02.jpg" alt="Slidingbanner">
				<img src="Images/Sliding Banners/banner 03.jpg" alt="Slidingbanner">
				<img src="Images/Sliding Banners/banner 04.jpg" alt="Slidingbanner">
			</div>
			<div class="cycle-control">
				<span id="next"><i class="fas fa-angle-right"></i></span>
				<span id="prev"><i class="fas fa-angle-left"></i></span>
			</div>
		</div>
	</div>

		<!--Header ends -->
<hr class="hr">
	<!--Navigation bar start -->

	<div class="nav">
		<div class = "left">
			<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<i class="fas fa-bars"></i>
			</label>
			<ul>
				<li class="left"><a href="#">Home</a></li>
				<li class="left"><a href="#">Products</a></li>
				<li class="left"><a href="Downloads.php">Downloads</a></li>
				<li class="left"><a href="#">Contact Us</a></li>
				<li class="left"><a href="aboutus.html">About Us</a></li>
				<!--<li class="left"><a href="#">Wishlist</a></li>
				<li class="left"><a href="#">Cart</a></li>-->
				<li class="right">
			<!--<a href="Sign in.php"> <img src="#5" alt="Sign in btn" class="right">Register</a>
				</li>
				<li class="right"><a href="Login.php">Login</a></li> -->
				<!--<li class="right"><a href="#">AddAdmins</a></li> -->				
				<li class="right"><a href="Logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
	<!--Navigation bar end -->
	<br><br>
<!--main wrapper stras from here-->
	<div class="main_wrapper">
	<!--header starts here	
		<div class="header_wrapper">
		
			<a href="index.php"><img id="logo" src="" alt="image" /></a>
			<img id="banner" src="" alt="image" />
		</div>
		header ends here-->

		<h1><a href="all_products.php"><center>All products</center></a></h1>

		<!--navigation bar starts

		<div class="menubar">
			<ul id="menu">
				<li> <a href="index.php">HOme </a></li>
				<li> <a href="all_products.php">All products</a></li>
				<li> <a href="customer/my_account.php">My account </a></li>
				<li> <a href="">Sign up </a></li>
				<li> <a href="cart.php">shopping Cart </a></li>
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

			<?php cart(); ?>

			<div id="shopping_cart">
				<span style="float: right; font-size: 18px; padding: 5px; line-height:40px; ">
				Welcome Guest! <b style="color: yellow">Shopping Cart - </b>Total Items: <?php total_items(); ?> Total price: <?php total_price(); ?><a href="cart.php" style="color:orange;">GO to Cart</a>
			</span>
				
			</div>



			
			<div id="product_box">
					

				<form action="" method="post" enctype="multipart/form-data">
					
					<table align="center" width="700" bgcolor="#fff">                                <!--*****-->
						

						<tr align="center">
							<th >Remove</th>
							<th>product</th>
							<th>Quantity</th>
							<th>Total Price</th>	
						</tr>

		<?php 

$total = 0;

global $con;

$ip = getIp();

$sel_price = "select * from cart Where ip_add='$ip'";

$run_price = mysqli_query($con, $sel_price);

while ($p_price = mysqli_fetch_array($run_price)) {
	
	$pro_id = $p_price['p_id'];

	$pro_price="select * from  products Where product_id='$pro_id' ";

	$run_pro_price = mysqli_query($con, $pro_price);

	while ($pp_price = mysqli_fetch_array($run_pro_price)) {
		
		$product_price =   array($pp_price['product_price']);

		$product_title = $pp_price['product_title'];

		$product_image = $pp_price['product_image'];

		$single_price = $pp_price['product_price'];

		$values = array_sum($product_price);

		$total += $values; 

?>

				<tr align="center">
					
					<td><input type="checkbox" name="remove[]"  value=" <?php echo $pro_id; ?>"></td>
					<td headers="col2"><img src="product_images/<?php echo $product_image; ?>" width="60px" height="60"> <?php echo $product_title; ?> <br>
						
					</td>
					<td><input type="number" value="1"  name="qty"></td>                                                <!--*****-->
					<td><?php echo "$".$single_price; ?></td>

				</tr>


<?php } } ?>
			

				</table>
				

		
																														<!--*****-->
				<table class="SUB_table"  align="center" width="700" bgcolor="#fff" > 
			<thead>
				<tr align="">
					<td width="550"></td>
					<td headers="col1" colspan="" width="80" align="right" ><b>Sub Total</b></td>
					<td headers="col1" width="300" align="center"><?php  echo"$" .$total;  ?></td>

				</tr>
			</thead>
			<tbody>

				<tr align="center" bgcolor="#fff" >

					<td colspan=""><input type="submit" name="update_cart" value="update Cart"></td>
					<td ><input type="submit" name="continue" value="Continue Shopping"></td>
					<!--<td><a href="checkout.php" style="text-decoration: none; color:white;"><button name="checkout">Checkout</a></button></td>-->
					<td ><form action="checkout.php" method="GET">
						<input type="text" name="totalsend" value="<?php total_price() ?>" hidden>
						<!--<input type="submit" name="checkout" value="Checkout" >-->
					</form>
					<form action="checkout.php" method="GET">
						<input type="text" name="totalsend" value="<?php total_price() ?>" hidden>
						<input type="submit" name="checkout" value="Checkout" >
					</form>
					</td>
					


				</tr>
			</tbody>
					</table>
		

				</form>

<?php 

$ip = getIP();

if(isset($_POST['update_cart'])){

foreach($_POST['remove'] as $remove_id) {
	
$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip' ";

$run_delete = mysqli_query($con, $delete_product);

if($run_delete){

	echo "<script>window.open('cart.php','_self')</script>";
}

}



}

if (isset($_POST['continue'])) {
	

	echo "<script>window.open('index.php','_self')</script>";
}


//if (isset($_POST['checkout'])) {

	//echo "<script>window.open('checkout.php','_self')</script>";

//}

 ?>







			</div>
		</div>

	</div>
	<!--content wrapper end-->

	<!--footer starts-->

		<div id="footer">
			<h2 style="text-align: center; padding-top: 0px;"> </h2>
		</div>

		<!--footer starts-->


	</div>
<!--main wrapper stras from here-->
<!--Footer starts -->
		<div class="footer">
			<div class="fleft">
				<h3>Service</h3>
				<p>qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq<br>qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq<br>
				qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq<br>qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq<br>
				qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq<br>qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
				<img src="#9" alt="Facebook icon">
				<img src="#10" alt="Twitter icon">
				<img src="#11" alt="Instergram icon">
			</div>
			<div class="fmiddle">
				<div class="fmiddleleft">
					<h3 class="hleft">Category</h3>
					<ul class="listleft">
						<li>Product</li>
						<li>About us</li>
						<li>Price table</li>
						<li>Crew</li>
						<li>Portfolio</li>
					</ul>
				</div>
				<div class="fmiddleright">
					<h3 class="hright">Partners</h3>
					<ul class="listright">
						<li>Partner 01</li>
						<li>Partner 02</li>
						<li>Partner 03</li>
						<li>Partner 04</li>
						<li>Partner 05</li>
					</ul>
				</div>
			</div>
			<div class="fright">
				<img src="#12" alt="Image related to music">
			</div>
		</div>
		<!--Footer ends -->
	</div>


<!-- javascript starts -->

<!--first two js files are downloaded from internet to get the animation functions because it cannot be done by us -->
<script type="text/javascript" src="Java/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="Java/jquery.cycle.js"></script>
<script type="text/javascript" src="Java/JS files/O.M.I.S.sliding.bannder.s.js"></script>

<!-- javascript ends -->
</body>
</html>