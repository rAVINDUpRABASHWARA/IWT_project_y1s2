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
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"><!--This link got from www.fomtawesome web sitte to add icons -->
	<link rel="stylesheet" type="text/css" href="Css/O.M.I.S1.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css" media="all"/>
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
				<li class="left"><a href="Home.php">Home</a></li>
				<li class="left"><a href="all_products.php">Products</a></li>
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

		<h1><a href="all_products.php"><center>All products</center></a></h1>
	<!--header starts here
		<div class="header_wrapper">
		
			<a href="index.php"><img id="logo" src="" alt="image" /></a>
			<img id="banner" src="" alt="image" />
		</div>
		header ends here-->

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
					
					<?php

					getPro();

					?>


					<?php getCatPro();  ?>

					<?php getBrandPro(); ?>


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
				<p>The Frandy Music Centre began its illu
				-strious journey way back in 2000. when
				our leader introduced Frandy guitar to 
				the island. This makes us the oldest 
				distributor in the world for Frandy, 
				outside Sri lanka. This amplified the
				 scope of the business by offering a 
				much wider range of products. This 
				included everything from musical instruments
				 to home audio, accessories, expertise and much
				 more.<br>
				<a href="www.facebook.com"><img style="width: 7%;" src="Images/icon/facebook.png" alt="Facebook icon"></a>
				<a href="www.twitter.com"><img style="width: 7%;" src="Images/icon/twitter.png" alt="Twitter icon"></a>
				<a href="www.instergram.com"><img style="width: 7%;" src="Images/icon/instergram.png" alt="Instergram icon"></a>
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
						<li>S.A.D.R.P. Jayathilaka</li>
						<li>N.M. Dharmapriya</li>
						<li>P.N. Gulawita</li>
						<li>A.H.L. Fernando</li>
						<li>B.A.R.P.R. Batawala</li>
					</ul>
				</div>
			</div>
			<div class="fright">
				<img style="width: 15%;" src="Images/img.jpg" alt="Image related to music">
			</div>
		</div>
		<!--Footer ends -->
	</div>


<!-- javascript starts -->

<!--first two js files are downloaded from https://jquery.com to get the animation functions because it cannot be done by us -->
<script type="text/javascript" src="Java/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="Java/jquery.cycle.js"></script>
<script type="text/javascript" src="Java/JS files/O.M.I.S.sliding.bannder.s.js"></script>

<!-- javascript ends -->
</body>
</html>