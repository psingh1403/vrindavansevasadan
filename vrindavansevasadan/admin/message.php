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

<div class="container">
  <label style="font-size: 30px; margin-right: 90px;">User Message</label>
  <?php 
  include 'DataBaseConnection.php';
  $sql = "SELECT * FROM `contectus` ORDER BY `con_id` DESC";
  $result = mysqli_query($con,$sql);
  
   ?>
  <table class="table table-responsive" style="margin-top: 40px">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Date</th>
        <th>Subject</th>
        <th>Show</th>
        <th>Reply</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $count = 0;
        while ($row = mysqli_fetch_array($result)) {
          $count = $count + 1;
          ?>
          
      <tr>
        <td><?php echo $count; ?></th>
        <td><?php echo $row['con_user_name'] ?></td>
        <td><?php echo $row['con_user_phone'] ?></td>
        <td style="width: 10px;"><?php echo $row['con_user_email'] ?></td>
        <td><?php echo $row['con_user_msg_date'] ?></td>
        <td><?php echo $row['con_user_subject'] ?></td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#readMyModal<?php echo $row['con_id'];?>">Show</button></td>
        <td><a href="reply.php?conte_id=<?php echo $row['con_id']; ?>&userid=<?php echo $row['u_id']; ?>" target="_blank" class="btn btn-primary">Reply</a></td></td>
      </tr>


      <div class="container">
        <div class="modal fade" id="readMyModal<?php echo $row['con_id'];?>" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Modal Header</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form action="#">
                  <div class="form-group">
                    <label>Name:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['con_user_name'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Phone:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['con_user_phone'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Email:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['con_user_email'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Date:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['con_user_msg_date'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Subject:</label>
                    <input disabled type="text" class="form-control" value="<?php echo $row['con_user_subject'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Message:</label>
                    <textarea disabled class="form-control" rows="8"><?php echo $row['con_user_message'] ?></textarea>
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


      <!-- <div class="container">
        <div class="modal fade" id="replyMyModal<?php //echo $row['con_id'];?>" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Modal Header</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form action="reply.php" method="post">
                  <div class="form-group">
                    <input type="hidden" name="userid" class="form-control" value="<?php //echo $row['u_id']; ?>">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="contid" class="form-control" value="<?php //echo $row['con_id']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Subject:</label>
                    <input disabled type="text" class="form-control" value="<?php //echo $row['con_user_subject'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Your Reply:</label>
                    <textarea name="messreply" class="form-control" rows="8"></textarea>
                  </div>
                  <a href="#" name="sendreply" class="btn btn-success">Send</a>
                </form>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>

          </div>
        </div>
      </div> -->

      <?php
        
      }

       ?>
    </tbody>
  </table>
</div>


<!-- <script type="text/javascript">
  function show_message(conShowId) {
    
  }
</script> -->


</body>
</html>


