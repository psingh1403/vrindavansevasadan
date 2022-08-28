<?php 

include 'DataBaseConnection.php';
if($_REQUEST['breakfastid']) {
	$sql_delete1 = "DELETE FROM `breakfast` WHERE brakst_id ='".$_REQUEST['breakfastid']."'";
	$resultset = mysqli_query($con, $sql_delete1) or die("database error:". mysqli_error($con));
	if($resultset) {
		echo "breakfast Record Deleted";
	}
}
?>  	
