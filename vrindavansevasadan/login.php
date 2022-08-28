<?php 

session_start();
if (isset($_SESSION['uname'])) {
    header('location:index.php');
}

 ?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>User Login</title>
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
                                        <!-- <li><a href="blog.html">Blog</a></li> -->
                                        <!-- <li><a href="#">Pages</a></li> -->
                                        <li><a href="contact.php">Contact</a></li>
                                        <!-- <li><a href="login.php">Login</a></li> -->
                                        <li><a href="newAccount.php">Register</a></li>
                                        <!-- <li><a href="logout.php">Logout</a></li> -->
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
            <div class="col-xl-4 col-lg-2 col-md-2 col-sm-12 col-12"></div>
            <div class="col-xl-4 col-lg-8 col-md-8 col-sm-12 col-12">
              <div class="panel-group justify-content-center" style="margin-top: 120px; margin-bottom: 120px;">
                <div class="panel panel-primary">
                  <div class="panel-heading" style="text-align: center; font-size: 40px">Login</div>
                  <div class="panel-body">
                    <form id="loginform" method="post" action="" novalidate="novalidate">
                      <div class="form-group">
                        <label for="uname" style="font-size: 22px;">Username</label>
                        <input type="text" name="username" id="uname" placeholder="username" class="form-control" style="height: 55px">
                        <div class="error_uname"></div>
                      </div>
                      <div class="form-group">
                        <label for="psd" style="font-size: 22px;">Password</label>
                        <input type="password" name="password" id="psd" placeholder="********" class="form-control" style="height: 55px">
                        <div class="error_password"></div>
                      </div>
                      <div style="text-align: center;">
                        <!-- <button class="btn btn-info" style="font-size: 22px;">Login</button> -->
                        <button id="loginbtn" class="btn btn-info" name="userlogin" type="submit">Login</button>
                      </div>
                      <div class="float-right mt-4">
                          <a href="forgetpassword.php">forgot password</a>
                      </div>
                      <div class="float-right mt-3">
                          <p>Create New Account <a href="newAccount.php">Click Here</a></p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-2 col-md-2 col-sm-12 col-12"></div>
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

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#loginbtn').click(function(){
                var username = $('#uname').val();
                var password = $('#psd').val();
                if(username == ""){
                    $('.error_uname').html('* This field is required');
                    // $('.error_uname').css('color','red');
                    return false;
                }
                if(password == ""){
                    $('.error_password').html('* This field is required');
                    // $('.error_password').css('color','red');
                    return false;
                }
            });
        });
    </script>

   
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
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> -->
        <!-- <script type="text/javascript">
            $(document).ready(function(){
                // validate contactForm form
                $('#loginbtn').click(function(){
                    $('#loginform').validate({
                        rules: {
                            uname: {
                                required: true
                            },
                            psd: {
                                required: true
                            }
                        },
                        messages: {
                            uname: {
                                required: "UserName field is required ?"
                            },
                            psd: {
                                required: "Password field is required ?"
                            }
                        }
                    })
                });
            });
        </script> -->
        
    </body>
</html>

<?php 

include 'admin/DataBaseConnection.php';
if (isset($_POST['userlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'";
    $run = mysqli_query($con,$sql);
    if (mysqli_num_rows($run) < 1) {
        echo "<script>alert('UserName OR Password not match');window.open('login.php','_self');</script>";
    }
    else{
        $data = mysqli_fetch_assoc($run); //it is an array.

        $USERid = $data['u_id'];
        $USERname = $data['username'];
        $USERemail = $data['email'];
        $USERrole = $data['role'];
        $USERimg = $data['u_img'];

        $_SESSION['uid'] = $USERid;
        $_SESSION['uname'] = $USERname;
        $_SESSION['uemail'] = $USERemail;
        $_SESSION['urole'] = $USERrole;
        $_SESSION['uimg'] = $USERimg;

        echo "<script>window.open('index.php','_self');</script>";
    }
}
?>