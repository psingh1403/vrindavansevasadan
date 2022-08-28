<?php session_start();

if (!isset($_SESSION['uname'])) {
    header('location:../login.php');
}

include '../admin/DataBaseConnection.php';

if (isset($_POST['editUserProfile'])) {
    // $file= $_FILES['profile'];
    $fileName = $_FILES['uimage']['name'];
    $fileTmp = $_FILES['uimage']['tmp_name'];
    // $fileSize = $_FILES['profile']['size'];
    $filesError = $_FILES['uimage']['error'];
    $fileType = $_FILES['uimage']['type'];

    $fileExt = explode('.',$_FILES['uimage']['name']);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed)){
        if($_FILES['uimage']['error'] ===  0){          
                // $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination = 'image/'.$fileName;
                move_uploaded_file($fileTmp,$fileDestination);            
        }else{
            echo "<script>alert('You have an error uploading your file!')</script>";
        }
    }else{
        echo "<script>alert('You cannot upload files of this type!')</script>";
    }
    
    $name = $_POST['name'];
    $uname = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $adhar = $_POST['adhar'];

    $sql2 ="UPDATE `login` SET `fullname`='$name', `username`= '$uname',`phone`='$phone', `adhar`='$adhar', `email`='$email',`u_img`= '$fileName' WHERE u_id = ".$_GET['id'];
    $result = mysqli_query($con, $sql2);
    if ($result == true) {
        echo "<script>alert('This record is successfully update.');</script>";
        header('location:userMyprofile.php');
    }
}

 ?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Edit user profile</title>
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

        <!-- datepicker css cdn link -->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

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
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Hotel</b>
                </div>
            </div>
        </div>
    </div> -->
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
            <a href="userMyprofile.php">My Profile</a>
            <a href="userBooking.php">Bookings</a>
            <a href="userNoti.php">Notification</a>
            <a href="userChangePassword.php">Change password</a>
            <a href="userSetting.php">Logout</a>
        </div>

        <div class="content">
            <h1>Profile</h1>
            <?php 
            // $user_id = $_GET['id'];
            
            $sql1 = "SELECT * FROM `login` WHERE u_id = ".$_GET['id'];
            $run1 = mysqli_query($con,$sql1);

                if (mysqli_num_rows($run1) >= 1) {
                    while ($row = mysqli_fetch_array($run1)) { 
             ?>
            <form id="userprofileform" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Profile image:</label><br>
                    <?php if ($row['u_img'] == "") {
                        echo "Your profile is not found, please upload your profile";
                    }else{ ?>
                        <img src='image/<?php echo $row["u_img"]; ?>' width='155' height='155'>
                    <?php
                    } ?>
                    <input type="file" id="image" name="uimage" class="form-control" style="height: 47px; margin-top: 40px;" value="<?php echo $row['u_img']; ?>">
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['fullname']; ?>">
                </div>
                <div class="form-group">
                    <label>User Name:</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $row['username']; ?>">
                </div>
                <div class="form-group">
                    <label>Phone:</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $row['phone']; ?>">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group">
                    <label>Adhar Number:</label>
                    <input type="text" name="adhar" id="adhar" maxlength="16" class="form-control" value="<?php echo $row['adhar']; ?>">
                </div>
                <button type="submit" id="editsubmit" name="editUserProfile" class="btn btn-primary radius">Submit</button>
                <a href="userMyprofile.php" class="btn btn-primary" style="margin-left: 30px;">Cencel</a>
                <!-- <button name="editUserProfile" class="btn btn-primary"></button> -->
                <!-- <a href="" name="editUserProfile" class="btn btn-primary">Submit</a> -->
            </form>
        <?php }} ?>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="../assets/js/jquery.form.js"></script>

    <script>
      $(document).ready(function(){
        $(function(){
          $('#userprofileform').validate({
            rules: {
              name: {
                required: true,
                minlength: 3
              },
              username: {
                required: true,
                minlength: 3
              },
              phone: {
                required: true,
                minlength: 10
              },
              email: {
                required: true
              },
              adhar: {
                required: true,
                minlength: 15
              }
            },
            messages: {
              name: {
                required: "Your name field is required",
                minlength: "minimum length is 3."
              },
              username: {
                required: "Your username field is required",
                minlength: "minimum length is 3."
              },
              phone: {
                required: "Your phone field is required",
                minlength: "minimum length is 10."
              },
              email: {
                required: "Your email field is required"
              },
              adhar: {
                required: "Your adhar field is required",
                minlength: "length must be 16."
              }
            },
          })
        });

        $('#editsubmit').click(function(){
            var img_val = $('#image').val();
            if (img_val == "") {
                alert("Select one image...");
                return false;
            }
        });
      });
    </script>
        
    </body>
</html>

<?php 

 ?>