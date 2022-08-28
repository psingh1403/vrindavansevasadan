<?php
session_start();
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];

$ROOM_TYPE = $_POST["ROOM_TYPE"];
$MSISDN = $_POST["PHONE"];
$EMAIL = $_POST["EMAIL"];
$ADHAR = $_POST["ADHAR"];
$NOPEOPLE = $_POST["NOPEOPLE"];
$CHECKIN = $_POST["CHECKIN"];
$CHECKOUT = $_POST["CHECKOUT"];
$userid = $_SESSION['uid'];

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
// $paramList["ROOM_TYPE"] = $ROOM_TYPE;
// $paramList["MSISDN"] = $MSISDN;
// $paramList["EMAIL"] = $EMAIL;
// $paramList["ADHAR"] = $ADHAR;
// $paramList["NOPEOPLE"] = $NOPEOPLE;
// $paramList["CHECKIN"] = $CHECKIN;
// $paramList["CHECKOUT"] = $CHECKOUT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["CALLBACK_URL"] = "https://vrindavansevasadan.cf/Paytm/PaytmKit/pgResponse.php";

include '../../admin/DataBaseConnection.php';
$que = "INSERT INTO `booking`(`order_id`, `cust_id`, `industry_type_id`, `room`, `phone`, `email`, `adhar`, `noperson`, `checkin`, `checkout`, `amount`, `uid`) VALUES ('$ORDER_ID','$CUST_ID','$INDUSTRY_TYPE_ID','$ROOM_TYPE','$MSISDN','$EMAIL','$ADHAR','$NOPEOPLE','$CHECKIN','$CHECKOUT','$TXN_AMOUNT', $userid)";

$result = mysqli_query($con,$que);
/*
$paramList["CALLBACK_URL"] = "http://localhost/PaytmKit/pgResponse.php";
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
			<table border="1">
				<tbody>
				<?php
				foreach($paramList as $name => $value) {
					echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
				}
				?>
				<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
				</tbody>
			</table>
			<script type="text/javascript">
				document.f1.submit();
			</script>
		</form>
</body>
</html>