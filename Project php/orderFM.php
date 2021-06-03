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
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="Css/welcome.css"> 
	<title>Financial Officer</title>
	<h1>Order Details</h1>


<style>

    body{
	padding: 0;
	margin:0;
	font-family:verdana geneva tahoma sans-serif;
}

table{
	position: absolute;
	left:50%;
	top:50%;
	transform: translate(-50%, -50%);
	border-collapse: collapse;
	width:800px;
	height:200px;
	border: 1px solid #bdc3c7;
	box-shadow: 2px 2px 12px;
}


tr{
	transition: all .2s ease-in;
	cursor:pointer;
}

th,td{
	padding:12px;
	text-align:left;
	border-bottom:#ddd;
}
#header{
	background-color:#16a085; 
	color:#fff;
}
h1{
	font-weight:600px;
	text-align:center;
	background-color:#16a085; 
	color:#fff;
	padding:10px 0px;

}

tr:hover{
	background-color:#f5f5f5;
	transform:scale(1.02);
	box-shadow: 2px 2px 12px;
}
</style>
</head>
<body>

	<section>
        <ul class="left">
            <li><a class="active" href="FinancialOfficer.php">Order Details</a></li>
        </ul>
    </section>

	<?php
		$query = "select * from customerorders";
		$result = mysqli_query($con, $query);
	?>
	<table>
		<tr id="header">
			<th>Order ID</th>
			<th>Customer user name</th>
			<th>Order item</th>
			<th>Total Price</th>
		</tr>
		<?php

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)): ?>
		<tr>
			<td><?php echo $row['Order_id']; ?></td>
			<td><?php echo $row['user_name']; ?></td>
			<td><?php echo $row['Order_item']; ?></td>
			<td><?php echo $row['Total']; ?></td>
		</tr>
		<?php 
			endwhile;
		}
		?>
	</table>
		
</body>
</html>