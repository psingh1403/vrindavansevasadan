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
  <title>Food page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- bootbox cdn link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

  <!-- admin style sheet -->
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">

  <script src="https://kit.fontawesome.com/d86ae2f46d.js" crossorigin="anonymous"></script>
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
        <a class="nav-link text-dark" href="home.php"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="employee.php"><i class="far fa-building"></i> Employee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="room.php"><i class="fas fa-bed"></i> Room</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" id="active" href="#"><i class="fas fa-hamburger"></i> Food</a>
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
        <a class="nav-link text-dark" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>
  </div>  
</nav><br>

<div class="container">
  <label style="font-size: 30px; margin-right: 70px;">Food Details</label>
  <a href="addfood.php" target="_blank" class="btn btn-primary">Add New Item</a>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <h4 class="text-center" style="text-decoration: underline;margin-top: 25px;">Breakfast Table</h4>
      <?php 
      include 'DataBaseConnection.php';
      $sql1 = "SELECT * FROM `breakfast`";
      $result1 = mysqli_query($con,$sql1); ?> 
      <table class="table table-striped" style="margin-top: 40px">
        <thead>
          <tr>
            <th>S.No.</th>
            <th>Item Name</th>
            <th>Size</th>
            <th>Price</th>
            <th>Delete</th>
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
            <td><a class="delete_breakfast btn btn-success" data-breakfast-id="<?php echo $row['brakst_id']; ?>" href="javascript:void(0)" style="font-size: 12px;"><i class="fas fa-trash-alt"></i> DELETE</a></td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <h4 class="text-center" style="text-decoration: underline;margin-top: 25px;">Lunch Table</h4>
      <?php 
      $sql2 = "SELECT * FROM `lunch`";
      $result2 = mysqli_query($con,$sql2); ?> 
      <table class="table table-striped" style="margin-top: 40px">
        <thead>
          <tr>
            <th>S.No.</th>
            <th>Item Name</th>
            <th>Size</th>
            <th>Price</th>
            <th>Delete</th>
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
            <td><a class="delete_lunch btn btn-success" data-lunch-id="<?php echo $row['lunch_id']; ?>" href="javascript:void(0)" style="font-size: 12px;"><i class="fas fa-trash-alt"></i> DELETE</a></td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <h4 class="text-center" style="text-decoration: underline;margin-top: 25px;">Dinner Table</h4>
      <?php 
      $sql3 = "SELECT * FROM `dinner`";
      $result3 = mysqli_query($con,$sql3); ?> 
      <table class="table table-striped" style="margin-top: 40px">
        <thead>
          <tr>
            <th>S.No.</th>
            <th>Item Name</th>
            <th>Size</th>
            <th>Price</th>
            <th>Delete</th>
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
            <td><a class="delete_dinner btn btn-success" data-dinner-id="<?php echo $row['dinner_id']; ?>" href="javascript:void(0)" style="font-size: 12px;"><i class="fas fa-trash-alt"></i> DELETE</a></td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <h4 class="text-center" style="text-decoration: underline;margin-top: 25px;">Full Meal Table</h4>
      <?php 
      $sql4 = "SELECT * FROM `fullmeal`";
      $result4 = mysqli_query($con,$sql4); ?> 
      <table class="table table-striped" style="margin-top: 40px">
        <thead>
          <tr>
            <th>S.No.</th>
            <th>Item Name</th>
            <th>Size</th>
            <th>Price</th>
            <th>Delete</th>
          </tr>
        </thead>
        <?php
          $count4 = 0;
          if (mysqli_num_rows($result4) >= 1) {
          while ($row = mysqli_fetch_array($result4)) {
          $count4 = $count4 + 1;
          ?>
        <tbody>
          <tr>
            <td><?php echo $count4; ?></td>
            <td><?php echo $row['fullmeal_name']; ?></td>
            <td><?php echo $row['fullmeal_size']; ?></td>
            <td><?php echo $row['fullmeal_price']; ?> /RS</td>
            <td><a class="delete_fullmeal btn btn-success" data-fullmeal-id="<?php echo $row['fullmeal_id']; ?>" href="javascript:void(0)" style="font-size: 12px;"><i class="fas fa-trash-alt"></i> DELETE</a></td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('.delete_breakfast').click(function(e){
  e.preventDefault();
  var breakfastid = $(this).attr('data-breakfast-id');
  var parent = $(this).parent("td").parent("tr");
  bootbox.dialog({
    message: "Are you sure you want to Delete this record ?",
    title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
    buttons: {
      success: {
      label: "No",
      className: "btn-success",
      callback: function() {
      $('.bootbox').modal('hide');
    }
    },
    danger: {
    label: "Delete!",
    className: "btn-danger",
    callback: function() {
    $.ajax({
    type: 'POST',
    url: 'deletefoodbreakfast.php',
    data: 'breakfastid='+breakfastid
    })
    .done(function(response){
    bootbox.alert(response);
    parent.fadeOut('slow');
    })
    .fail(function(){
    bootbox.alert('Error....');
    })
    }
    }
    }
    });
  });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $('.delete_lunch').click(function(e){
  e.preventDefault();
  var lunchid = $(this).attr('data-lunch-id');
  var parent = $(this).parent("td").parent("tr");
  bootbox.dialog({
    message: "Are you sure you want to Delete this record ?",
    title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
    buttons: {
      success: {
      label: "No",
      className: "btn-success",
      callback: function() {
      $('.bootbox').modal('hide');
    }
    },
    danger: {
    label: "Delete!",
    className: "btn-danger",
    callback: function() {
    $.ajax({
    type: 'POST',
    url: 'deletefoodlunch.php',
    data: 'lunchid='+lunchid
    })
    .done(function(response){
    bootbox.alert(response);
    parent.fadeOut('slow');
    })
    .fail(function(){
    bootbox.alert('Error....');
    })
    }
    }
    }
    });
  });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $('.delete_dinner').click(function(e){
  e.preventDefault();
  var dinnerid = $(this).attr('data-dinner-id');
  var parent = $(this).parent("td").parent("tr");
  bootbox.dialog({
    message: "Are you sure you want to Delete this record ?",
    title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
    buttons: {
      success: {
      label: "No",
      className: "btn-success",
      callback: function() {
      $('.bootbox').modal('hide');
    }
    },
    danger: {
    label: "Delete!",
    className: "btn-danger",
    callback: function() {
    $.ajax({
    type: 'POST',
    url: 'deletefooddinner.php',
    data: 'dinnerid='+dinnerid
    })
    .done(function(response){
    bootbox.alert(response);
    parent.fadeOut('slow');
    })
    .fail(function(){
    bootbox.alert('Error....');
    })
    }
    }
    }
    });
  });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $('.delete_fullmeal').click(function(e){
  e.preventDefault();
  var fullmealid = $(this).attr('data-fullmeal-id');
  var parent = $(this).parent("td").parent("tr");
  bootbox.dialog({
    message: "Are you sure you want to Delete this record ?",
    title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
    buttons: {
      success: {
      label: "No",
      className: "btn-success",
      callback: function() {
      $('.bootbox').modal('hide');
    }
    },
    danger: {
    label: "Delete!",
    className: "btn-danger",
    callback: function() {
    $.ajax({
    type: 'POST',
    url: 'deletefoodfullmeal.php',
    data: 'fullmealid='+fullmealid
    })
    .done(function(response){
    bootbox.alert(response);
    parent.fadeOut('slow');
    })
    .fail(function(){
    bootbox.alert('Error....');
    })
    }
    }
    }
    });
  });
});
</script>
</body>
</html>


