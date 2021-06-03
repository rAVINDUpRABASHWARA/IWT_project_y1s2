<?php require_once('INC/connection.php'); ?>
<?php

//showwing order_u table

 $query = "SELECT Order_id,M_username,Member_id,Product_id,Order_items,Total_price FROM order_u";

 $delivery_tbl = mysqli_query($connection, $query);

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
    <link rel="stylesheet" href = "Css/styles1.css">
    <link rel="stylesheet" href="Css/verticalNavBar.css">
    
    
    <title>Order Details</title>
   
</head>
<body>
    
    <div class="inc ">      
                  <ul>
                        <li><a  href="Driver.php">Driver Home Page</a></li>
                        <li><a class= "active" href="Order_details.php">Order Details</a></li>
                        <li><a  href="Delivery_details.php">Delivery Report</a></li>
                        <li><a  href="Driver_details.php">Delivery Staff</a></li>
                        <li><a  href="driverUDE.php">Update Delivery Staff</a></li>
                    </ul>
                
    </div>        
            




<?php echo $table; ?>

</body>
</html>
<?php mysqli_close($connection); ?>