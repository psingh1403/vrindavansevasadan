<?php 

session_start();
if (isset($_SESSION['uname'])) {
    header('location:index.php');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$msg = "";
include 'admin/DataBaseConnection.php';

if ($_POST) {
    $uemail = $_POST['useremail'];

 $q = mysqli_query($con,"SELECT * FROM `login` WHERE `email` = '{$uemail}'") or die(mysqli_error());
 $data = mysqli_num_rows($q);
 $row = mysqli_fetch_array($q);

 if ($data>0) {

    // Load Composer's autoloader
    require 'vendor/autoload.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'your working email';                     // SMTP username
        $mail->Password   = 'your working email password';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('your working email','Vrindavan Seva Sadan');
        $mail->addAddress($uemail, $uemail);     // Add a recipient
       
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Forget Password';
        $mail->Body    = 'Your password is: <b>'.$row["password"].'</b>';
        $mail->AltBody = 'Your password is: $row["password"]';

        $mail->send();
        echo '<script>alert("Your password has been send on your email id.");window.open("login.php");</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 }else{
    $msg = "<script>alert('Please enter your valid email...');</script>";
    echo $msg;
 }
}
// else{
//     echo "<script>alert('Email Not found!!!');</script>";
// }

 ?>

<?php 
session_start();
 ?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>VRINDAVAN SEVA SADAN</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">

                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
    <!-- <div class="container-fluid" style="background-color: #b8b8b8; padding: 5px;">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <div style="margin-top: 14px;">
                    <p><span style="margin-right: 25px; color: #0c14b0; font-size: 20px;">Phone: + 91-9845645372</span><span style="color: #0c14b0; font-size: 20px;">E-Mail: VSevaSadan@gmail.com</span></p>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div style="float: right;">
                    <div>
                        <img src="profile.jpg" style="border: 4px solid #0c14b0; border-radius: 50%; height: 50px;"><label style="padding: 10px">Welcome pushpendra singh</label>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
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
        <div class="container adminlogin">
          <div class="row">
            <div class="col-lg-4 col-md-4"></div>
            <div class="col-lg-4 col-md-4">
              <div class="panel-group justify-content-center" style="margin-top: 120px; margin-bottom: 120px;">
                <div class="panel panel-primary">
                  <div class="panel-heading" style="text-align: center; font-size: 40px">Forgot Password</div>
                  <div class="panel-body">
                    <form id="forgetpass" method="post" action="">
                      <div class="form-group">
                        <label style="font-size: 22px;">Email</label>
                        <input type="email" name="useremail" id="email" placeholder="Example@gmail.com" class="form-control" style="height: 55px">
                        <div class="error_uname"></div>
                      </div>
                      <div class="mt-5" style="text-align: center;">
                        <button id="submit" class="btn btn-info" name="userlogin" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
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
        <script src="./assets/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
       
        <script type="text/javascript">
            $(document).ready(function(){
                $(function(){
                    $('#forgetpass').validate({
                        rules: {
                            email: {
                                required: true,
                                email: true
                            }                            
                        },
                        messages: {
                            email: {
                                required: "Email field is required ?"
                            }
                        },
                    })
                });
            });
        </script> 
    </body>
</html>
