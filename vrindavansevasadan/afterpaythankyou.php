<?php

session_start();

 ?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rooms</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <!--  <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->
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

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Hotel</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                               <a href="index.html" style="font-size: 25px;">VRINDAVAN SEVA SADAN</a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <!-- <li><a href="services.php">Service</a></li> -->
                                        <li><a href="rooms.php">Rooms</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="galary.php">Gallary</a></li>
                                        <li><a href="faqs.php">FAQ's</a></li>
                                        <li><a href="foodmenu.php">Food</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <!-- <a href=''><img src='profile.jpg' style='border: 4px solid #0c14b0; border-radius: 50%; height: 50px;' class='mr-2'><span style='font-size: 15px; font-weight: bolder;'>".$user."</span></a> -->
                                        <?php 

                                        if (isset($_SESSION['uname'])) {
                                         ?>
                                            <li><a href='logout.php'>Logout</a></li> 
                                            <li><div class='dropdown'>
                                                <a href='' class='dropdown-toggle' data-toggle='dropdown'>
                                                    <?php 
                                                    if ($_SESSION["uimg"] == "") {
                                                        echo "<img src='userSection/image/profile.jpg' style='border: 4px solid #0c14b0; border-radius: 50%; height: 50px;' class='mr-2'>";
                                                    }else{ ?>
                                                        <img src='userSection/image/<?php echo $_SESSION["uimg"]; ?>' style='border: 4px solid #0c14b0; border-radius: 50%; height: 50px;' class='mr-2'><?php
                                                    }

                                                     ?>
                                            </a><div class='dropdown-menu'>
                                                <a class='dropdown-item' href='userSection/userMyprofile.php'>Deshboard</a>
                                                <a class='dropdown-item' href='userSection/userBooking.php'>Bookings</a>
                                                <a class='dropdown-item' href='userSection/userNoti.php'>Notification</a>
                                                <a class='dropdown-item' href='userSection/userChangePassword.php'>Change password</a></div></div></li> 
                                            <?php
                                        }else{ ?>
                                            <li><a href='login.php'>Login</a></li>
                                            <li><a href='newAccount.php'>Register</a></li>
                                            <?php 
                                        }
                                         ?>                              
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mt-5 mb-5">Thank You for Booking!!!</h1>
                    <h2 class="mt-5 mb-3">Payment Details:</h2>
                    <?php 
                    
                    include 'admin/DataBaseConnection.php';
                    if(isset($_GET['roomid'])){
                        $roomid = $_GET['roomid'];
                        $userid = $_SESSION['uid'];
                        
                        $sql1 = "SELECT * FROM `room` WHERE room_id = $roomid";
                        $sql2 = "SELECT * FROM `login` WHERE u_id= $userid";
                        $result1 = mysqli_query($con,$sql1);
                        $row1 = mysqli_fetch_array($result1);

                        $result2 = mysqli_query($con,$sql2);
                        $row2 = mysqli_fetch_array($result2);

                        $roomtype = $row1['room_type'];
                        $roombed = $row1['room_bed'];
                        $name = $row2['fullname'];
                        $email = $row2['email'];
                        $phone = $row2['phone'];
                        $adhar = $row2['adhar'];
                    }
                     ?>
                        <form method="post" action="#">
                            <div class="form-group">
                                <label>Room Type</label>
                                <input type="text" name="roomtype" value="<?php echo $roomtype; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Room bed</label>
                                <input type="text" name="roombed" value="<?php echo $roombed; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="bookname" value="<?php echo $name; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="bookemail" value="<?php echo $email; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="bookphone" value="<?php echo $phone; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Adhar</label>
                                <input type="text" name="bookadhar" value="<?php echo $adhar; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Number of People</label>
                                <input type="text" name="bookpersone" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Check-in Date</label>
                                <input type="text" name="cin" id="doj" required="required" placeholder="Check-in Date" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Check-out Date</label>
                                <input type="text" name="cout" id="dob" required="required" placeholder="Check-out Date" class="form-control" autocomplete="off">
                            </div>                        
                            <div class="text-center mt-3 mb-5">
                                <input type="submit" name="Confirmyourbooking" class="btn btn-danger" value="Confirm Booking">
                            </div>
                        </form>
            </div>
        </div>
    </div>

    </main>

   <footer>
        <!-- Footer Start-->
        <div class="footer-area black-bg pt-50">
            <div class="container-fluid">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-30">
                          <!-- logo -->
                          <div class="footer-logo" style=" margin-bottom: 36px;">
                            <a href="index.html" style="color: white;">OUR BLOGS</a>
                          </div>
                          <div class="footer-social footer-social2">
                              <a href="#" style="border-radius: 50%"><i class="fab fa-facebook-f"></i></a>
                              <a href="#" style="border-radius: 50%"><i class="fab fa-twitter"></i></a>
                              <a href="#" style="border-radius: 50%"><i class="fas fa-globe"></i></a>
                              <a href="#" style="border-radius: 50%"><i class="fab fa-behance"></i></a>
                          </div>
                          <div class="footer-pera">
                               <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                          </div>
                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="rooms.php">Our Best Rooms</a></li>
                                    <li><a href="galary.php">Our Photo Gellary</a></li>
                                    <li><a href="foodmenu.php">Food Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Reservations</h4>
                                <ul>
                                    <li>Mob: 9875674634</li>
                                    <li>Skype: VrindavanSevaSadan</li>
                                    <li>E-mail: VSevaSadan@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Our Location</h4>
                                <p>Vrindavan Seva Sadan, (Thakur Shree Radha Bihari Charitable Trust) Radha Mohanvan, Chhattikara Marg, Raman Reti, Shri Dham, Vrindavan Mathura (U.P India)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
   
<!-- JS here -->
	
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
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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

        <script>
          $(document).ready(function() {
          // Datepicker Popups calender to Choose date.
            $(function() {
            $("#doj").datepicker({
              dateFormat: 'dd-mm-yy'
            });

            $("#dob").datepicker({
              dateFormat: 'dd-mm-yy'
            });
            });
          });
          </script>
        
    </body>
</html>

<?php
if(isset($_POST['Confirmyourbooking'])){
    $roomtypee = $_POST['roomtype'];
    $roombede = $_POST['roombed'];
    $bookname = $_POST['bookname'];
    $bookemail = $_POST['bookemail'];
    $bookphone = $_POST['bookphone'];
    $bookadhar = $_POST['bookadhar'];
    $bookperson = $_POST['bookpersone'];
    $bookcheckin = $_POST['cin'];
    $bookcheckout = $_POST['cout'];
    $useridsub = $_SESSION['uid'];

    $quey = "INSERT INTO `roombooking`(`book_room_type`, `book_room_bed`, `book_room_name`, `book_room_email`, `book_room_phone`, `book_room_adhar`, `book_room_person`, `book_room_checkin`, `book_room_checkout`, `user_id`) VALUES ('$roomtypee','$roombede','$bookname','$bookemail','$bookphone','$bookadhar','$bookperson','$bookcheckin','$bookcheckout',$useridsub)";

    $runfix = mysqli_query($con,$quey);
    if($runfix == true){
    echo "<script>window.open('index.php')</script>";}
}

?>