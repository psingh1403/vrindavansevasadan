<?php 
session_start();
include 'admin/DataBaseConnection.php';
$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
$ROOM_TYPE = $_POST["ROOM_TYPE"];
$MSISDN = $_POST["PHONE"];
$EMAIL = $_POST["EMAIL"];
$ADHAR = $_POST["ADHAR"];
$NOPEOPLE = $_POST["NOPEOPLE"];
$CHECKIN = $_POST["CHECKIN"];
$CHECKOUT = $_POST["CHECKOUT"];
$userid = $_SESSION['uid'];

$sql = "INSERT INTO `booking`(`order_id`, `cust_id`, `industry_type_id`, `room`, `phone`, `email`, `adhar`, `noperson`, `checkin`, `checkout`, `amount`, `uid`) VALUES ('$ORDER_ID','$CUST_ID','$INDUSTRY_TYPE_ID','$ROOM_TYPE','$MSISDN','$EMAIL','$ADHAR','$NOPEOPLE','$CHECKIN','$CHECKOUT','$TXN_AMOUNT',$userid)";
mysqli_query($con,$sql);
 ?>

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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

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

    <div class="container-fluid align-center w-75 mb-5">
        <h1 class="text-center" style="margin-top: 95px;">Thank You for Booking!!!</h1>
        <h4 class="text-center mt-5 mb-5">Your Booking Details:</h4>
        <table class="table w-75 m-auto">
            <tr>
                <td>Title</td>
                <td>Values</td>
            </tr>
            <tr>
                <td>Order ID</td>
                <td><?php echo $ORDER_ID; ?></td>
            </tr>
            <tr>
                <td>Room Type</td>
                <td><?php echo $ROOM_TYPE; ?></td>
            </tr>
            <tr>
                <td>Customer Id</td>
                <td><?php echo $CUST_ID; ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo $MSISDN; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $EMAIL; ?></td>
            </tr>
            <tr>
                <td>Check in date</td>
                <td><?php echo $CHECKIN; ?></td>
            </tr>
            <tr>
                <td>Check out date</td>
                <td><?php echo $CHECKOUT; ?></td>
            </tr>
            <tr>
                <td>Total amount</td>
                <td><?php echo $TXN_AMOUNT; ?></td>
            </tr>
        </table>
        <div class="text-center">
            <a href="userSection/userBooking.php" class="btn btn-primary">Deshboard</a>
        </div>
    </div>

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