<?php require_once('INC/connection.php'); ?>

<?php 

if(isset($_POST['update']))
{
//$delivery_tbl = mysqli_query($connection, $query);
$connection = mysqli_connect('localhost','root','','login_sample_db');
$delivery_tbl = mysqli_select_db($connection,'login_sample_db');

$Driver_id = $_POST['Driver_id'];
$Driver_name = $_POST['Driver_name'];
$Delivery_id = $_POST['Delivery_id'];
$Driver_phone_num = $_POST['Driver_phone_num'];


//if(isset($_POST['update']))
//{
    //$Order_id = $_POST['Order_id'];

    //$query = "INSERT INTO `delivery`(`Order_id`, `M_username`, `Address_line1`, `Address_line2`, `Address_line3`, `Address_line4`, `Delivery_status`) VALUES ('$_POST[Order_id]',' $_POST[M_username]',' $_POST[Address_line1]','$_POST[Address_line2]',' $_POST[Address_line2]','$_POST[Address_line3]',' $_POST[Delivery_status]')";

    $query ="INSERT INTO `driver_details`(`Driver_id`, `Driver_name`, `Delivery_id`, `Driver_phone_num`) VALUES ('$_POST[Driver_id]','$_POST[Driver_name]','$_POST[Delivery_id]',' $_POST[Driver_phone_num]')";
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
    $Driver_id = $_POST['Driver_id'];

    //$query = "UPDATE `delivery` SET M_username='$_POST[M_username]',Address_line1='$_POST[Address_line1]',Address_line2='$_POST[Address_line2]',Address_line3='$_POST[Address_line3]',Address_line4='$_POST[Address_line4]',Delivery_status='$_POST[Delivery_status]' WHERE Order_id = '$_POST[Order_id]'";

    $query ="UPDATE `driver_details` SET Driver_name ='$_POST[Driver_name]',Delivery_id='$_POST[Delivery_id]', Driver_phone_num =' $_POST[Driver_phone_num]' WHERE Driver_id = '$_POST[Driver_id]'";

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



if(isset($_POST['delete']))
{
    $Driver_id = $_POST['Driver_id'];

    //$query ="DELETE FROM `delivery` WHERE Order_id = '$_POST[Order_id]'";
    
    $query ="DELETE FROM `driver_details` WHERE Driver_id = '$_POST[Driver_id]'";
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

?>

<html>
<head>
<title>
Update
</title>
<link rel="stylesheet" href="Css/verticalNavBar.css">
<style>
body{
    background-color : whitesmoke;
    background-image : url(IMG/Deli_back1.jpeg);
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
    margin-top:85px;
    width: 500px;
    float: left;
    margin-left:200px;
}




</style>
</head>

<body>
    



<div class="inc ">      
                  <ul>
                        <li><a  href="Driver.php">Driver Home Page</a></li>
                        <li><a  href="Order_details.php">Order Details</a></li>
                        <li><a  href="Delivery_details.php">Delivery Report</a></li>
                        <li><a  href="Driver_details.php">Delivery Staff</a></li>
                        <li><a class= "active" href="driverUDE.php">Update Delivery Staff</a></li>
                    </ul>
                
    </div>        

<div class="form">
    <center>
<h1>Update delivery Staff</h1>

<form action="" method = "POST">


<input type="number" name="Driver_id" placeholder="Driver ID"/><br>
<input type="text" name="Driver_name" placeholder="Driver Name" /><br>
<input type="number" name="Delivery_id" placeholder="Delivery ID" /><br>
<input type="number" name="Driver_phone_num" placeholder="Driver Phone number"/><br>



<input class="submit" type = "submit" name = "update" value = "UPDATE DATA"/>
<input  class="submit"  type = "submit" name = "edit" value = "EDIT DATA"/>
<input class="submit"  type = "submit" name = "delete" value = "DELETE DATA"/>


</form>
</div>

</center>


</body>

</html>
<?php mysqli_close($connection); ?>