<?php 
  include('db.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" type="text/css" href="style_admin.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>

<body>

  <div class="header">
      <h1> Royal Hotel Admin Panel</h1>
  </div>

  <div class="pagetitle">
  </div>

  <div class="background">
      <div class="row">
        <div class="column">
          <ul>
            <li><a href="cancel_online_order.php">Cancel Room Service </li>
            <li><a href="cancleroombook.php">Cancle Room Booking</li>
            <li><a href="home.php">Room Book Conformation</li>
            <li><a href="viewreview.php">View Customer Review</li>
          </ul>
        </div>
        <div class="column">
          <ul>
            <li><a href="updatedatabase.php">Update Database</li>
            <li><a href="viewfoodment.php">View Food List</li>
            <li><a href="http://localhost/hotel/user/viewcustomer.php">View Customer List</li>
            <li><a href="viewstaff.php">View Staff List</li>
            <hr class="mb-1">
          </ul>
        </div>
      
  </div>
  <div class="logout_button" style="padding-left: 155px;">
        <a href="adindex.php" class="btn btn-secondary " role="button" style="width: 242px; height: 50px; padding-top: 10px; margin-top:2px; margin-left:2px; margin-right:2px; margin-bottom: :2px; background-color: #747571; ">Back to Admin Profile</a>
        <a href="logout.php" class="btn btn-secondary " role="button" style="width: 242px; height: 50px; padding-top: 10px; margin-top:2px; margin-left:2px; margin-right:2px; margin-bottom: :2px; background-color: #AD0000; ">Log Out</a>
      </div>
</div>

</body>
</html>