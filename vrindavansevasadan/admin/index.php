<?php 

session_start();
if (isset($_SESSION['admin_id'])) {
  # code...
  header('location:home.php');
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bookings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- admin style sheet -->
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">

  <script src="https://kit.fontawesome.com/d86ae2f46d.js" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" style="background-color: black" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="font-size: 30px;">Admin Panel</a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="collapsibleNavbar">
      <ul class="nav navbar-nav">
        <li>
          <a href="home.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li>
          <a href="employee.php"><i class="far fa-building"></i> Employee</a>
        </li>
        <li>
          <a href="room.php"><i class="fas fa-bed"></i> Room</a>
        </li>
        <li>
          <a href="food.php"><i class="fas fa-hamburger"></i> Food</a>
        </li>
        <li>
          <a href="user.php"><i class="fas fa-user-friends"></i> Users</a>
        </li>
        <li>
          <a href="message.php"><i class="fas fa-envelope"></i> User-Message</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-dark" href="employeeLeave.php"><i class="fas fa-envelope"></i> Employee-Leave</a>
      </li>
      </ul>
    </div>  
  </div>
</nav><br>

<div class="container adminlogin">
  <div class="row">
    <div class="col-lg-4 col-md-4"></div>
    <div class="col-lg-4 col-md-4">
      <div class="panel-group justify-content-center" style="margin-top: 120px;">
        <div class="panel panel-primary">
          <div class="panel-heading">Admin Login</div>
          <div class="panel-body">
            <form method="post" action="">
              <div class="form-group">
                <label for="uname">Username</label>
                <input type="text" name="username" id="uname" placeholder="username" required="required" class="form-control">
              </div>
              <div class="form-group">
                <label for="psd">Password</label>
                <input type="password" name="password" id="psd" placeholder="********" required="required" class="form-control">
              </div>
              <div class="align-text-center">
                <button class="btn btn-info" name="adminlogin">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>


<?php 

include 'DataBaseConnection.php';

if (isset($_POST['adminlogin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $qry = "SELECT * FROM `adminlogin` WHERE `username` = '$username' AND `password` = '$password'";

  $run = mysqli_query($con,$qry);

  $row = mysqli_num_rows($run);

  if ($row < 1) {
     ?>
    <script>alert("Ypur Username or Password not currect. please try again...");
    window.open('index.php','_self');
    </script>
  <?php
  }else{
    $data = mysqli_fetch_assoc($run); //it is an array.

    $_SESSION['admin_id'] = $data['id'];
    $_SESSION['admin_uname'] = $data['username'];
    $_SESSION['urole'] = "admin";

    header('location:home.php');
  }
}

 ?>