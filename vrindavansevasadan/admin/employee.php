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
  <title>Employee page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- admin style sheet -->
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">

  <!-- bootbox cdn link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

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
        <a class="nav-link text-dark" id="active" href="#"><i class="far fa-building"></i> Employee</a>
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
        <a class="nav-link text-dark" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>
  </div>  
</nav><br>

<div class="container-fluid">
  <label style="font-size: 30px; margin-right: 90px;">Employee Details</label>
  <a href="addEmployee.php" class="btn btn-primary" target="_blank">Add New Employee</a>
  <?php 
  include 'DataBaseConnection.php';

  $sql = "SELECT * FROM `employee` ORDER BY emp_id DESC";
  $result = mysqli_query($con,$sql);

   ?>
  <div class="table-responsive">
    <table class="table table-striped" style="margin-top: 40px">
    <thead>
      <tr>
        <th>S. NO.</th>
        <th>Full Name</th>
        <th>User Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Department</th>
        <th>D.O.J</th>
        <th>D.O.B</th>
        <th>Edit / Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $count = 0;
      while ($row = mysqli_fetch_array($result)) {
        $count = $count + 1;
       ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['emp_name']; ?></td>
        <td><?php echo $row['emp_username']; ?></td>
        <td><?php echo $row['emp_phone']; ?></td>
        <td><?php echo $row['emp_email']; ?></td>
        <td width="240px;"><?php echo $row['emp_address']; ?></td>
        <td><?php echo $row['emp_city']; ?></td>
        <td><?php echo $row['emp_state']; ?></td>
        <td><?php echo $row['emp_dept']; ?></td>
        <td><?php echo $row['emp_doj']; ?></td>
        <td><?php echo $row['emp_dob']; ?></td>        
        <td><a class="btn btn-success mb-2" target="_blank" href="editEmployee.php?edit_id=<?php echo $row['emp_id']; ?>" style="font-size: 12px;"><i class="fas fa-user-edit"></i> Edit</a><br><a class="delete_employee btn btn-success" data-emp-id="<?php echo $row['emp_id']; ?>" href="javascript:void(0)" style="font-size: 12px;"><i class="fas fa-trash-alt"></i> DELETE</a></td>        
      </tr>
    <?php } ?>
    </tbody>
  </table>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('.delete_employee').click(function(e){
  e.preventDefault();
  var empid = $(this).attr('data-emp-id');
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
    url: 'deleteEmployee.php',
    data: 'empid='+empid
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


