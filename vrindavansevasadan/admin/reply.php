<?php 

session_start();
if (!isset($_SESSION['admin_id'])) {
  # code...
  header('location:index.php');
}

 ?>

<?php 
include 'DataBaseConnection.php';
if(isset($_POST['sendreply'])){
  $userid = $_POST['userid'];
  $subject = $_POST['subject'];
  $message = $_POST['messreply'];

  $sql1 = "INSERT INTO `replymessage`(`subject`, `reply`, `user_id`) VALUES ('$subject','$message',$userid)";
  $result1 = mysqli_query($con,$sql1);
  if ($result1) {
    echo "<script>alert('message send');window.close();</script>";
  }
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Message page</title>
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
        <a class="nav-link text-dark" href="user.php"><i class="fas fa-user-friends"></i> Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" id="active" href="#"><i class="fas fa-envelope"></i> User-Message</a>
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

<div class="container" style="margin-bottom: 90px;">
  <div class="row justify-content-center">
      <div class="card" style="width: 600px; margin-top: 60px;">
        <div class="card-header text-center bg-primary">Message Reply</div>
        <div class="card-body">
          <?php 
          if (isset($_GET['conte_id'])) {
              $sql = "SELECT * FROM `contectus` WHERE `con_id` =" .$_GET['conte_id'];
              $result = mysqli_query($con,$sql);
              while ($row = mysqli_fetch_array($result)) {
           ?>
          <form action="#" method="post">
            <div class="form-group">
              <input type="number" style="display: none;" name="userid" class="form-control" value="<?php echo $row['u_id']; ?>">
            </div>
            <div class="form-group">
              <label>Subject:</label>
              <input type="text" name="subject" class="form-control" value="<?php echo $row['con_user_subject']; ?>">
            </div>
            <div class="form-group">
              <label>Your Reply:</label>
              <textarea name="messreply" class="form-control" rows="8"></textarea>
            </div>
            <button name="sendreply" class="btn btn-primary">Send</button>
            <!-- <a href="#" name="sendreply" class="btn btn-primary">Send</a> -->
          </form>
        <?php }} ?>
        </div>
      </div>
  </div>
</div>
</body>
</html>


