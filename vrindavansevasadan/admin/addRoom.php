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
  <title>Add New Room</title>
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
        <a class="nav-link text-dark" id="active" href="room.php"><i class="fas fa-bed"></i> Room</a>
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

<div class="container" style="margin-bottom: 90px;">
  <div class="row justify-content-center">
      <div class="card" style="width: 600px; margin-top: 60px;">
        <div class="card-header text-center bg-primary">Add New Room</div>
        <div class="card-body">
          <form action="" method="post" id="addroom" enctype="multipart/form-data">
            <!-- <div class="form-group">
              <label for="Rno" style="font-size: 22px;">Room Number</label>
              <input type="text" name="roomnumber" id="Rno" required="required" class="form-control"  style="height: 55px">
            </div> -->
            <div class="form-group">
              <label for="Rtype" style="font-size: 22px;">Type</label>
              <select name="roomtyp" id="Rtype" required style="font-size: 22px;" class="form-control">
                <option value selected >Select One</option>
                <option value="Superior Room">SUPERIOR ROOM</option>
                <option value="Deluxe Room">DELUXE ROOM</option>
                <option value="Guest House">GUEST HOUSE</option>
                <option value="Single Room">SINGLE ROOM</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bed" style="font-size: 22px;">Bedding</label>
              <select name="bedding" id="bed" required style="font-size: 22px;" class="form-control">
                <option value selected>Select One</option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Triple">Triple</option>
                <option value="Quad">Quad</option>
                <option value="Queen">Queen</option>
                <option value="King">King</option>
              </select>
            </div>
            <div class="form-group">
              <label for="Rsiz" style="font-size: 22px;">Size</label>
              <select name="roomsize" id="Rsiz" required style="font-size: 22px;" class="form-control">
                <option>Select One</option>
                <option value="22 X 28 (LARGE)">22 X 28 (LARGE)</option>
                <option value="16 X 20 (MEDIUM)">16 X 20 (MEDIUM)</option>
                <option value="12 X 18 (SMALL)">12 X 18 (SMALL)</option>
                <option value="10 X 12 (VERY SMALL)">10 X 12 (VERY SMALL)</option>
              </select>
            </div>
            <div class="form-group">
              <label for="Rext" style="font-size: 22px;">Extra</label>
              <select name="roomextra" id="Rext" required style="font-size: 22px;" class="form-control">
                <option>Select One</option>
                <option value="T.V">T.V</option>
                <option value="T.V + Wifi">T.V + Wifi</option>
                <option value="T.V + Wifi + Swimming Pool">T.V + Wifi + Swimming Pool</option>
              </select>
            </div>
            <div class="form-group">
              <label for="Rabout" style="font-size: 22px;">Abour Room</label>
              <textarea class="form-control" id="Rabout" required name="aboutroom" style="min-height:160px; max-height: 190px;"></textarea>
            </div>
            <div class="form-group">
              <label for="price" style="font-size: 22px;">Price</label>
              <input type="text" name="price" id="price" required class="form-control"  style="height: 55px">
            </div>
            <div class="form-group">
              <label for="img" style="font-size: 22px;">Image</label>
              <input type="file" name="image" id="img" required class="form-control"  style="height: 55px">
            </div>
            <div style="text-align: center;">
              <button name="addroom" class="btn btn-primary radius">ADD Room</button>
              <!-- <a href="#" name="addroom" class="btn btn-primary radius">ADD Room</a> -->
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
</body>
</html>

<?php 

if (isset($_POST['addroom'])) {  
  include 'DataBaseConnection.php';
  $imagename = $_FILES['image']['name'];
  $tempimg = $_FILES['image']['tmp_name'];
  move_uploaded_file($tempimg, "roomimg/$imagename");
  $Rnumber = $_POST['roomnumber'];
  $Rtype = $_POST['roomtyp'];
  $Rbed = $_POST['bedding'];
  $Rsize = $_POST['roomsize'];
  $Rextra = $_POST['roomextra'];
  $Rabout = $_POST['aboutroom'];
  $Rprice = $_POST['price'];

  $sql = "SELECT `room_num`, `room_type`, `room_bed`, `room_size`, `room_price` FROM `room` WHERE `room_type` = '$Rtype' AND `room_bed` = '$Rbed' AND `room_size` = '$Rsize'";
  $result = mysqli_query($con,$sql);

  if (mysqli_num_rows($result)>=1) {
    echo "<script>alert('Room is already available...');window.open('addRoom.php','_self');</script>";
  }else{
    $sql1 = "INSERT INTO `room`(`room_num`, `room_type`, `room_bed`, `room_size`, `room_extra`, `room_about`, `room_price`, `room_img`) VALUES ('$Rnumber', '$Rtype', '$Rbed', '$Rsize', '$Rextra', '$Rabout', '$Rprice', '$imagename')";

    mysqli_query($con,$sql1);
    echo "<script>alert('room is add successfully...');window.close();</script>";
  }  
}

 ?>
