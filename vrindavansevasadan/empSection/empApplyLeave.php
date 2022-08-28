<?php session_start();

if (!isset($_SESSION['empid'])) {
    header('location:index.php');
}

 ?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Employee Deshboard</title>
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

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">


        <style>
            .sidebar {
              margin: 0;
              padding: 0;
              width: 250px;
              background-color: #f1f1f1;
              position: absolute;
              height: 1090px;
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
              height: 1250px;
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

                                        if (isset($_SESSION['empid'])) {
                                         ?>
                                            <li><a href='../logout.php'>Logout</a></li> 
                                            <li><div class='dropdown'>
                                                <a href='' class='dropdown-toggle' data-toggle='dropdown'><?php echo $_SESSION['empusername']; ?></a>
                                                <div class='dropdown-menu'>
                                                <a class='dropdown-item' href='empProfile.php'>Deshboard</a>
                                                <a class='dropdown-item' href="empApplyLeave.php">Apply Leave</a>
                                                <a class='dropdown-item' href="empChangePassword.php">Change password</a>
                                                <a class='dropdown-item' href="empLogout.php">Logout</a></div></div></li> 
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
                                <h2>Employee Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <!-- <a href=""><img src="image/<?php //echo $_SESSION['uimg']?>"></a> -->
            <!-- <a href="#">Home</a> -->
            <a href="empProfile.php">My Profile</a>
            <a href="empApplyLeave.php">Apply Leave</a>
            <a href="aproveLeave.php">Leaves</a>
            <a href="empChangePass.php">Change password</a>
            <a href="empLogout.php">Logout</a>
        </div>

        <div class="content">
            <h1>Apply Leave</h1>
            <form id="empleaveform" action="#" method="post">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone:</label>
                    <input type="text" id="phone"  maxlength="10" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label>Start date</label>
                  <input type="text" name="startdate" id="startdate" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>End date</label>
                  <input type="text" name="enddate" id="enddate" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Reason:</label>
                    <input type="text" id="reason" name="reason" class="form-control">
                </div>
                <div class="form-group">
                    <label>Explain your reason:</label>
                    <textarea class="form-control" id="reasonexp" name="reasonexp" rows="6" style="max-height: 160px;"></textarea>
                </div>
                <button class="btn btn-success" name="leaveSend" type="submit">Submit</button>
            </form>
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

        <script>
            $(document).ready(function(){
                // validate contactForm form
                $(function(){
                    $('#empleaveform').validate({
                        rules: {
                            name: {
                                required: true,
                                minlength: 3
                            },
                            phone: {
                                required: true,
                                minlength: 10,
                                maxlength: 10
                            },
                            email: {
                                required: true,
                                email: true
                            },
                            startdate: {
                                required: true
                            },
                            enddate: {
                                required: true
                            },
                            reason: {
                                required: true,
                                minlength: 20
                            },
                            reasonexp: {
                                required: true,
                                minlength: 100
                            }
                        },
                        messages: {
                            name: {
                                required: "Name field is required ?",
                                minlength: "Your name must consist of at least 3 characters"
                            },
                            phone: {
                                required: "Phone field is required ?",
                                minlength: "Your Number must consist of at least 10 digits",
                                maxlength: "Your Number max length require only 10 digits"
                            },
                            email: {
                                required: "Email field is required ?"
                            },
                            startdate: {
                                required: "Please select the Starting date"
                            },
                            enddate: {
                                required: "Please select the End date"
                            },
                            reason: {
                                required: "Reason field is required ?",
                                minlength: "length must grater then 20 characters"
                            },
                            reasonexp: {
                                required: "Explain your reason ?",
                                minlength: "length must grater then 100 characters"
                            }
                        },
                    })
                });
            });
        </script>

        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

        <script>
          $(document).ready(function() {
          // Datepicker Popups calender to Choose date.
            $(function() {
            $("#startdate").datepicker({
              dateFormat: 'dd-mm-yy'
            });

            $("#enddate").datepicker({
              dateFormat: 'dd-mm-yy'
            });
            });
          });
          </script>
        
    </body>
</html>

<?php 

if (isset($_POST['leaveSend'])) {
    include '../admin/DataBaseConnection.php';
    $emp_id = $_SESSION['empid'];
    $emp_name = $_POST['name'];
    $emp_phone = $_POST['phone'];
    $emp_email = $_POST['email'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $emp_reason = $_POST['reason'];
    $emp_reason_exp = $_POST['reasonexp'];

    $sql3 = "INSERT INTO `employeeleave`(`emp_id`, `emp_name`, `emp_phone`, `emp_email`, `start_date`, `end_date`, `emp_reason`, `emp_explain`) VALUES ($emp_id, '$emp_name', '$emp_phone', '$emp_email', '$startdate', '$enddate', '$emp_reason', '$emp_reason_exp')";
    
    $result3 = mysqli_query($con,$sql3);
    if ($result3 == true) {
        echo "<script>alert('Your message has been successfully send. We Will contact you very soon! Thank you for contacting us...');window.open('empProfile.php','_self');</script>";
    }
    
}

 ?>