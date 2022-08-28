<?php 
session_start();
 ?>


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FAQ'S Hotel</title>
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

        <style type="text/css">
            .content h5{
                font-size: 45px;
                text-decoration: underline;
                text-align: center;
                margin-top: 40px;
                margin-bottom: 40px;
            }

            .content h6 {
                font-size: 28px;
                margin-bottom: 35px;
            }
            .content p{
                margin-left: 70px;
            }
        </style>
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
    <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/aboutpage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <h2>F.A.Q' s</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- faqs section start -->
        <div class="container content" style="margin-bottom: 120px;">
            <div>
                <h5>Transit Enquiries:</h5>
                <h6>Q 1. Which is the best mode of transport to reach Vrindavan Seva Sadan ?</h6>
                <p>Ans 1. You can use google map direction to reach our hotel. check blow map for the direction of (Vrindavan Seva Sadan).</p>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-8 col-sm-3">
                        <p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.98533875789!2d77.6744588151412!3d27.56296548285186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39736f324c35737f%3A0x7651c10925c0b669!2sHotel%20Vrinda%20Palace!5e0!3m2!1sen!2sin!4v1582048496448!5m2!1sen!2sin" width="400" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </p>
                    </div>
                </div>

                <h6>Q 2. How much does the taxi fare cost from Agra Airport to Rishikesh & from Rishikesh bus stand to Vrindavan Seva Sadan hotel?</h6>
                <p>Ans 2. The approx. taxi fare from Agra Airport to Vrindavan Seva Sadan hotel would cost Rs.900/- and from Rishikesh bus stand to Vrindavan Seva Sadan hotel it would cost Rs. 400/-.</p>

                <h6>Q 3. Do we make taxi arrangements for pickup / drop?</h6>
                <p>Ans 3. Yes we do make arrangements provided we are intimated in advance.</p>

                <h6>Q 5. Do we arrange for railway / bus ticket bookings?</h6>
                <p>Ans 5. Yes we do arrange for ticket bookings through third party agents in our hotel (not affiliated to the hotel) and they find the tickets depending on the availability.</p>
         

                <h5>Accommodation & Food facilities:</h5>
                <h6>Q 1. What are the accommodation facilities available in the Hotel ?</h6>
                <p>Ans 1. We have dormitories, rooms without attached washrooms, rooms with attached washrooms  and deluxe rooms with air conditioning.</p>

                <h6>Q 2. What is the type of food that we serve in the Hotel ?</h6>
                <p>Ans 2. We serve three times pure vegetarian (satvik) meals cooked in the Ashram kitchen.</p>

                <h6>Q 3. Does the accommodation charges include food also ?</h6>
                <p>Ans 3. Yes, the charges include food too.</p>

                <h6>Q 4. Do seekers book in advance for accommodation ?</h6>
                <p>Ans 4. For accommodation in rooms, one has to book in advance or intimate us at least a  day prior  to their arrival at the Ashram. Sometimes, walk-ins may be entertained if accommodation is available but we can’t guarantee accommodation for walk-ins. So, we always advise to call us in advance to guarantee accommodation for you.</p>

                <h6>Q 5. Is the house keeping for rooms done on a daily basis or as & when requested ?</h6>
                <p>Ans 5. Yes, the house keeping is done daily or as & when requested.</p>

                <h6>Q 6. Do we provide a laundry facility in the Ashram ?</h6>
                <p>Ans 6. Yes, we do provide laundry facility which is chargeable.</p>

                <h6>Q 7. What is the accommodation capacity of the Hotel?</h6>
                <p>Ans 7. We can accommodate around 100 guest in the Hotel.</p>

                <h5>Mode of Payment:</h5>
                <h6>Q 1. What is the payment mode accepted in  the Hotel?</h6>
                <p>Ans 1. We accept only cash payments or participants could directly transfer funds to our account.</p>
         
                <h6>Q 2. Do we accept debit/credit card payments?</h6>
                <p>Ans 2. Yes very soon through our online registration or donation tool on the website.</p>

                <h6>Q 3. Is it possible to make online payments for room bookings/enrollments ?</h6>
                <p>Ans 3. Yes, same as above.</p>
            </div>
        </div>
        <!-- faqs section end -->
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
        <script src="./assets/js/jquery.magnific-popup.js"></script>
        
        <!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
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
        
        
    </body>
</html>