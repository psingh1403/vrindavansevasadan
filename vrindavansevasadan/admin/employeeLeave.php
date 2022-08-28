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
  <title>Employee Leave Request</title>
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
        <a class="nav-link text-dark" href="message.php"><i class="fas fa-envelope"></i> User-Message</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" id="active" href="employeeLeave.php"><i class="fas fa-envelope"></i> Employee-Leave</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>
  </div>  
</nav><br>

<div class="container-fluid">
  <label style="font-size: 30px; margin-right: 90px;">Employee Leave Request Details</label>
  <?php 

  include 'DataBaseConnection.php';

  $sql = "SELECT `id`, `emp_id`, `emp_name`, `emp_phone`, `emp_email`, `start_date`, `end_date`, `emp_reason`, `emp_explain`, `approved` FROM `employeeleave` ORDER BY id DESC";
  $result = mysqli_query($con,$sql);

   ?>
  <table class="table table-responsive" style="margin-top: 40px">
    <thead>
      <tr>
        <th>S. no.</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Reason</th>
        <th>Show</th>
        <th>Accept</th>
        <!-- <th>Not Accept</th> -->
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
        <td><?php echo $row['emp_phone']; ?></td>
        <td><?php echo $row['emp_email']; ?></td>
        <td><?php echo $row['start_date']; ?></td>
        <td><?php echo $row['end_date']; ?></td>
        <td><?php echo $row['emp_reason']; ?></td>
        <!-- <td><?php //echo $row['emp_explain']; ?></td> -->
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#readMyModal<?php echo $row['id'];?>">Show</button></td>
        <td><?php if($row['approved'] == 'approved'){
                    echo "<button disabled class='btn btn-success'>Accept</button>";
                }else{ ?>
                  <a href='changepandingleavestatus.php?leaveid=<?php echo $row['id']; ?>' class='btn btn-danger'>panding</a>
                  <?php
                } ?></td>
      </tr>
      <div class="container">
        <div class="modal fade" id="readMyModal<?php echo $row['id'];?>" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Show Message</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form action="#">
                  <div class="form-group">
                    <label>Name:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['emp_name']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Phone:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['emp_phone']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Email:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['emp_email']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Start Date:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['start_date']; ?>">
                  </div>
                  <div class="form-group">
                    <label>End Date:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['end_date']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Reason:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['emp_reason']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Explain:</label>
                    <textarea disabled class="form-control" rows="8"><?php echo $row['emp_explain']; ?></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
      </div>
      <?php } ?>
    </tbody>
  </table>
</div>


</body>
</html>


