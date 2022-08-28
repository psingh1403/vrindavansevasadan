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
  <title>Users page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
        <a class="nav-link text-dark" href="food.php"><i class="fas fa-hamburger"></i> Food</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" id="active" href="#"><i class="fas fa-user-friends"></i> Users</a>
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

<div class="container">
  <label style="font-size: 30px; margin-right: 90px;">User Details</label>
  <?php 

  include 'DataBaseConnection.php';
  $sql = "SELECT * FROM `login` ORDER BY 'u_id' DESC";
  $result = mysqli_query($con,$sql); ?>
  
   
  <table class="table table-responsive" style="margin-top: 40px">
    <thead>
      <tr>
        <th>S. No</th>
        <th>Name</th>
        <th>UserName</th>
        <th>Phone</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $count = 0;
      if (mysqli_num_rows($result)>0) {
        while ($row = mysqli_fetch_assoc($result)) { 
            $count = $count + 1;
          ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['email']; ?></td>
      </tr>
      <?php } }?>
    </tbody>
  </table>
  
</div>
</body>
</html>


