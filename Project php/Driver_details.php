<?php require_once('INC/connection.php'); ?>
<?php

 //showwing driver_details table

 $query = "SELECT Driver_id, Driver_name, Delivery_id, Driver_phone_num FROM driverdetails";

 $driver_tbl = mysqli_query($connection, $query);

 //if ($delivery_tbl){
     //checking how many records returned from the query
   // echo mysqli_num_rows($delivery_tbl) . "Records found. <hr>";

    $table = '<table>';
    $table .= '<tr><th>Driver_id</th><th>Driver_name</th><th>Delivery_id</th><th>Driver_phone_num</th></tr>';
    while ($Reccord = mysqli_fetch_assoc($driver_tbl)){

        $table .= '<tr>';
        $table .= '<td>' . $Reccord['Driver_id'] . '</td>';
        $table .= '<td>' . $Reccord['Driver_name'] . '</td>';
        $table .= '<td>' . $Reccord['Delivery_id'] . '</td>';
        $table .= '<td>' . $Reccord['Driver_phone_num'] . '</td>';
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
    <title>Delivery Staff</title>
   
</head>
<body>
<div class="inc ">
                    <ul>
                        <li><a  href="Driver.php">Driver Home Page</a></li>
                        <li><a href="Order_details.php">Order Details</a></li>
                        <li><a href="Delivery_details.php">Delivery Report</a></li>
                        <li><a class= "active" href="Driver_details.php">Delivery Staff</a></li>
                        <li><a href="driverUDE.php">Update Delivery Staff</a></li>
                    </ul>
                
</div>

<?php echo $table; ?>

</body>
</html>
<?php mysqli_close($connection); ?>