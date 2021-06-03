<?php
session_start();

    include("connection.php");
    include("function.php");


    //Admin validation check 
    $Admin_data = check_Adminlogin($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/welcome.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"><!--This link got from www.fomtawesome web sitte to add icons -->
    <link rel="stylesheet" type="text/css" href="Css/O.M.I.S1.css"> 
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="Java/jquery-3.6.0.min.js"></script>
    <!--?-->
    <title>Driver</title>
    <!--?-->
</head>

<body>
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
    <!--Navigation bar start 

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
                <li class="left"><a href="#">Wishlist</a></li>
                <li class="left"><a href="#">Cart</a></li>
                <li class="right">
            <a href="Sign in.php"> <img src="#5" alt="Sign in btn" class="right">Register</a>
                </li>
                <li class="right"><a href="Login.php">Login</a></li> -->
                <!--<li class="right"><a href="#">AddAdmins</a></li>                
                <li class="right"><a href="Logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    Navigation bar end -->
    <br><br>

    <header></header>
    <section style="background-image: url(Images/supback.jpg);">

        <!--for background Image-->

        <ul class="right">
            <li><a href="Logout.php">Logout</a></li>
        </ul>
        <ul class="left">
            <li><a class="active" href="order_u.php">Order Details</a></li>
            <li><a class="active" href="Delivery.php">Delivery Details</a></li>
            <li><a class="active" href="payment.php">Payment Details</a></li>
            <li><a class="active" href="updatedeliverydetails.php">Update Delivery Details</a></li>
        </ul>



        <center>
            <h1 class="welcome">WELCOME <br> TO <br> FRANDY <br> MUSIC INSTRUMENT STORE <br><br>DELIVERY MANAGER'S PAGE</h1>
        </center>


    </section>

    <footer></footer>

</body>

</html>