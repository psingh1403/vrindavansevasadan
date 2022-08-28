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
  <title>Add New Meal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- admin style sheet -->
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">

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
        <a class="nav-link text-dark" href="employee.php"><i class="far fa-building"></i> Employee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="room.php"><i class="fas fa-bed"></i> Room</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" id="active" href="food.php"><i class="fas fa-hamburger"></i> Food</a>
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

<div class="container" style="margin-bottom: 90px;">
  <div class="row justify-content-center">
      <div class="card" style="width: 600px; margin-top: 60px;">
        <div class="card-header text-center bg-primary">Add New Food</div>
        <div class="card-body">
          <form action="" method="post" id="addfoodform">
            <div class="form-group">
              <label for="Ftype" style="font-size: 22px;">Food Type</label>
              <select name="foodtyp" id="Foodtype" required style="font-size: 22px;" class="form-control">
                <option value selected >Select One</option>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
                <option value="fullmeal">Full Meal</option>
              </select>
            </div>
            <div class="form-group">
              <label for="itmname" style="font-size: 22px;">Item Name</label>
              <input type="text" name="itemname" id="itmname" required class="form-control"  style="height: 55px">
            </div>
            <div class="form-group">
              <label for="size" style="font-size: 22px;">Size</label>
              <input type="text" name="size" id="size" required class="form-control"  style="height: 55px">
            </div>
            <div class="form-group">
              <label for="price" style="font-size: 22px;">Price</label>
              <input type="text" name="price" id="price" required class="form-control"  style="height: 55px">
            </div>
            <div style="text-align: center;">
              <!-- <a href="#" id="addfood" class="btn btn-primary radius">ADD</a> -->
              <button type="submit" name="addfood" class="btn btn-primary radius">Add</button>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<!-- <script src="../assets/js/jquery.form.js"></script> -->

<script>
  $(document).ready(function(){
    $(function(){
      $('#addfoodform').validate({
        rules: {
          Foodtype: {
            required: true
          },
          size: {
            required: true
          },
          price: {
            required: true,
            number: true
          },
          itmname: {
            required: true
          }
        },
        messages: {
          Foodtype: {
            required: "Food type must be required ?"
          },
          size: {
            required: "Food Size must be required ?"
          },
          price: {
            required: "Food Price must be required ?",
            number: "Food price must be a number ?"
          },
          itmname: {
            required: "Food Name must be required ?"
          }
        },
      })
    });
  });
</script>

</body>
</html>

<?php 

if (isset($_POST['addfood'])) {
  include 'DataBaseConnection.php';
  $foodtype = $_POST['foodtyp'];
  $itemname = $_POST['itemname'];
  $size = $_POST['size'];
  $price = $_POST['price'];

  if ($foodtype == 'breakfast') {
    $quy1 = "SELECT `brakst_name`, `brakst_price` FROM `breakfast` WHERE `brakst_name` = '$itemname' AND `brakst_price` = '$price'";
    $run1 = mysqli_query($con,$quy1);
    if (mysqli_num_rows($run1)>=1) {
      echo "<script>alert('The food already exists in breakfast database, Try other item. Thank You...');</script>";
    }else{
      $sql1 = "INSERT INTO `breakfast`(`brakst_name`, `brakst_size`, `brakst_price`) VALUES ('$itemname', '$size', '$price')";
      $result1 = mysqli_query($con,$sql1);
      if ($result1 == true) {
        echo "<script>alert('New food has been successfully added into breakfast database.');window.close();</script>";
      }
    }
  }
  elseif ($foodtype == 'lunch') {
    $quy2 = "SELECT `lunch_name`, `lunch_price` FROM `lunch` WHERE `lunch_name` = '$itemname' AND `lunch_price` = '$price'";
    $run2 = mysqli_query($con,$quy2);
    if (mysqli_num_rows($run2)>=1) {
      echo "<script>alert('The food already exists in lunch database, Try other item. Thank You...');</script>";
    }else{
      $sql2 = "INSERT INTO `lunch`(`lunch_name`, `lunch_size`, `lunch_price`) VALUES ('$itemname', '$size', '$price')";
      $result2 = mysqli_query($con,$sql2);
      if ($result2 == true) {
        echo "<script>alert('New food has been successfully added into lunch database.');window.close();</script>";
      }
    }
  }
  elseif ($foodtype == 'dinner') {
    $quy3 = "SELECT `dinner_name`, `dinner_price` FROM `dinner` WHERE `dinner_name` = '$itemname' AND `dinner_price` = '$price'";
    $run3 = mysqli_query($con,$quy3);
    if (mysqli_num_rows($run3)>=1) {
      echo "<script>alert('The food already exists in dinner database, Try other item. Thank You...');</script>";
    }else{
      $sql3 = "INSERT INTO `dinner`(`dinner_name`, `dinner_size`, `dinner_price`) VALUES ('$itemname', '$size', '$price')";
      $result3 = mysqli_query($con,$sql3);
      if ($result3 == true) {
        echo "<script>alert('New food has been successfully added into dinner database.');window.close();</script>";
      }
    }
  }
  elseif ($foodtype == 'fullmeal') {
    $quy4 = "SELECT `fullmeal_name`, `fullmeal_price` FROM `fullmeal` WHERE `fullmeal_name` = '$itemname' AND `fullmeal_price` = '$price'";
    $run4 = mysqli_query($con,$quy4);
    if (mysqli_num_rows($run4)>=1) {
      echo "<script>alert('The food already exists in fullmeal database, Try other item. Thank You...');</script>";
    }else{
      $sql4 = "INSERT INTO `fullmeal`(`fullmeal_name`, `fullmeal_size`, `fullmeal_price`) VALUES ('$itemname', '$size', '$price')";
      $result4 = mysqli_query($con,$sql4);
      if ($result4 == true) {
        echo "<script>alert('New food has been successfully added into fullmeal database.');window.close();</script>";
      }
    }
  }
  else{
    echo "<script>alert('Error...');window.close();</script>";
  }
}

 ?>