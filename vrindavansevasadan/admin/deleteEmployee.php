<?php 

include 'DataBaseConnection.php';
if($_REQUEST['empid']) {
	$sql_delete = "DELETE FROM `employee` WHERE emp_id ='".$_REQUEST['empid']."'";
	$resultset = mysqli_query($con, $sql_delete) or die("database error:". mysqli_error($con));
	if($resultset) {
		echo "Record Deleted";
	}
}
?>  	
