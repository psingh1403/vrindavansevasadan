<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Hotel Room</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->
    <!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/gijgo.css">
    <link rel="stylesheet" href="../../assets/css/slicknav.css">
    <link rel="stylesheet" href="../../assets/css/animate.min.css">
    <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/css/slick.css">
    <link rel="stylesheet" href="../../assets/css/nice-select.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">

    <!-- datepicker css cdn link -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    <!-- <style type="text/css">
    	table{
    		border: 2px solid #000;
    	}
    	td{
    		padding: 20px 110px;
    		text-align: center;
    		font-size: 18px;
    	}
    </style> -->
</head>

<body>

<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application?s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") { 

			include '../../admin/DataBaseConnection.php';
			$orderid = $_POST['ORDERID'];
			$sql = "UPDATE `booking` SET `status`='successful' WHERE `order_id` = '$orderid'";
			$result = mysqli_query($con,$sql);

			$quy = "SELECT `book_id`, `order_id`, `cust_id`, `industry_type_id`, `room`, `phone`, `email`, `adhar`, `noperson`, `checkin`, `checkout`, `amount`, `status` FROM `booking` WHERE `order_id` = '$orderid'";
			$result2 = mysqli_query($con,$quy);
			$row = mysqli_fetch_array($result2);

		?>
		<div class="container-fluid align-center w-75">
			<h1 class="text-center" style="margin-top: 95px;">Thank You for Booking!!!</h1>
			<h4 class="text-center mt-5 mb-5">Your Booking Details:</h4>
			<table class="table w-75 m-auto">
				<tr>
					<td>Title</td>
					<td>Values</td>
				</tr>
				<tr>
					<td>Order ID</td>
					<td><?php echo $row['order_id']; ?></td>
				</tr>
				<tr>
					<td>Room Type</td>
					<td><?php echo $row['room']; ?></td>
				</tr>
				<tr>
					<td>Customer Id</td>
					<td><?php echo $row['cust_id']; ?></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><?php echo $row['phone']; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $row['email']; ?></td>
				</tr>
				<tr>
					<td>Check in date</td>
					<td><?php echo $row['checkin']; ?></td>
				</tr>
				<tr>
					<td>Check out date</td>
					<td><?php echo $row['checkout']; ?></td>
				</tr>
				<tr>
					<td>Total amount</td>
					<td><?php echo $row['amount']; ?></td>
				</tr>
			</table>
			<div class="text-center">
				<a href="../../userSection/userBooking.php" class="btn btn-primary">Deshboard</a>
			</div>
		</div>
		<?php //Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	// if (isset($_POST) && count($_POST)>0 )
	// { 
	// 	foreach($_POST as $paramName => $paramValue) {
	// 			echo "<br/>" . $paramName . " = " . $paramValue;
	// 	}
	// }
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>


		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>
        
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <!-- <script src="./assets/js/jquery.nice-select.min.js"></script> -->
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

</body>
</html>