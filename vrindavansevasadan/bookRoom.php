<?php 
session_start();

include 'admin/DataBaseConnection.php';
if (isset($_GET['roomid'])) {
    $id = $_GET['roomid'];
    $sql = "SELECT * FROM `room` WHERE room_id = '$id'";
    // $sql = "SELECT * FROM `product` WHERE id= '$id'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $room_type = $row['room_type'];
    $room_about = $row['room_about'];
    $room_bed = $row['room_bed'];
    $room_size = $row['room_size'];
    $room_extra = $row['room_extra'];
    $room_price = $row['room_price'];
    $rimage = $row['room_img'];
}else{
    echo "No product found!!";
}

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
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                font-family: Cabin;
            }
            #main{
                width: 100%;
                margin: 50px auto;
            }
            #tab-btn{
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flex;
                display: -o-flex;
                display: flex;
                width: 100%;
                justify-content: center;
            }
            .login,.register{
                text-decoration: none;
                display: block;
                width: 100%;
                background-color: #37474f;
                text-align: center;
                color: #fff;
                font-size: 25px;
                padding: 10px;
            }
            .active{
                background-color: #eee;
                color: #000;
            }
            .container-doc,.other{
                width: 100%;
                background-color: #eee;
                padding: 20px 30px 30px 30px;
                box-shadow: 2px 2px 5px #333;
            }

            .other{
                display: none;
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".register").click(function(){
                    $(".other").show();
                    $(".container-doc").hide();
                    $(".register").addClass('active');
                    $(".login").removeClass('active');
                });
                $(".login").click(function(){
                    $(".container-doc").show();
                    $(".other").hide();
                    $(".login").addClass('active');
                    $(".register").removeClass('active');
                });
            });
        </script>
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
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/aboutpage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <h2>Book My Room</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5">
                <h2 class="text-center p-2 text-primary">Fill the details to complete your order</h2>
                <h4 class="mt-5 mb-2 text-success">Room Details:</h4>
                <table class="table table-bordered" width="500px">
                    <tr>
                        <th>Room Type :</th>
                        <td><?php echo $room_type; ?></td>
                        <td rowspan="7" class="text-center"><img src="admin/roomimg/<?php echo $rimage; ?>" width="220" height="300"></td>
                    </tr>
                    <tr>
                        <th>About Room :</th>
                        <td><?php echo $room_about; ?></td>
                    </tr>
                    <tr>
                        <th>Room Bed:</th>
                        <td><?php echo $room_bed; ?></td>
                    </tr>
                    <tr>
                        <th>Room Size :</th>
                        <td><?php echo $room_size; ?></td>
                    </tr>
                    <tr>
                        <th>Room Extra facilities :</th>
                        <td><?php echo $room_extra; ?></td>
                    </tr>
                    <tr>
                        <th>Room Charge :</th>
                        <td>Rs: <?php echo number_format($room_price); ?></td>
                    </tr>
                    <tr>
                        <th>Your Total Price :</th>
                        <td>Rs: <?php echo number_format($room_price); ?></td>
                    </tr>
                </table>
                <h4 class="mt-5 mb-2 text-success">Enter your details</h4>
    <div class="main">
        <div id="tab-btn">
            <p class="login active">Online Payment</p>
            <!-- <a href="#" class="login active">Online Payment</a> -->
            <p class="register">Cash Payment</p>
            <!-- <a href="#" class="register">Cash Payment</a> -->
        </div>
    <div class="container-doc">
        <form id="bookform" method="post" action="Paytm/PaytmKit/pgRedirect.php" class="">
        <p class="text-center">* - Mandatory Fields</p>
        <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">

        <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['uname']; ?>">

        <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">

        <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">

        <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $room_price; ?>">

        <input type="hidden" name="ROOM_TYPE" value="<?php echo $room_type; ?>">        
        
        <div class="form-group">
            <label>Phone *</label>
            <input type="text" name="PHONE" id="phone" placeholder="XXX-XXX-XXXX" class="form-control" required maxlength="10">
        </div>
        <div class="form-group">
            <label>E-mail *</label>
            <input type="email" name="EMAIL" id="email" placeholder="example@gmail.com" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Adhar Number *</label>
            <input type="text" name="ADHAR" id="adhar" placeholder="XXXX-XXXX-XXXX-XXXX" class="form-control" maxlength="16" required>
        </div>
        <div class="form-group">
            <label>Number of People *</label>
            <select class="form-control" id="noperson" name="NOPEOPLE" autocomplete="off" required>
                <option value selected >Select One</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div class="form-group">
          <label for="doj">Check-in Date *</label>
          <input type="text" name="CHECKIN" id="checkin" placeholder="Check-in Date" class="form-control" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label for="dob">Check-out Date *</label>
          <input type="text" name="CHECKOUT" id="checkout" placeholder="Check-out Date" class="form-control" autocomplete="off" required>
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <input type="submit" name="submit" class="btn btn-danger" value="Click to pay">
        </div>
    </form>
    </div>

    <div class="other">
        <form id="bookform" method="post" action="thankyou.php" class="">
        <p class="text-center">* - Mandatory Fields</p>
        <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">

        <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['uname']; ?>">

        <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">

        <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">

        <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $room_price; ?>">

        <input type="hidden" name="ROOM_TYPE" value="<?php echo $room_type; ?>">        
        
        <div class="form-group">
            <label>Phone *</label>
            <input type="text" name="PHONE" id="phone" placeholder="XXX-XXX-XXXX" class="form-control" required maxlength="10">
        </div>
        <div class="form-group">
            <label>E-mail *</label>
            <input type="email" name="EMAIL" id="email" placeholder="example@gmail.com" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Adhar Number *</label>
            <input type="text" name="ADHAR" id="adhar" placeholder="XXXX-XXXX-XXXX-XXXX" class="form-control" maxlength="16" required>
        </div>
        <div class="form-group">
            <label>Number of People *</label>
            <select class="form-control" id="noperson" name="NOPEOPLE" autocomplete="off" required>
                <option value selected >Select One</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div class="form-group">
          <label for="doj">Check-in Date *</label>
          <input type="text" name="CHECKIN" id="checkincash" placeholder="Check-in Date" class="form-control" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label for="dob">Check-out Date *</label>
          <input type="text" name="CHECKOUT" id="checkoutcash" placeholder="Check-out Date" class="form-control" autocomplete="off" required>
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <input type="submit" name="submit" class="btn btn-danger" value="Submit">
        </div>
    </form>
    </div>
            </div>
        </div>
    </div>
    </div>

        <!-- Make customer Start-->
     </main>   
    <footer>
        <!-- Footer Start-->
        <div class="footer-area black-bg pt-50">
            <div class="container">
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
                                    <li><a href="#">About Mariana</a></li>
                                    <li><a href="#">Our Best Rooms</a></li>
                                    <li><a href="#">Our Photo Gellary</a></li>
                                    <li><a href="#">Pool Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Reservations</h4>
                                <ul>
                                    <li>Tel: xxx xxx xxx</li>
                                    <li>Skype: VrindavanSevaSadan</li>
                                    <li>VSevaSadan@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Our Location</h4>
                                <ul>
                                    <li>198 West 21th Street,</li>
                                    <li>Suite 721 New York NY 10016</li>
                                </ul>
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

        <script>
          $(document).ready(function() {
          // Datepicker Popups calender to Choose date.
            $(function() {
            $("#checkin").datepicker({
              dateFormat: 'dd-mm-yy'
            });

            $("#checkout").datepicker({
              dateFormat: 'dd-mm-yy'
            });
            });
          });
          </script>
          <script>
          $(document).ready(function() {
          // Datepicker Popups calender to Choose date.
            $(function() {
            $("#checkincash").datepicker({
              dateFormat: 'dd-mm-yy'
            });

            $("#checkoutcash").datepicker({
              dateFormat: 'dd-mm-yy'
            });
            });
          });
          </script>
          <script type="text/javascript"></script>
    </body>
</html>
