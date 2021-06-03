<?php require_once("connection.php"); ?>

<?php 

if(isset($_POST['update']))
{
//$delivery_tbl = mysqli_query($connection, $query);
$connection = mysqli_connect('localhost','root','','login_sample_db');
$delivery_tbl = mysqli_select_db($connection,'login_sample_db');

$Order_id = $_POST['Order_id'];
$M_username = $_POST['M_username'];
$Address_line1 = $_POST['Address_line1'];
$Address_line2 = $_POST['Address_line2'];
$Address_line3 = $_POST['Address_line3'];
$Address_line4 = $_POST['Address_line4'];
$Delivery_status = $_POST['Delivery_status'];



//if(isset($_POST['update']))
//{
    //$Order_id = $_POST['Order_id'];

    $query = "INSERT INTO `delivery`(`Order_id`, `M_username`, `Address_line1`, `Address_line2`, `Address_line3`, `Address_line4`, `Delivery_status`) VALUES ('$_POST[Order_id]',' $_POST[M_username]',' $_POST[Address_line1]','$_POST[Address_line2]',' $_POST[Address_line2]','$_POST[Address_line3]',' $_POST[Delivery_status]')";

    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        echo '<script type = "text/javascript"> alert("data updated") </script>';
    }

    else 
    {
        echo '<script type = "text/javascript"> alert("data not updated") </script>';
    }
}


if(isset($_POST['edit']))
{
    $Order_id = $_POST['Order_id'];

    $query = "UPDATE `delivery` SET M_username='$_POST[M_username]',Address_line1='$_POST[Address_line1]',Address_line2='$_POST[Address_line2]',Address_line3='$_POST[Address_line3]',Address_line4='$_POST[Address_line4]',Delivery_status='$_POST[Delivery_status]' WHERE Order_id = '$_POST[Order_id]'";

    $query_run = mysqli_query($con, $query);

    
    if($query_run)
    {
        echo '<script type = "text/javascript"> alert("data updated") </script>';
    }

    else 
    {
        echo '<script type = "text/javascript"> alert("data not updated") </script>';
    }
}



if(isset($_POST['delete']))
{
    $Order_id = $_POST['Order_id'];

    $query ="DELETE FROM `delivery` WHERE Order_id = '$_POST[Order_id]'";

    $query_run = mysqli_query($con, $query);

    
    if($query_run)
    {
        echo '<script type = "text/javascript"> alert("data updated") </script>';
    }

    else 
    {
        echo '<script type = "text/javascript"> alert("data not updated") </script>';
    }
}

?>

<html>
<head>
<title>
Update
</title>
<link rel="stylesheet" href="Css/navstyle.css">
<style>
body{
    background-color : whitesmoke;
    background-image : url(Images/supback.jpg);
    background-size: cover;
    background-position: center;

}
input{


    width: 400;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px;
    margin:10px 0px 15px 0px;
    box-shadow: 1px 1px 2px 1px grey;

}

.submit{
    width: 120px;
    height: 5%;
    border: 2px solid black;
    border-radius: 05px;
    padding: 8px 15px 8px 15px;
    margin:10px 7px 15px 7px;
    box-shadow: 1px 1px 2px 1px grey;
    background-color:grey;

}

div.form{
    margin-top:50px;
    width:500px;
    float:left;
    margin-left:200px;

}






</style>
</head>

<body>
    



<div class="inc ">



<ul>
            <li><a href="DeliveryManager.php">Delivery Home Page</a></li>
            <li><a href="order_u.php">Order Details</a></li>
            <li><a href="Delivery.php">Delivery Details</a></li>
            <li><a href="payment.php">Payment Details</a></li>
            <li><a  class="active" href="updatedeliverydetails.php">Update Delivery Details</a></li>
        </ul>
</div>
<div class = "form">
<center><h1>Update delivery details</h1>

<form action="" method = "POST">

<input type="text" name = "Order_id" placeholder = "Enter order id"/></br>
<input type="text" name = "M_username" placeholder = "Enter user name"/></br>
<input type="text" name = "Address_line1" placeholder = "Enter address line 1"/></br>
<input type="text" name = "Address_line2" placeholder = "Enter address line 2"/></br>
<input type="text" name = "Address_line3" placeholder = "Enter address line 3"/></br>
<input type="text" name = "Address_line4" placeholder = "Enter address line 4"/></br>
<input type="text" name = "Delivery_status" placeholder = "Enter delivery status"/></br>


<input class="submit" type = "submit" name = "update" value = "UPDATE DATA"/>
<input  class="submit"  type = "submit" name = "edit" value = "EDIT DATA"/>
<input class="submit"  type = "submit" name = "delete" value = "DELETE DATA"/>


</form>


</center>
</div>


</body>

</html>
<?php mysqli_close($con); ?>