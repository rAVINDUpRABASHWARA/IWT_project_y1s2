<?php require_once("connection.php"); ?>
<?php

//showwing order_u table

 $query = "SELECT Order_id,M_username,Member_id,Product_id,Order_items,Total_price FROM order_u";

 $delivery_tbl = mysqli_query($con, $query);

 //if ($delivery_tbl){
     //checking how many records returned from the query
   // echo mysqli_num_rows($delivery_tbl) . "Records found. <hr>";

    $table = '<table>';
    $table .= '<tr><th>Order_id</th><th>M_username</th><th>Member_id</th><th>Product_id</th><th>Order_items</th><th>Total_price</th></tr>';
    while ($Reccord = mysqli_fetch_assoc($delivery_tbl)){
        $table .= '<tr>';
        $table .= '<td>' . $Reccord['Order_id'] . '</td>';
        $table .= '<td>' . $Reccord['M_username'] . '</td>';
        $table .= '<td>' . $Reccord['Member_id'] . '</td>';
        $table .= '<td>' . $Reccord['Product_id'] . '</td>';
        $table .= '<td>' . $Reccord['Order_items'] . '</td>';
        $table .= '<td>' . $Reccord['Total_price'] . '</td>';
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




<ul>
            <li><a href="DeliveryManager.php">Delivery Home Page</a></li>
            <li><a class="active" href="order_u.php">Order Details</a></li>
            <li><a href="Delivery.php">Delivery Details</a></li>
            <li><a href="payment.php">Payment Details</a></li>
            <li><a  href="updatedeliverydetails.php">Update Delivery Details</a></li>
        </ul>


<?php echo $table; ?>

</body>
</html>
<?php mysqli_close($con); ?>