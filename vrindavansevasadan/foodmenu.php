<?php 
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}


 ?>


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Food Menu</title>
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
    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg" >
            <div class="container">
                <div class="row ">
                    <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                        <div class="hero-caption">
                            <!-- <span>Contact</span> -->
                            <h2>Food Menus</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <main>

        <h3 class="mt-5 text-center">Note: If you want to order something then, simply call the receptionist thank You !!!</h3>
        <p class="mt-3 text-center">Number: 9846737373</p>
        
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h4 class="text-center" style="font-size: 45px;text-decoration: underline;margin-top: 95px;margin-bottom: 55px;">-: Breakfast Menu :-</h4>
              <?php 
              include 'admin/DataBaseConnection.php';
              $sql1 = "SELECT * FROM `breakfast`";
              $result1 = mysqli_query($con,$sql1); ?> 
              <table class="table table-striped" style="margin-top: 40px">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Item Name</th>
                    <th>Size</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $count = 0;
                  if (mysqli_num_rows($result1) >= 1) {
                  while ($row = mysqli_fetch_array($result1)) {
                  $count = $count + 1;
                  ?>
                  <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['brakst_name']; ?></td>
                    <td><?php echo $row['brakst_size']; ?></td>
                    <td><?php echo $row['brakst_price']; ?> /RS</td>
                  </tr>
                  <?php }} ?>
                </tbody>
              </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <h4 class="text-center" style="font-size: 45px;text-decoration: underline;margin-top: 95px;margin-bottom: 55px;">-: Lunch Menu :-</h4>
              <table class="table table-striped" style="margin-top: 40px">
                <?php 
                  $sql2 = "SELECT * FROM `lunch`";
                  $result2 = mysqli_query($con,$sql2); ?> 
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Item Name</th>
                    <th>Size</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      $count1 = 0;
                      if (mysqli_num_rows($result2) >= 1) {
                      while ($row = mysqli_fetch_array($result2)) {
                      $count1 = $count1 + 1;
                      ?>
                  <tr>
                    <td><?php echo $count1; ?></td>
                    <td><?php echo $row['lunch_name']; ?></td>
                    <td><?php echo $row['lunch_size']; ?></td>
                    <td><?php echo $row['lunch_price']; ?> /RS</td>
                  </tr>
                  <?php }} ?>
                </tbody>
              </table>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h4 class="text-center" style="font-size: 45px;text-decoration: underline;margin-top: 95px;margin-bottom: 55px;">-: Dinner Table :-</h4>
              <table class="table table-striped" style="margin-top: 40px; margin-bottom: 120px;">
                <?php 
                  $sql3 = "SELECT * FROM `dinner`";
                  $result3 = mysqli_query($con,$sql3); ?>   
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Item Name</th>
                    <th>Size</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      $count3 = 0;
                      if (mysqli_num_rows($result3) >= 1) {
                      while ($row = mysqli_fetch_array($result3)) {
                      $count3 = $count3 + 1;
                      ?>
                  <tr>
                    <td><?php echo $count3; ?></td>
                    <td><?php echo $row['dinner_name']; ?></td>
                    <td><?php echo $row['dinner_size']; ?></td>
                    <td><?php echo $row['dinner_price']; ?> /RS</td>
                  </tr>
                  <?php }} ?>
                </tbody>
              </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <h4 class="text-center" style="font-size: 45px;text-decoration: underline;margin-top: 95px;margin-bottom: 55px;">-: Full Meal Table :-</h4>
              <table class="table table-striped" style="margin-top: 40px; margin-bottom: 120px;">
                <?php 
                  $sql4 = "SELECT * FROM `fullmeal`";
                  $result4 = mysqli_query($con,$sql4); ?> 
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Item Name</th>
                    <th>Size</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      $count4 = 0;
                      if (mysqli_num_rows($result4) >= 1) {
                      while ($row = mysqli_fetch_array($result4)) {
                      $count4 = $count4 + 1;
                      ?>
                  <tr>
                    <td><?php echo $count4; ?></td>
                    <td><?php echo $row['fullmeal_name']; ?></td>
                    <td><?php echo $row['fullmeal_size']; ?></td>
                    <td><?php echo $row['fullmeal_price']; ?> /RS</td>
                  <?php }} ?>
                </tbody>
              </table>
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