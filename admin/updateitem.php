<?php
session_start();

if(isset($_GET['del'])){
    $id = $_GET['del'];
    
    $con = mysqli_connect("localhost","root","","hotel");
    
    $sql = "Delete from item where id=$id";
    
    $query = mysqli_query($con,$sql);
    
    if($query){
        echo "<script type='text/javascript'> alert('Your Item Is Removed.')</script>";
        echo '<script>window.location="updateitem.php"</script>';
    }
    else{
        echo mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
      
    <title>ROYAL HOTEL HOTEL</title>
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
                        <a  href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a  href="paymentdetails.php"><i class="fa fa-desktop"></i>Customer Payment Status</a>
                    </li>
                    <li>
                        <a  href="blockusers.php"><i class="fa fa-desktop"></i>
                        Update or Delete Staff Login</a>
                    </li>
                      <li>
                        <a  href="updatereview.php"><i class="fa fa-desktop"></i>Update Or Delete Review</a>
                    </li>
                      
                      <li>
                        <a  class="active-menu" href="updateitem.php"><i class="fa fa-pencil-square-o"></i> Update Food Item</a>
                    </li>
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-pencil-square-o"></i>Update or Delete Room</a>
                    </li>
					<li>
                        <a href="blockstaff.php"><i class="fa fa-plus-circle"></i>Update or Delete Staff </a>
                    </li>
                    <li>
                        <a   href="blockadmin.php"><i class="fa fa-pencil-square-o"></i> Update or Delete Admin</a>
                    </li>
                    <li>
                        <a  href="http://localhost/hotel/user/blockuser.php"><i class="fa fa-pencil-square-o"></i> Update or Delete User</a>
                    </li>
                    <li>
                        <a  href="adminpanel.php"><i class="fa fa-pencil-square-o"></i> Back To Admin Panel</a>
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
                           Update Food Item <small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
											<th>Name</th>
                                            <th>Price</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
								<?php
                $con = mysqli_connect("localhost","root","","hotel");
    
                $sql = "select * from item order by id";//ORDER BY id desc
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                
                            
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                        echo "<td>";
                                        ?>
                                            <img src="<?php echo 'imgs/' . $row['image'] ?>" width="100" height="110" alt='Profile pic' class="border border-dark img-thumbnail">
                                        <?php
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["pname"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["price"];
                                        echo "</td>";
                                    echo "<td>";
                                            echo $row["itype"];
                                        echo "</td>";
                                        echo "<td>";
                                            ?>
                                            <a href="updateitem.php?del=<?php echo $row["id"];?>" style="text-align: right; font-family: cursive" class="btn text-danger">Delete</a>
                                            <?php
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            echo "</table>";
                        echo "</div>";
                    echo "</div>";
                }
                else
                {
                    echo "There is no admin yet.";
                }
                mysqli_close($con);
            ?>                     
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
            
    
   
</body>
</html>
