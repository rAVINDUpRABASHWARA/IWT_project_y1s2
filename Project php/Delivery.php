<?php require_once("connection.php"); ?>
<?php


//showwing delivery table

$query = "SELECT Order_id, M_username, Address_line1,Address_line2,Address_line3,Address_line4,Delivery_status FROM delivery";

 $delivery_tbl = mysqli_query($con, $query);

 //if ($delivery_tbl){
     //checking how many records returned from the query
   // echo mysqli_num_rows($delivery_tbl) . "Records found. <hr>";
    
    $table = '<table>';
    $table .= '<tr><th>Order_id</th><th>M_username</th><th>Address_line1</th><th>Address_line2</th><th>Address_line3</th><th>Address_line4</th><th>Delivery_status</th></tr>';
    while ($Reccord = mysqli_fetch_assoc($delivery_tbl)){
        $table .= '<tr>';
        $table .= '<td>' . $Reccord['Order_id'] . '</td>';
        $table .= '<td>' . $Reccord['M_username'] . '</td>';
        $table .= '<td>' . $Reccord['Address_line1'] . '</td>';
        $table .= '<td>' . $Reccord['Address_line2'] . '</td>';
        $table .= '<td>' . $Reccord['Address_line3'] . '</td>';
        $table .= '<td>' . $Reccord['Address_line4'] . '</td>';
        $table .= '<td>' . $Reccord['Delivery_status'] . '</td>';
        $table .= '</tr>';
    }

    $table .='</table>';

 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href = "Css/driverstyle.css">
    <link rel="stylesheet" href="Css/navstyle.css">
    <title>Document</title>
    <style>
    body{
        background-color : whitesmoke;
        background-image : url(Images/supback.jpg);
        background-size: cover;
        background-position: center;

    }

    </style>
   
</head>
<body>
    
<ul class = "clearfix">
			<li><a href="DeliveryManager.php">Delivery Home Page</a></li>
            <li><a href="order_u.php">Order Details</a></li>
            <li><a class="active" href="Delivery.php">Delivery Details</a></li>
            <li><a href="payment.php">Payment Details</a></li>
            <li><a  href="updatedeliverydetails.php">Update Delivery Details</a></li>
        </ul>
    

<?php echo $table; ?>
</body>
</html>
<?php mysqli_close($con); ?>