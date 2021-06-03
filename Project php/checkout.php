<?php
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		//somthing was posted
		$userid = $_POST['userid'];
		$username = $_POST['username'];
		$pAmount = $_POST['amount'];
		$bank_name = $_POST['bname'];
		$Payment_type = $_POST['Payment_type'];
		$bankCard = $_POST['bCnO'];

		if(!empty($bank_name) && !empty($Payment_type) && !empty($bankCard))
		{

			//save to database
			$query = "insert into payment (user_id,user_name,Payment_amount,Payment_type,Bank,BankCardNo) value ('$userid','$username','$pAmount','$Payment_type','$bank_name','$bankCard')";
			echo"aaaaaaaaaaa";
			mysqli_query($con,$query);

			header("Location: all_products.php");
			$delete = "delete from cart";
			mysqli_query($con, $delete);
			die;
		}else
		{
			echo "Please enter valid information !";
		}
		echo "string";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Frandy Online Music Instrument Store</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"><!--This link got from www.fomtawesome web sitte to add icons -->
	<link rel="stylesheet" type="text/css" href="Css/Sign in.css">
	<link rel="stylesheet" type="text/css" href="Css/Sign in form.css">
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
			<!--<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<i class="fas fa-bars"></i>
			</label>-->
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

	<!--Sign in form start -->

	<div class="signin">
		<form method="POST">
			<fieldset class="form">
				<legend><h3>Payment Detials :</h3></legend>
				<input type="text" id="userid" class="input" name="userid" hidden value="<?php echo $user_data['user_id']; ?>"><br><br>
				<label for="fname" class="lable">User Name :</label>
				<input type="text" id="username" class="input" name="username" readonly value="<?php echo $user_data['user_name']; ?>"><br><br>
				<label for="fname" class="lable">Bank Name :</label>
				<input type="text" id="bname" class="input" name="bname"><br><br>
				<label for="fname" class="lable">Payment Amount :</label>
				<input type="text" id="amount" class="input" name="amount" readonly value="<?php echo $_GET['totalsend']; ?>"><br><br>
				<label class="lable">Payment Type :</label><br>
						<input type="radio" name="Payment_type" id="Payment_type" value="PayPal">PayPal
						<input type="radio" name="Payment_type" id="Payment_type"value="Visa">Visa<br><br>
				<label class="lable">Bank Card Number :</label>
				<input type="text" id="bCnO" class="input" name="bCnO"><br><br>
				<!--Submit & Clear Btns-->
				<input type="submit" id="submit" class="submit" value="Confirm Order">
				<br>
				<input type="reset" id="clear" class="clear" value="Clear">
				<!--Hyperlink point to the #-->
			</fieldset>
		</form>
	</div>

	<!--Sign in form ends -->

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



<!-- javascript starts -->

<!--first two js files are downloaded from internet to get the animation functions because it cannot be done by us -->
<script type="text/javascript" src="Java/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="Java/jquery.cycle.js"></script>
<script type="text/javascript" src="Java/JS files/O.M.I.S.sliding.bannder.s.js"></script>

<!-- javascript ends -->

</body>
</html>