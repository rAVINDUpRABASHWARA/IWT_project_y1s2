<table width="795" align="center" bgcolor="#fff" height="700">
	
<tr align="center">
	<td colspan="6"><h2>View All Brand Here</h2></td>
</tr>

<tr align="center" bgcolor="#F4864B">
	<th>Brand ID</th>
	<th>Brand Title</th>

	<th>Edit</th>
	<th>Delete</th>
</tr>

<?php

include("includes/db.php");

$get_brand ="select * from brands";

$run_brand =mysqli_query($con, $get_brand);

$i=0;

while ($row_brand=mysqli_fetch_array($run_brand)){

	$brand_id = $row_brand['brand_id'];

	$brand_title = $row_brand['brand_title'];


	$i++;


	

?>

<tr align="center" >
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $brand_title ?> </td>

	<td><a href="Manager.php?edit_brand=<?php echo $brand_id; ?>"><button>Edit</a></button></td>
	<td><a href="delete_brand.php?delete_brand=<?php echo $brand_id; ?>"><button>Delete</a></button></td>

</tr>

<?php } ?>

</table>