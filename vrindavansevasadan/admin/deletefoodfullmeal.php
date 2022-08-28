<?php 

include 'DataBaseConnection.php';
if($_REQUEST['fullmealid']) {
	$sql_delete1 = "DELETE FROM `fullmeal` WHERE fullmeal_id ='".$_REQUEST['fullmealid']."'";
	$resultset = mysqli_query($con, $sql_delete1) or die("database error:". mysqli_error($con));
	if($resultset) {
		echo "Full Meal Record Deleted";
	}
}
?>  	
