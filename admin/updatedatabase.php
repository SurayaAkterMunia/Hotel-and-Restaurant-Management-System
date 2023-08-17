
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

  <div class="background" style="padding-top: 105px;">
      <div class="row" style="padding-left: 290px;">
        <div class="column">
          <ul>
            
            <li><a href="addstaff.php">Add Staff</li>
            <li><a href="addfoodmenu.php">Add a New Food Item</li>
            <li><a href="room.php">Add Room</li>
            <li><a href="settings.php">Room Status</li>                  
           <li><a href="paymentdetails.php">Customer Payment Status</li>
            <li><a href="blockusers.php">Update or Delete Staff Login</li>

          </ul>
        </div>
        <div class="column">
          <ul>
              <li><a href="updatereview.php">Update or Delete Review</li>
            <li><a href="updateitem.php">Update or Delete Food Item</li>
            <li><a href="roomdel.php">Update or Delete Room</li>
            <li><a href="blockstaff.php">Update or Delete Staff</li>
            <li><a href="blockadmin.php">Update or Remove Admin</li>
            <li><a href="http://localhost/hotel/user/blockuser.php">Update or Delete Customer</li>  
            <hr class="mb-1">
          </ul>
        </div>

      <div class="logout_button" style="padding-left: 155px;">
        <ul style="width: 353px; padding-left: 110px"><li><a href="adregistration.php">Add New Admin</li></ul>
        <a href="adminpanel.php" class="btn btn-secondary " role="button" style="width: 242px; height: 50px; padding-top: 10px; margin-top:2px; margin-left:2px; margin-right:2px; margin-bottom: :2px; background-color: #747571; ">Back to Admin Panel</a>
        <a href="logout.php" class="btn btn-secondary " role="button" style="width: 242px; height: 50px; padding-top: 10px; margin-top:2px; margin-left:2px; margin-right:2px; margin-bottom: :2px; background-color: #AD0000; ">Log Out</a>
      </div>
      
  </div>

</div>

</body>
</html>