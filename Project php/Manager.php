<?php

	session_start();

	include("connection.php");
	include("function.php");

	//Admin validation check
	$Admin_data = check_Adminlogin($con);


?>


<!DOCTYPE html>
<html>
<head>
	<title>Frandy Online Music Instrument Store</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"><!--This link got from www.fomtawesome web sitte to add icons -->
	<link rel="stylesheet" type="text/css" href="Css/O.M.I.S.css">
	<link rel="stylesheet" type="text/css" href="styles/style1.css" media="all">
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meata name = "viewport" contact = "width = device - width, intial - scale = 1">
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
				<li class="left"><a href="Manager.php">Home</a></li>
				<li class="left"><a href="all_products.php">Products</a></li>
				<li class="left"><a href="Downloads.php">Downloads</a></li>
				<li class="left"><a href="#">Contact Us</a></li>
				<li class="left"><a href="aboutus.php">About Us</a></li>
				<!--<li class="left"><a href="#">Wishlist</a></li>
				<li class="left"><a href="#">Cart</a></li>-->
				<li class="right">
			<!--<a href="Sign in.php"> <img src="#5" alt="Sign in btn" class="right">Register</a>
				</li>
				<li class="right"><a href="Login.php">Login</a></li> -->
				<li class="right"><a href="Logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
	<!--Navigation bar end 
<!DOCTYPE html>
<html>
<head>
	<title>TIs is admin panel</title>

	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all">

</head>


<body>
-->

<div class="main_wrapper">
	
	
	<div id="header"><div class="s-move" align="center">
  <div class="slide">
    
    <p class="name">
      Welcome to Frandy Music
    </p>
  </div>
  <div class="slide">
    
    <p class="name">
		Welcome to Frandy Music.
    </p>
  </div>
  <div class="slide">
    
    <p class="name">
      Welcome to Frandy Music
    </p>
  </div>
  <div class="slide">
    
    <p class="name">
      Welcome to Frandy Music
    </p>
  </div>
  <div class="slide">
    
    <p class="name">
      Welcome to Frandy Music
    </p>
  </div>
</div></div>



	


		<div id="right">
			<h3 style="text-align: center; color: #fff">Manage Content :</h3>

			<a href="Manager.php?insert_product">Insert New Product</a>
			<a href="Manager.php?view_products">View All Product</a>
			<a href="Manager.php?insert_cat">Insert New Category</a>
			<a href="Manager.php?view_cats">View All Categories</a>
			<a href="Manager.php?insert_brand">Insert New Brand</a>
			<a href="Manager.php?view_brands">view All Brands</a>
		<!--	<a href="index.php?View_customers">view Customer</a>
			<a href="index.php?view_orders">view Orders</a>
			<a href="index.php?view_payments">view Payments</a>
			<a href="logout.php">Admin Logout"</a> -->


		</div>






		<div id="left" >

			<?php 

			if (isset($_GET['insert_product'])) {
				include("insert_product.php");

			}




			if (isset($_GET['view_products'])) {
				include("view_products.php");
				
			}




			if (isset($_GET['edit_pro'])) {
				include("edit_pro.php");
				
			}




			if (isset($_GET['insert_cat'])) {
				include("insert_cat.php");
				
			}



			if (isset($_GET['view_cats'])) {
			include("view_cats.php");
				
			}


			if (isset($_GET['edit_cat'])) {
				include("edit_cat.php");
				
			}


			if (isset($_GET['insert_brand'])) {
				include("insert_brand.php");
				
			}
	



			if (isset($_GET['view_brands'])) {
			include("view_brands.php");
				
			}

			

			if (isset($_GET['edit_brand'])) {
				include("edit_brand.php");
				
			}

			 ?>

		</div>



	


</div>


<!--Discount/Bonus Ads start -->
	<div class="Discount">
		<img class="discount" src="Images/Sliding Banners/banner 05.jpg" alt="Discount/Bonus Ads">
		<img class="discount" src="Images/Sliding Banners/banner 06.jpg" alt="Discount/Bonus Ads">
	</div>
	<!--Discount/Bonus Ads ends -->

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



<!-- javascript starts -->

<!--first two js files are downloaded from https://jquery.com to get the animation functions because it cannot be done by us -->
<script type="text/javascript" src="Java/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="Java/jquery.cycle.js"></script>
<script type="text/javascript" src="Java/JS files/O.M.I.S.sliding.bannder.s.js"></script>

<!-- javascript ends -->


</body>
</html>