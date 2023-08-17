<!DOCTYPE html>
<html>
<head>
     
    <title>Royal Hotel</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="settings.php"><i class="fa fa-dashboard"></i>Room Status</a>
                    </li>
					<li>
                        <a  href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a  href="paymentdetails.php"><i class="fa fa-desktop"></i>Customer Payment Status</a>
                    </li>
                     <li>
                        <a   href="blockusers.php"><i class="fa fa-desktop"></i>Update or Delete Staff Login</a>
                    </li>
                      <li>
                        <a  href="updatereview.php"><i class="fa fa-desktop"></i>Update Or Delete Review</a>
                    </li>
                      
                      <li>
                        <a  href="updateitem.php"><i class="fa fa-pencil-square-o"></i> Update Food Item</a>
                    </li>
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-pencil-square-o"></i>Update or Delete Room</a>
                    </li>
					<li>
                        <a  href="blockstaff.php"><i class="fa fa-plus-circle"></i>Update or Delete Staff </a>
                    </li>
                    <li>
                        <a   href="blockadmin.php"><i class="fa fa-pencil-square-o"></i> Update or Delete Admin</a>
                    </li>
                    <li>
                        <a   href="http://localhost/hotel/user/blockuser.php"><i class="fa fa-pencil-square-o"></i> Update or Delete User</a>
                    </li>
                     <li>
                        <a   href="updatedatabase.php"><i class="fa fa-pencil-square-o"></i>Back TO Update Database</a>
                    </li>
                </ul>   
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
<div id="page-wrapper" >
    <div id="page-inner">
     <div class="row">
    <div class="col-md-12">
    <h1 class="page-header">
    Available <small> Rooms</small>
    </h1>
    </div>
    </div> 
   <?php
        include ('db.php');
        $sql = "select * from room";
        $re = mysqli_query($con,$sql)
				?>
                <div class="row">
				<?php
while($row= mysqli_fetch_array($re))
{
$id = $row['type'];
if($id == "Superior Room") 
{
echo"<div class='col-md-3 col-sm-12 col-xs-12'>
<div class='panel panel-primary text-center no-boder bg-color-blue'>
<div class='panel-body'>
<i class='fa fa-users fa-5x'></i>
<h3>".$row['bedding']."</h3>
</div>
<div class='panel-footer back-footer-blue'>
".$row['type']."
</div>
</div>
</div>";
}
else if ($id == "Deluxe Room")
{
echo"<div class='col-md-3 col-sm-12 col-xs-12'>
<div class='panel panel-primary text-center no-boder bg-color-green'>
<div class='panel-body'>
<i class='fa fa-users fa-5x'></i>
<h3>".$row['bedding']."</h3>
</div>
<div class='panel-footer back-footer-green'>
".$row['type']."
</div>
</div>
</div>";
}
else if($id =="Guest House")
{
echo"<div class='col-md-3 col-sm-12 col-xs-12'>
<div class='panel panel-primary text-center no-boder bg-color-brown'>
<div class='panel-body'>
<i class='fa fa-users fa-5x'></i>
<h3>".$row['bedding']."</h3>
</div>
<div class='panel-footer back-footer-brown'>
".$row['type']."
</div>
</div>
</div>";
}
else if($id =="Single Room")
{
echo"<div class='col-md-3 col-sm-12 col-xs-12'>
<div class='panel panel-primary text-center no-boder bg-color-red'>
<div class='panel-body'>
<i class='fa fa-users fa-5x'></i>
<h3>".$row['bedding']."</h3>
</div>
<div class='panel-footer back-footer-red'>
".$row['type']."

</div>
</div>
</div>";
											
											}
										}
									?>
                    
                </div>
                <!-- /. ROW  -->
                
                                
                  
            
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     
   
</body>
</html>
