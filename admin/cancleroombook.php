<?php
session_start();

if(isset($_GET['del'])){
    $id = $_GET['del'];
    
    $con = mysqli_connect("localhost","root","","hotel");
    
    $sql = "Delete from roombook where stat= 'Not Conform' and id=$id ";
    
    $query = mysqli_query($con,$sql);
    
   if($query){
			echo '<script>alert("Room Booked Have Been Canceled!")</script>';
            echo '<script>window.location="cancleroombook.php"</script>';
		}else{
			echo '<script>alert("There is an error while deleting the data!")</script>';
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
                        <a href="cancel_online_order.php"><i class="fa fa-dashboard"></i>Cancle Room Service </a>
                    </li>
					<li>
                        <a class="active-menu" href="cancleroombook.php"><i class="fa fa-bar-chart-o"></i> 
                    Cancle Room Booking</a>
                    </li>
                    <li>
                        <a href="home.php"><i class="fa fa-bar-chart-o"></i> Room Booking Confarmation </a>
                    </li>
                     
                    <li>
                        <a   href="viewreview.php"><i class="fa fa-qrcode"></i>View Customer Review List</a>
                    </li>
                    <li>
                        <a  href="viewfoodment.php"><i class="fa fa-qrcode"></i>View Food List</a>
                    </li>
                    <li>
                        <a   href="http://localhost/hotel/user/viewcustomer.php"><i class="fa fa-qrcode"></i>View Customer List</a>
                    </li>
                    	<li>
                        <a   href="viewstaff.php"><i class="fa fa-qrcode"></i>View Staff List </a>
                    </li>
                    <li>
                        <a  href="adminpanel.php"><i class="fa fa-qrcode"></i>Back To Admin Panle </a>
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
                          Cancle Room Booikng<small> </small>
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
                                            <th>Name</th>
											<th>Room type</th>
                                            <th>Bed Type</th>
                                            <th>Check in</th>
											<th>Check out</th>
											<th>No of Room</th>
											<th>Meal Type</th>
                                            <th>No of Days</th>
                                            <th>Status</th>
											<th>Cancalation</th>
                                        </tr>
                                    </thead>
                                    <tbody>       
								<?php
                $con = mysqli_connect("localhost","root","","hotel");
    
                $sql = "select * from roombook where stat='Not Conform' ";//ORDER BY id desc
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                
                            
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo"<tr class='gradeC'>
													<td>".$row['Title']." ".$row['FName']." ".$row['LName']."</td>
													<td>".$row['TRoom']."</td>
													<td>".$row['Bed']."</td>
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													<td>".$row['NRoom']."</td>
													<td>".$row['Meal']."</td>
													<td>".$row['nodays']."</td>
													<td>".$row['stat']."</td>
                                        <td>";
                                            ?>
                                            <a href="cancleroombook.php?del=<?php echo $row["id"];?>" style="text-align: right; font-family: cursive" class="btn text-danger">Cancle</a>
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
                    echo "There is no booking yet.";
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
        
               
    
             <!-- /. PAGE INNER  -->
            </div>
        
    
   
</body>
</html>
