<?php 

include 'DataBaseConnection.php';
if($_REQUEST['dinnerid']) {
	$sql_delete1 = "DELETE FROM `dinner` WHERE dinner_id ='".$_REQUEST['dinnerid']."'";
	$resultset = mysqli_query($con, $sql_delete1) or die("database error:". mysqli_error($con));
	if($resultset) {
		echo "Dinner Record Deleted";
	}
}
?>  	
