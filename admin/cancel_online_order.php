<?php 
 include("connect.php");

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
                        <a class="active-menu" href="cancelreservation.php"><i class="fa fa-dashboard"></i>Cancle Room Service </a>
                    </li>
					<li>
                        <a href="cancleroombook.php"><i class="fa fa-bar-chart-o"></i> 
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
                           Cancel Room Service <small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
			<?php 
			$query = "SELECT * FROM online_order WHERE delivered = 0  ORDER BY order_no";
            $result = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_assoc($result)) {
            	$order_no = $row["order_no"]; echo "<br>";
					?>
				<hr class="mb-1">
				<form method="post" action="cancel_online_order.php">
					<h6><b>Order No:</b></h6> 
					<input class="form-control" id="order_num" type="text" name="order_num" value="<?php echo $order_no; ?>" style="width: 50px;" readonly>
	            	<h5><b>Customer name: <?php echo $row["name"]; echo "<br>"; ?></b></h5>
	            	<b>Room Type: <?php echo $row["type"]; echo "<br>"; ?></b>
                    <b>Bedding Type : <?php echo $row["bed"]; echo "<br>"; ?></b>
	            	<b>Submission time: <?php echo $row["subtime"]; echo "<br>"; ?> </b>
	            	<br>
                    
					<?php
					echo "<table border='1'>";

					$query2 = "SELECT item_name, quantity, unit_price, total_price FROM online_order_item WHERE order_no = '$order_no'";
	            	$result2 = mysqli_query($conn,$query2);
	            	echo "<td>Item Name</td> <td>Quantity</td> <td>Unit Price</td> <td>Total Price</td>";
					while ($row2 = mysqli_fetch_assoc($result2)) {
						echo "<tr>";
						foreach ($row2 as $field2 => $value2) {
							echo "<td>" . $value2 . "</td>";
						}
					}
					echo "</table>"; ?>
					<br>
					<b>Total Bill: <?php echo $row["bill"]; echo "<br>"; ?></b>
					<br>
					<input class="btn btn-danger" type="submit" id="done" name="done" value="Cancel Order">
					<hr class="mb-1">
				</form>
				<?php
			}
				

		 ?>
		</div>
		 <div class="deletenav" style="position: fixed; width: 100%px; float: left; z-index: 1; top: 0; right: 0; padding-top: 150px; padding-right: 250px;">
			<form method="post" action="cancel_online_order.php">
				<!---<div class="container">--->
					<div class="">
						<div class="row">
							<div class="">
								<p>Input order no. to cancel an order.</p>
								<hr class="mb-1">
								<label for="id"><b>ID No.</b></label>
								<input class="form-control" id="order_num"  type="text" name="order_num" required>
								<hr class="mb-1">

								<div class="buttons">
									<button type="submit" class="btn btn-danger" name="done">Cancel Order</button>
									<a href="adminpanel.php" class="btn btn-secondary " role="button" aria-pressed="true">Go Back</a>
								</div>
							</div>
						</div>
					</div>
			</form>
		</div>
	</div>

<?php

	
	if(isset($_POST["done"])){
		$order_num = $_POST["order_num"];
		$querry0 =  "DELETE FROM online_order WHERE  order_no = $order_num";

		if(mysqli_query($conn, $querry0)){
              echo "<script type='text/javascript'> alert('Room Sevice is Canceled')</script>";
			echo '<script>window.location="cancel_online_order.php"</script>';
		}
	}


	

?>
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
