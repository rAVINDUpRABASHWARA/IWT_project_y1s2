

<?php

include("includes/db.php");

if(isset($_GET['delete_pro'])){
	
$delete_id = $_GET['delete_pro'];

$delete_pro = "delete from products where product_id='$delete_id' ";

$run_delete = mysqli_query($con, $delete_pro);

if($run_delete){

	echo "<script>alert('Product Has Been Deleted')	</script>";
	echo "<script> window.open('Manager.php?view_products','_self')	</script>";

}

}


?>