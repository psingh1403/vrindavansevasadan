<?php 

include 'admin/DataBaseConnection.php';
if (isset($_POST['createAccount'])) {

    $fname = $_POST['fullname'];
    $Username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $adhar = $_POST['adhar'];
    $password = $_POST['password'];

    $sql = "SELECT `username`, `phone`, `email` FROM `login` WHERE `username` = '$Username'";

    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result)>0) {
        echo "<script>alert('This username is not available Try other one.');window.open('newAccount.php','_self');</script>";
    }
    else{
        $sql1 = "INSERT INTO `login`(`fullname`, `username`, `phone`, `adhar`, `email`, `password`) VALUES ('$fname','$Username','$phone','$adhar','$email','$password')";
        $result1 = mysqli_query($con,$sql1);
        if($result1 == true){
            header('location:login.php');
        }
    }
}
 ?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>New Registration</title>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                                        <li><a href="login.php">Login</a></li>
                                        <!-- <li><a href="login.php">Register</a></li> -->
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
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-8 col-md-8">
                  <div class="panel-group justify-content-center" style="margin-top: 120px; margin-bottom: 120px;">
                    <div class="panel panel-primary">
                      <div class="panel-heading" style="text-align: center; font-size: 40px">New Account</div>
                      <div class="panel-body">
                        <form id="newAccountForm" action="" method="post">
                            <div class="form-group">
                                <label style="font-size: 22px;">Full Name</label>
                                <input type="text" name="fullname" id="name" placeholder="Enter yuor name..." class="form-control"  style="height: 55px">
                                <div id="error_name"></div>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 22px;">Username</label>
                                <input type="text" name="username" id="username" placeholder="username" class="form-control"  style="height: 55px">
                                <div id="error_uname"></div>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 22px;">Phone</label>
                                <input type="text" name="phone" id="phone" placeholder="XXX-XXX-XXXX" class="form-control" maxlength="10" style="height: 55px">
                                <div id="error_phone"></div>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 22px;">Adhar</label>
                                <input type="text" name="adhar" id="adhar" placeholder="XXXX-XXXX-XXXX-XXXX" class="form-control" maxlength="16" style="height: 55px">
                                <div id="error_phone"></div>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 22px;">Email</label>
                                <input type="text" name="email" id="email" placeholder="example@gmail.com" class="form-control"  style="height: 55px">
                                <div id="error_email"></div>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 22px;">Password</label>
                                <input type="password" name="password" id="password" placeholder="********" class="form-control" style="height: 55px">
                                <div id="error_password"></div>
                            </div>
                            <div style="text-align: center;">
                            <button type="submit" class="btn btn-info" name="createAccount" id="create" style="font-size: 22px;">Create</button>
                                <!-- <a href="#" name="createAccount" id="create" class="genric-btn info radius">Create</a> -->
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2"></div>
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

        <!-- form validation using javascript -->
        <!-- <script>

            $(document).ready(function(){
                $('#create').click(function(){
                    var fname = $('#name').val();
                    var user = $('#uname').val();
                    var phone = $('#phn').val();
                    var adhar = $('#adhar').val();
                    var email = $('#eml').val();
                    var password = $('#psd').val();
                    if (fname == "") {
                        $('#error_name').html('**Name must be filled.');
                        $('#error_name').css('color','red');
                        return false;
                    }

                    if(fname.length <= 2){
                        $('#error_name').html('**Name must be contain at least 3 characters.');
                        $('#error_name').css('color','red');
                        return false;
                    }

                    if (user == "") {
                        $('#error_uname').html('**Username must be filled.');
                        $('#error_uname').css('color','red');
                        return false;
                    }

                    if (phone == "") {                        
                        $('#error_phone').html('**Phone Number must be filled.');
                        $('#error_phone').css('color','red');
                        return false;
                    }

                    if(phone.length <= 9){
                        $('#error_phone').html('**Phone Number is not correct.');
                        $('#error_phone').css('color','red');
                        return false;
                    }

                    if (adhar == "") {                        
                        $('#error_phone').html('**adhar Number must be filled.');
                        $('#error_phone').css('color','red');
                        return false;
                    }

                    if(adhar.length <= 15){
                        $('#error_phone').html('**Phone Number is not correct.');
                        $('#error_phone').css('color','red');
                        return false;
                    }

                    if(email == ""){
                        $('#error_email').html('**Email must be filled.');
                        $('#error_email').css('color','red');
                        return false;
                    }

                    if(!validateEmail(email)){
                        $('#error_email').html('**Email is not correct.');
                        $('#error_email').css('color','red');
                        return false;
                    }

                    if(password == ""){
                        $('#error_password').html('**Password must be filled.');
                        $('#error_password').css('color','red');
                        return false;
                    }

                    
                    function validateEmail(email){
                        var emailreg = (/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
                        return emailreg.test(email);
                    }
                });
            });

        </script> -->
    
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
        <!-- <script src="./assets/js/plugins.js"></script> -->
        <script src="./assets/js/main.js"></script>
       
        <script type="text/javascript">
            $(document).ready(function(){
                $(function(){
                    $('#newAccountForm').validate({
                        rules: {
                            name: {
                                required: true,
                                minlength: 3
                            },
                            username: {
                                required: true,
                                minlength: 5
                            },
                            phone: {
                                required: true,
                                minlength: 10,
                                maxlength: 10
                            },
                            adhar: {
                                required: true,
                                minlength: 15
                            },
                            email: {
                                required: true,
                                email: true
                            },
                            password: {
                                required: true,
                                minlength: 4
                            }
                        },
                        messages: {
                            name: {
                                required: "Name field is required ?",
                                minlength: "Your name must consist of at least 3 characters"
                            },
                            username: {
                                required: "UserName field is required ?",
                                minlength: "Your username must consist of at least 5 characters"
                            },
                            phone: {
                                required: "Phone field is required ?",
                                minlength: "Your Number must consist of at least 10 digits",
                                maxlength: "Your Number max length require only 10 digits"
                            },
                            adhar: {
                                required: "Adhar field is required ?",
                                minlength: "Your Adhar Number must contain 16 digits"
                            },
                            email: {
                                required: "Email field is required ?"
                            },
                            password: {
                                required: "Password field is required ?",
                                minlength: "Your password must contain 4 characters"
                            }
                        },
                    })
                });
            });
        </script> 
        
    </body>
</html>