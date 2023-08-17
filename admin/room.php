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
 <a  href="settings.php"><i class="fa fa-dashboard"></i>Rooms Status</a>
 </li>
<li>
<a  class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
</li>
 <li>
 <a  href="paymentdetails.php"><i class="fa fa-desktop"></i>Customer Payment Status</a>
 </li>
<li>
 <a  href="blockusers.php"><i class="fa fa-desktop"></i>Update Or Delete Staff Login</a>
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
 NEW ROOM <small></small>
</h1>
</div>
</div> 
                 
                                 
 <div class="row">
                
 <div class="col-md-5 col-sm-5">
<div class="panel panel-primary">
<div class="panel-heading">
ADD NEW ROOM
</div>
<div class="panel-body">
<form name="form" method="post">
<div class="form-group">
<label>Type Of Room *</label>
 <select name="troom"  class="form-control" required>
<option value selected ></option>
<option value="Superior Room">SUPERIOR ROOM</option>
<option value="Deluxe Room">DELUXE ROOM</option>
<option value="Guest House">GUEST HOUSE</option>
<option value="Single Room">SINGLE ROOM</option>
 </select>
 </div>
							  
<div class="form-group">
<label>Bedding Type</label>
<select name="bed" class="form-control" required>
<option value selected ></option>
<option value="Single">Single</option>
<option value="Double">Double</option>
<option value="Triple">Triple</option>
<option value="Quad">Quad</option>
<option value="Triple">None</option>
</select>
                                            
</div>
<input type="submit" name="add" value="Add New" class="btn btn-primary"> 
</form>
<?php
include('db.php');
if(isset($_POST['add']))
{
$room = $_POST['troom'];
$bed = $_POST['bed'];
$place = 'Free';
										
$check="SELECT * FROM room WHERE type = '$room' AND bedding = '$bed'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
echo "<script type='text/javascript'> alert('Room Already in Exists')</script>";
											
}
else
{
$sql ="INSERT INTO `room`( `type`, `bedding`,`place`) VALUES ('$room','$bed','$place')" ;
if(mysqli_query($con,$sql))
{
echo '<script>alert("New Room Added") </script>' ;
}
else
{
echo '<script>alert("Sorry ! Check The System") </script>' ;
}
}
}
							
?>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="panel panel-primary">
<div class="panel-heading">
ROOMS INFORMATION
</div>
<div class="panel-body">
<!-- Advanced Tables -->
<div class="panel panel-default">
<?php
$sql = "select * from room ";
$re = mysqli_query($con,$sql)
?>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
<th>Room ID</th>
<th>Room Type</th>
<th>Bedding</th>
                                            
</tr>
</thead>
 <tbody>
									
<?php
while($row= mysqli_fetch_array($re))
{
$id = $row['id'];
if($id % 2 == 0) 
{
echo "<tr class=odd gradeX>
<td>".$row['id']."</td>
<td>".$row['type']."</td>
<th>".$row['bedding']."</th>
</tr>";
}
else
{
echo"<tr class=even gradeC>
<td>".$row['id']."</td>
<td>".$row['type']."</td>
<th>".$row['bedding']."</th>
</tr>";
											
}
}
?>
</tbody>
</table>
</div>
                            
</div>
</div>
<!--End Advanced Tables -->
                    
                       
</div>
</div>
</div>
</div>
                    
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
    
    
   
</body>
</html>
