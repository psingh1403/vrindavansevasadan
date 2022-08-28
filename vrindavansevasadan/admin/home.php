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
  <title>Bookings</title>
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
        <a class="nav-link text-dark" id="active" href="#"><i class="fas fa-home"></i> Home</a>
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
$sql = "SELECT * FROM `booking` ORDER BY `book_id` DESC";
$run = mysqli_query($con,$sql);
 ?>
<div class="container-fluid">
  <label style="font-size: 30px; margin-right: 90px;">Room Booking Details</label>
  <table class="table table-striped table-responsive" style="margin-top: 40px">
    <thead>
      <tr>
        <th>S no.</th>
        <th>Order id</th>
        <th>User</th>
        <th>Room</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Adhar</th>
        <th>Cin</th>
        <th>Cout</th>
        <th>NoPerson</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Print</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $count = 0;
      if (mysqli_num_rows($run)>0) {
        while($row = mysqli_fetch_array($run)){
          $count = $count + 1;
       ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['order_id']; ?></td>
        <td><?php echo $row['cust_id']; ?></td>
        <td><?php echo $row['room']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['adhar']; ?></td>
        <td><?php echo $row['checkin']; ?></td>
        <td><?php echo $row['checkout']; ?></td>
        <td><?php echo $row['noperson']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php if($row['status'] == 'successful'){
                    echo "<button disabled class='btn btn-success'>Payed</button>";
                }else{ ?>
                  <a href='changepandingstatus.php?ordid=<?php echo $row['book_id']; ?>' class='btn btn-danger'>panding</a>
                  <?php
                } ?></td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#readMyModal<?php echo $row['book_id'];?>">Print</button></td>
      </tr>
      <div class="container">
        <div class="modal fade" id="readMyModal<?php echo $row['book_id'];?>" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title text-center">Vrindavan Seva Sadan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <h2 style="text-align: center; color: blue;">WELCOME</h2>
                <p style="justify-content: center;">Vrindavan seva sadan is offering accommodation in Vrindāvan. Among the facilities at this property are a 24-hour front desk and room service, along with free WiFi throughout the property. Private parking can be arranged at an extra charge.The rooms are fitted with air conditioning, a flat-screen TV with satellite channels, a kettle, a shower, free toiletries and a wardrobe. At the hotel rooms come with a private bathroom.</p>
                <h2 style="text-align: center; color: blue;text-transform: uppercase;">booking details</h2>
                <div class="container" style="width: 50%; margin-top: 40px;">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold;">ORDER ID</div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><?php echo $row['order_id']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold;">CUSTOMER NAME</div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><?php echo $row['cust_id']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold;">ROOM</div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><?php echo $row['room']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold;">PHONE</div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><?php echo $row['phone']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold;">CHECK IN DATE</div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><?php echo $row['checkin']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold;">CHECK OUT DATE</div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><?php echo $row['checkout']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold;">TOTAL AMOUNT</div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><?php echo $row['amount']; ?></div>
                  </div>
                </div>
                <div class="container" style="margin-top: 140px;">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold; text-align: center;">Hotel MANAGEMENT SIGN</div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold;text-align: center;">CUSTOMER SIGN</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold; text-align: center; margin-top: 35px;">______________________________</div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="font-weight: bold;text-align: center; margin-top: 35px;">_____________________</div>
                  </div>
                  <div class="row text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 50px;"><input class="btn btn-success btn-lg" type="button" name="" value="Print"></div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
      </div>
    <?php }} ?>
    </tbody>
  </table>


</div>
</body>
</html>


