<?php session_start();

if (!isset($_SESSION['uname'])) {
    header('location:../login.php');
}

 ?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>User Deshboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/gijgo.css">
        <link rel="stylesheet" href="../assets/css/slicknav.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/slick.css">
        <link rel="stylesheet" href="../assets/css/nice-select.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">

        <style>
            .sidebar {
              margin: 0;
              padding: 0;
              width: 250px;
              background-color: #f1f1f1;
              position: absolute;
              height: 990px;
              overflow: auto;
            }

            .sidebar a {
              display: block;
              color: black;
              padding: 16px;
              text-decoration: none;
            }

            .sidebar a img{
                border: 5px solid #555; border-radius: 50%; height: 130px; margin-left: 25px;
            }

            .sidebar a:hover:not(.active) {
              background-color: #555;
              color: white;
            }

            div.content {
              margin-left: 290px;
              padding: 1px 16px;
              height: 950px;
              margin-top: 40px;
            }

            div.content form{
                width: 70%;
                margin-left: 130px;
              /*margin-left: 290px;*/
              /*padding: 1px 16px;*/
              /*height: 550px;*/
              /*margin-top: 40px;*/
            }

            @media screen and (max-width: 700px) {
              .sidebar {
                width: 100%;
                height: auto;
                position: relative;
              }
              .sidebar a {
                float: left;
                }
              div.content {
                margin-left: 0;
                }
                .sidebar a img{
                    display: none;
                }
            }

            @media screen and (max-width: 400px) {
              .sidebar a {
                text-align: center;
                float: none;
              }
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
                                        <li><a href="../index.php">Home</a></li>
                                        <!-- <li><a href="services.php">Service</a></li> -->
                                        <li><a href="../rooms.php">Rooms</a></li>
                                        <li><a href="../about.php">About</a></li>
                                        <li><a href="../galary.php">Gallary</a></li>
                                        <li><a href="../faqs.php">FAQ's</a></li>
                                        <li><a href="../foodmenu.php">Food</a></li>
                                        <li><a href="../contact.php">Contact</a></li>
                                        <!-- <a href=''><img src='profile.jpg' style='border: 4px solid #0c14b0; border-radius: 50%; height: 50px;' class='mr-2'><span style='font-size: 15px; font-weight: bolder;'>".$user."</span></a> -->
                                        <?php 

                                        if (isset($_SESSION['uname'])) {
                                         ?>
                                            <li><a href='../logout.php'>Logout</a></li> 
                                            <li><div class='dropdown'>
                                                <a href='' class='dropdown-toggle' data-toggle='dropdown'>
                                                    <?php 
                                                    if ($_SESSION["uimg"] == "") {
                                                        echo "<img src='image/profile.jpg' style='border: 4px solid #0c14b0; border-radius: 50%; height: 50px;' class='mr-2'>";
                                                    }else{ ?>
                                                        <img src='image/<?php echo $_SESSION["uimg"]; ?>' style='border: 4px solid #0c14b0; border-radius: 50%; height: 50px;' class='mr-2'><?php
                                                    }

                                                     ?>
                                            </a><div class='dropdown-menu'>
                                                <a class='dropdown-item' href='userMyprofile.php'>Deshboard</a>
                                                <a class='dropdown-item' href='userBooking.php'>Bookings</a>
                                                <a class='dropdown-item' href='userNoti.php'>Notification</a>
                                                <a class='dropdown-item' href='userChangePassword.php'>Change password</a></div></div></li> 
                                            <?php
                                        }else{ ?>
                                            <li><a href='../login.php'>Login</a></li>
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
        <div class="slider-area">
            <div class="single-slider hero-overly d-flex align-items-center" data-background="../assets/img/hero/aboutpage_hero.jpg" style="height: 140px !important;">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <h2>User Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <!-- <a href=""><img src="image/<?php //echo $_SESSION['uimg']?>"></a> -->
            <!-- <a href="#">Home</a> -->
            <a href="userMyprofile.php">My Profile</a>
            <a href="userBooking.php">Bookings</a>
            <a href="userNoti.php">Notification</a>
            <a href="userChangePassword.php">Change password</a>
            <a href="../logout.php">Logout</a>
        </div>

        <div class="content">
        <h1>All Bookings</h1>
        <?php 

            include '../admin/DataBaseConnection.php';
            $user_id = $_SESSION['uid'];
            $sql = "SELECT * FROM `booking` WHERE `uid` = $user_id ORDER BY `book_id` DESC";
            $run = mysqli_query($con,$sql);

             ?>
        <table class="table table-striped table-responsive">
            <thead>
            <tr>
                <th>Ord Id</th>
                <th>Room</th>
                <th>Person</th>
                <th>Check in</th>
                <th>Check out</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php 
                if (mysqli_num_rows($run) >= 1) {
                    while ($row = mysqli_fetch_array($run)) { 
             ?>
            <tr>
                <td><?php echo $row['order_id']; ?></td>
                <td><?php echo $row['room']; ?></td>
                <td><?php echo $row['noperson']; ?></td>
                <td><?php echo $row['checkin']; ?></td>
                <td><?php echo $row['checkout']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><?php if($row['status'] == 'successful'){
                    echo "<button disabled class='btn btn-success'>Payed</button>";
                }else{
                    echo "<button disabled class='btn btn-danger'>panding</button>";
                } ?></td>
            </tr>
            <?php }}?>
            </tbody>
        </table>
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
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
        
        <!-- Jquery, Popper, Bootstrap -->
        <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="../assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="../assets/js/gijgo.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/animated.headline.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
        <script src="../assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="../assets/js/contact.js"></script>
        <script src="../assets/js/jquery.form.js"></script>
        <script src="../assets/js/jquery.validate.min.js"></script>
        <script src="../assets/js/mail-script.js"></script>
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        
    </body>
</html>