<?php 

if (isset($_GET['leaveid'])) {
	include 'DataBaseConnection.php';
	$sql1 = "UPDATE `employeeleave` SET `approved`='approved' WHERE `id` =".$_GET['leaveid'];
	mysqli_query($con,$sql1);
	header("location:employeeLeave.php");
}


 ?>