<?php require_once("connection.php"); ?>
<?php


//showwing delivery table

 //showwing payment table

 $query = "SELECT Payment_id, Payment_amount, Payment_type, Payment_date FROM payment";

 $delivery_tbl = mysqli_query($con, $query);

 //if ($delivery_tbl){
     //checking how many records returned from the query
    //echo mysqli_num_rows($delivery_tbl) . "Records found. <hr>";
    
    $table = '<table>';
    $table .= '<tr><th>Payment_id</th><th>Payment_amount</th><th>Payment_type</th><th>Payment_date</th></tr>';
    while ($Reccord = mysqli_fetch_assoc($delivery_tbl)){
        $table .= '<tr>';
        $table .= '<td>' . $Reccord['Payment_id'] . '</td>';
        $table .= '<td>' . $Reccord['Payment_amount'] . '</td>';
        $table .= '<td>' . $Reccord['Payment_type'] . '</td>';
        $table .= '<td>' . $Reccord['Payment_date'] . '</td>';
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
<!--<div class="inc">-->
    

<ul>
            <li><a href="DeliveryManager.php">Delivery Home Page</a></li>
            <li><a href="order_u.php">Order Details</a></li>
            <li><a  href="Delivery.php">Delivery Details</a></li>
            <li><a class="active" href="payment.php">Payment Details</a></li>
            <li><a href="updatedeliverydetails.php">Update Delivery Details</a></li>
        </ul>
   
<!--</div>-->
<?php echo $table; ?>
</body>
</html>
<?php mysqli_close($con); ?>