<?php 

include 'DataBaseConnection.php';
if($_REQUEST['lunchid']) {
	$sql_delete2 = "DELETE FROM `lunch` WHERE lunch_id ='".$_REQUEST['lunchid']."'";
	$resultset1 = mysqli_query($con, $sql_delete2) or die("database error:". mysqli_error($con));
	if($resultset1) {
		echo "Lunch Record Deleted";
	}
}
?>