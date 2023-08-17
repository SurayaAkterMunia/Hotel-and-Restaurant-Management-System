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
                        <a  href="cancel_online_order.php"><i class="fa fa-dashboard"></i>Cancle Room Service </a>
                    </li>
					<li>
                        <a href="cancleroombook.php"><i class="fa fa-bar-chart-o"></i> 
                    Cancle Room Booking</a>
                    </li>
                    <li>
                        <a  href="home.php"><i class="fa fa-bar-chart-o"></i> Room Booking Confarmation </a>
                    </li>
                    
                    <li>
                        <a  href="viewreview.php"><i class="fa fa-qrcode"></i>View Customer Review List</a>
                    </li>
                    <li>
                        <a href="viewfoodment.php"><i class="fa fa-qrcode"></i>View Food List</a>
                    </li>
                    <li>
                        <a  class="active-menu" href="viewcustomer.php"><i class="fa fa-qrcode"></i>View Customer List</a>
                    </li>
                    	<li>
                        <a  href="viewstaff.php"><i class="fa fa-qrcode"></i>View Staff List </a>
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
                           View Customer List <small> </small>
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
                                            
                                            <th>Porfile</th>
											<th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
											<th>Adress</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>    
									<?php
                $con = mysqli_connect("localhost","root","","hotel");
    
                $sql = "select * from user order by id";//ORDER BY id desc
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                
                            
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                        echo "<td>";
                                        ?>
                                            <img src="<?php echo 'img/' . $row['image'] ?>" width="100" height="110" alt='Profile pic' class="border border-dark img-thumbnail">
                                        <?php
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["name"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["email"];
                                        echo "</td>";
                                            echo "<td>";
                                     echo $row["contact"];
                                        echo "</td>";
                                            echo "<td>";
                                            echo $row["address"];
                                        echo "</td>";
                                            ?>
                                            <?php
                                    echo "</tr>";
                                }
                            echo "</table>";
                        echo "</div>";
                    echo "</div>";
                }
                else
                {
                    echo "There is no user yet.";
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
