<?php

	session_start();

	include("connection.php");
	include("function.php");

	//User validation check
	$user_data = check_login($con);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Frandy Online Music Instrument Store</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"><!--This link got from www.fomtawesome web sitte to add icons -->
	<link rel="stylesheet" type="text/css" href="Css/Downloads.css">
	<link rel="stylesheet" type="text/css" href="Css/Downloads_content_table.css">
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
			<ul>
				<li class="left"><a href="O.M.I.S.php">Home</a></li>
				<li class="left"><a href="all_products.php">Products</a></li>
				<li class="left"><a href="Downloads.php">Downloads</a></li>
				<li class="left"><a href="#">Contact Us</a></li>
				<li class="left"><a href="aboutus.php">About Us</a></li>
				<li class="right">
			<a href="Sign in.php"><!--<img src="#5" alt="Sign in btn" class="right">-->Register</a>
				</li>
				<li class="right"><a href="Login.php">Login</a></li>
			</ul>
		</div>
	</div>

	<!--Navigation bar end -->

	<br><br>

	<!--Body content starts -->

	<!-- Buttons -->



	<!--Songs-->
	<div class="songs">
		<h1 class="heading">Download Songs</h1>
		<table class="content-table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th colspan="2">Index</th>
					<th>Song</th>
					<th>Artist</th>		
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td><a href="Aye Enna Pana Mage.php"><img src="Images/Downloads/Songs/Sarigama.lk.jpg" style="width:130px; height: 86px"></a></td>
					<td>Aye Enna Pana Mage</td>
					<td>Chamika Sirimanna</td>
				</tr>
				<tr>
					<td>2</td>
					<td><a href="Baaton Ko Teri.php"><img src="Images/Downloads/Songs/gaana.jpg" style="width:130px; height: 86px"></a></td>
					<td>Baaton Ko Teri</td>
					<td>Arijit Singh</td>
				</tr>
				<tr><td>3</td>
					<td><a href="Back in Black.php"><img src="Images/Downloads/Songs/acdc-back-in-black.jpg" style="width:130px; height: 86px"></a></td>
					<td>Back in Black</td>
					<td>AC/DC</td>
				</tr>
			</tbody>
		</table>
	</div>

	<br><br>

	<!--Books-->
	<div class="Books">
		<h1 class="heading">Download Books</h1>
		<table class="content-table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th colspan="2">Index</th>
					<th>Name</th>
					<th>Author</th>		
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td><a href="Classical-Guitar-Method-Vol1-2020.php"><img src="Images/Downloads/Books/PDF.png" style="width:53px; height: 60px"></a></td>
					<td>Classical-Guitar-Method-Vol1-2020</td>
					<td>Bradford Werner</td>
				</tr>
				<tr>
					<td>2</td>
					<td><a href="guitar book-sinhalaebooks.com.php"><img src="Images/Downloads/Books/PDF.png" style="width:53px; height: 60px"></a></td>
					<td>Guitar book-sinhalaebooks.com</td>
					<td>Jude Lakshman Silva</td>
				</tr>
				<tr>
					<td>3</td>
					<td><a href="Learn-and-Master-Guitar-Lesson-Book.php"><img src="Images/Downloads/Books/PDF.png" style="width:53px; height: 60px"></a></td>
					<td>Learn-and-Master-Guitar-Lesson-Book</td>
					<td>Steve Krenz</td>
				</tr>
				<tr>
					<td>3</td>
					<td><a href="Sinhala Guitar Chords.php"><img src="Images/Downloads/Books/PDF.png" style="width:53px; height: 60px"></a></td>
					<td>Sinhala Guitar Chords</td>
					<td>Leebra Office</td>
				</tr>
				<tr>
					<td>3</td>
					<td><a href="Test.php"><img src="Images/Downloads/Books/PDF.png" style="width:53px; height: 60px"></a></td>
					<td>Test Book</td>
					<td>Test Author</td>
				</tr>
			</tbody>
		</table>
		
	</div>

	<!--Body content ends -->

	<br><br>

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

<script type="text/javascript">
	
</script>

<!-- javascript ends -->

</body>
</html>