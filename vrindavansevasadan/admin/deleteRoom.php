<?php 

include 'DataBaseConnection.php';
if($_REQUEST['roomid']) {
	$sql_delete = "DELETE FROM `room` WHERE room_id ='".$_REQUEST['roomid']."'";
	$resultset = mysqli_query($con, $sql_delete) or die("database error:". mysqli_error($con));
	if($resultset) {
		echo "Room Record Deleted";
	}
}
?>  	
