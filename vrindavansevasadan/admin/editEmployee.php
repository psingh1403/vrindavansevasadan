<?php 

session_start();
if (!isset($_SESSION['admin_id'])) {
  # code...
  header('location:index.php');
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Employee Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- admin style sheet -->
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">

  <!-- datepicker css cdn link -->
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

  <script src="https://kit.fontawesome.com/d86ae2f46d.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
    
  </script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-light navbar-dark">
  <a class="navbar-brand text-dark" href="#">Admin Panel</a>
  <button class="navbar-toggler" style="background-color: black" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" id="active" href="employee.php"><i class="far fa-building"></i> Employee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="room.php"><i class="fas fa-bed"></i> Room</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="food.php"><i class="fas fa-hamburger"></i> Food</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="user.php"><i class="fas fa-user-friends"></i> Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="message.php"><i class="fas fa-envelope"></i> User-Message</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="employeeLeave.php"><i class="fas fa-envelope"></i> Employee-Leave</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>
  </div>  
</nav><br>
<?php 
  include 'DataBaseConnection.php';
  if (isset($_GET['edit_id'])) {
    $sql = "SELECT * FROM `employee` WHERE emp_id =" .$_GET['edit_id'];
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
  }
   ?>
<div class="container" style="margin-bottom: 90px;">
  <div class="row justify-content-center">
      <div class="card" style="width: 600px; margin-top: 60px;">
        <div class="card-header text-center bg-primary">Edit Employee Detail</div>
        <div class="card-body">
          <form id="addemployee" method="post" action="">
            <div class="form-group">
              <label for="fname" style="font-size: 22px;">Name</label>
              <input type="text" name="fullname" id="name" placeholder="Full Name ..." required="required" class="form-control" value="<?php echo $row['emp_name']; ?>" style="height: 55px">
            </div>
            <div class="form-group">
              <label for="uname" style="font-size: 22px;">Username</label>
              <input type="text" name="username" id="username" placeholder="Username ..." required="required" class="form-control" value="<?php echo $row['emp_username']; ?>" style="height: 55px">
            </div>
            <div class="form-group">
              <label for="phone" style="font-size: 22px;">Phone</label>
              <input type="text" name="phone" id="phone" placeholder="Phone Number" required="required" class="form-control" value="<?php echo $row['emp_phone']; ?>" style="height: 55px">
            </div>
            <div class="form-group">
              <label for="email" style="font-size: 22px;">E-Mail</label>
              <input type="email" name="email" id="email" placeholder="E-mail" required="required" class="form-control" value="<?php echo $row['emp_email']; ?>" style="height: 55px">
            </div>
            <div class="form-group">
              <label for="addr" style="font-size: 22px;">Address</label>
              <textarea class="form-control" id="address" required="required" name="address" style="min-height:160px; max-height: 190px;"><?php echo $row['emp_address']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="city" style="font-size: 22px;">City</label>
              <input type="text" name="city" id="city" placeholder="City" required="required" class="form-control" value="<?php echo $row['emp_city']; ?>" style="height: 55px">
            </div>
            <div class="form-group">
              <label for="state" style="font-size: 22px;">State</label>
              <input type="text" name="state" id="state" placeholder="State" required="required" class="form-control" value="<?php echo $row['emp_state']; ?>" style="height: 55px">
            </div>
            <div class="form-group">
              <label for="dept" style="font-size: 22px;">Department</label>
              <input type="text" name="department" id="department" placeholder="Department" required="required" class="form-control" value="<?php echo $row['emp_dept']; ?>" style="height: 55px">
            </div>
            <div class="form-group">
              <label for="doj" style="font-size: 22px;">Date of Joining</label>
              <input type="text" name="doj" id="doj" required="required" placeholder="Date of Joining" class="form-control" value="<?php echo $row['emp_doj']; ?>" style="height: 55px">
            </div>
            <div class="form-group">
              <label for="dob" style="font-size: 22px;">Date of Birth</label>
              <input type="text" name="dob" id="dob" required="required" placeholder="Date of Birth" class="form-control" value="<?php echo $row['emp_dob']; ?>" style="height: 55px">
            </div>
            <div style="text-align: center;">
              <!-- <a href="#" class="btn btn-primary radius">ADD</a> -->
              <button type="submit" name="updateemployee" class="btn btn-primary radius">Update Employee</button><a href="employee.php" class="btn btn-danger radius ml-5">Cencel</a>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="../assets/js/jquery.form.js"></script>

<script>
  $(document).ready(function(){
    $(function(){
      $('#addemployee').validate({
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
          address: {
            required: true
          },
          city: {
            required: true,
            minlength: 4
          },
          state: {
            required: true,
            minlength: 4
          },
          department: {
            required: true
          },
          doj: {
            required: true
          },
          dob: {
            required: true
          },
          password:{
            required: true,
            minlength: 5
          }
        },
        messages: {
          name: {
            required: "Name field is required?",
            minlength: "minimum length is 3"
          },
          username: {
            required: "Username Field is required?",
            minlength: "minimum length is 3"
          },
          phone: {
            required: "Phone Field is required?",
            minlength: "minimum length is 10"
          },
          email: {
            required: "Email Field is required?"
          },
          address: {
            required: "Address Field is required?",
          },
          city: {
            required: "City Field is required?",
            minlength: "minimum length is 4"
          },
          state: {
            required: "State Field is required?",
            minlength: "minimum length is 14"
          },
          department: {
            required: "This Field is required?",
          },
          doj: {
            required: "Date of Joining Field is required?",
          },
          dob: {
            required: "Date of Birth Field is required?",
          },
          password:{
            required: "Password Field is required?",
            minlength: "Your Password must be grater then 5?"
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
    $("#doj").datepicker({
      dateFormat: 'dd-mm-yy'
    });

    $("#dob").datepicker({
      dateFormat: 'dd-mm-yy'
    });
    });
  });
  </script>
<script type="text/javascript"></script>
</body>
</html>

<!-- Update code in php and mysql -->
<?php 
if (isset($_POST['updateemployee'])) {
  $name = $_POST['fullname'];
  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $department = $_POST['department'];
  $doj = $_POST['doj'];
  $dob = $_POST['dob'];

  $sql_update = "UPDATE `employee` SET `emp_name` = '$name', `emp_username` = '$username', `emp_phone` = '$phone', `emp_email` = '$email', `emp_address` = '$address', `emp_city` = '$city', `emp_state` = '$state', `emp_dept` = '$department', `emp_doj` = '$doj', `emp_dob` = '$dob' WHERE `emp_id` =" . $_GET['edit_id']; 
?>
  <script> 
    var r = confirm('Are you sure, you want to edit this record... !!!');
    if (r == true) {
      <?php mysqli_query($con,$sql_update); ?>
      alert('This record is successfully update.'); window.close();
    } 
    if (r == false) {
      alert('Its okk, Try again later Thank you....');
      // window.open('editEmployee.php','_self');
       window.close();
    }
  </script>
  <?php
}

 ?>