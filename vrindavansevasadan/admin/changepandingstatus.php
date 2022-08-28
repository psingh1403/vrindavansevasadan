<?php 


if (isset($_GET['ordid'])) {
	include 'DataBaseConnection.php';
	$sql1 = "UPDATE `booking` SET `status`= 'successful' WHERE `book_id` =".$_GET['ordid'];
	mysqli_query($con,$sql1);
	header("location:home.php");
}

 ?>