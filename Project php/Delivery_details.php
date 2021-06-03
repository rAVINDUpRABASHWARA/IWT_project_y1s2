<?php require_once('INC/connection.php'); ?>
<?php


//showwing delivery table

$query = "SELECT Order_id, M_username, Address_line1,Address_line2,Address_line3,Address_line4,Delivery_status FROM delivery";

 $delivery_tbl = mysqli_query($connection, $query);

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
    <link rel="stylesheet" href = "CSS/styles1.css">
    <link rel="stylesheet" href="CSS/verticalNavBar.css">
    <title>Delivery Report</title>
   
</head>
<body>
<div class="inc ">
                    <ul class="clearfix">
                        <li><a  href="Driver.php">Driver Home Page</a></li>
                        <li><a  href="Order_details.php">Order Details</a></li>
                        <li><a class= "active" href="Delivery_details.php">Delivery Report</a></li>
                        <li><a href="Driver_details.php">Delivery Staff</a></li>
                        <li><a href="driverUDE.php">Update Delivery Staff</a></li>
                    </ul>
</div>               
    <?php echo $table; ?>

</body>
</html>
<?php mysqli_close($connection); ?>