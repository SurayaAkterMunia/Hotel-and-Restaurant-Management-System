
<?php
    include("connect.php");
    
   include('function.php');
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"item_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'item_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'item_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="wcart_irl.php"</script>';
            }else{
                echo '<script>alert("Item is already added to Cart")</script>';
                echo '<script>window.location="wcart_irl.php"</script>';
            }
        }else{
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["item_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Item has been removed!")</script>';
                    echo '<script>window.location="wcart_irl.php"</script>';
                }
            }
        }
    }

?>

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
                        <a class="active-menu" href="wcart_irl.php"><i class="fa fa-dashboard"></i>Take Order</a>
                    </li>
                  
					<li>
                        <a href="http://localhost/hotel/staff/check_irl_order.php"><i class="fa fa-bar-chart-o"></i>Check Order</a>
                    </li>  
                    <li>
                        <a href="http://localhost/hotel/staff/cacle_irl_order.php"><i class="fa fa-bar-chart-o"></i>Cancle Order</a>
                    </li> 
                    <li>
                        <a href="waiterfoodmenu.php"><i class="fa fa-bar-chart-o"></i>Food Menu</a>
                    </li> 
              
                    <li>
                        <a href="http://localhost/hotel/staff/login.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Order Menu
                        </h1>
                    </div>
                </div>
              <div class="background ">
        
        <div class="fooditems" id="fooditems">
            <?php
                $query = "SELECT * FROM item WHERE itype='food' ORDER BY pname ASC ";
                $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_array($result)) {

                        ?>
                        <div style="float: left; width: 25%;">

                            <form method="post" action="wcart_irl.php?action=add&id=<?php echo $row["id"]; ?>">

                                <div class="item2">
                                    <div class="foodpic">
                                        <img src="<?php echo 'imgs/' . $row['image'] ?>" class="img-responsive">
                                    </div>
                                    <div class="description">
                                        <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                    </div>
                                    <div class="pricetag">
                                        <h5 class="text-danger">Tk.<?php echo $row["price"]; ?></h5>
                                    </div>
                                    <hr class="mb-1">
                                    <div class="cartbuttons">
                                        <input type="number" name="quantity" class="form-control" value="1" min="1" max="10">
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                        <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                           value="Add to Cart">
                                    </div>                          
                                </div>
                            </form>
                        </div>
                        
                        <?php
                    }
                    ?>
                    <?php
                }
            ?>
        </div>
        <div class="beverage" id="beverage">
            <?php
                $query = "SELECT * FROM item WHERE itype='beverage' ORDER BY pname ASC ";
                $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_array($result)) {

                        ?>
                        <div style="float: left; width: 25%;">

                            <form method="post" action="wcart_irl.php?action=add&id=<?php echo $row["id"]; ?>">

                                <div class="item2">
                                    <div class="foodpic">
                                        <img src="<?php echo 'imgs/' . $row['image'] ?>" class="img-responsive">
                                    </div>
                                    <div class="description">
                                        <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                    </div>
                                    <div class="pricetag">
                                        <h5 class="text-danger">Tk.<?php echo $row["price"]; ?></h5>
                                    </div>
                                    <hr class="mb-1">
                                    <div class="cartbuttons">
                                    <input type="number" name="quantity" class="form-control" value="1" min="1" max="20">
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                    <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                                    </div>                          
                                </div>
                            </form>
                        </div>
                        
                        <?php
                    }
                    ?>
                    <?php
                }
            ?>
        </div>
        
        <div style="clear: both"></div>

        <div class="bilbanner" id="billdetails"><h3>Bill Details</h3></div>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Item Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["item_price"]; ?></td>
                            <td>
                                $ <?php echo $value["item_quantity"] * $value["item_price"]; ?></td>
                            <td><a href="wCart_irl.php?action=delete&id=<?php echo $value["item_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                            

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["item_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>

        <div class="checkout">
            <form method="post" action = "wcart_irl.php">
                <label for="name" style="width:100%; text-align: left;"><b>Customer Name</b></label>
                <input class="form-control" id="name" type="text" name="name" style="width:50%; text-align: left;" required>
                <label for="tablenumber" style="width:100%; text-align: left;"><b>Table Number</b></label>
              <input class="form-control" id="tablenumber"  type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="tablenumber" style="width:10%; text-align: left;" required>  <br>
                <input type="submit" name="confirm" style="margin-top: 10px; margin-bottom: 20px; float: left;" class="btn btn-success" value="Confirm Order">
                <input type="button" name="cancel" style="margin-top: 10px; margin-left: 2px; margin-bottom: 20px; float: left;" class="btn btn-secondary" value="Cancel" onClick="window.location.href='clear_cart.php';">

                <!---<a style="float: left; margin-left: 3px; margin-top: 10px;" href="http://localhost/projects/rms/customer.php" class="btn btn-secondary " role="button" aria-pressed="true" >Cancel Order</a>--->
                 
            </form>
        </div>

    </div>




<?php 

                if (isset($_POST["confirm"])){

                    $name = $_POST["name"];
                     $tablenumber = $_POST["tablenumber"];
                    $time = date("d-m-Y h:i:sa");

                   $query = "INSERT INTO irl_order (name,tableno, bill, subtime)
                              VALUES ('$name','$tablenumber', '$total', '$time')";                  
                    $result = mysqli_query($conn, $query);
                    $order_no = $conn->insert_id;

                    if($result) {

                        foreach ($_SESSION["cart"] as $key => $value) {
                            

                            $item_name = $value["item_name"];
                            $quantity = $value["item_quantity"];
                            $price = $value["item_price"]; 
                            $itotal = $value["item_quantity"] * $value["item_price"];

                            $query2 = "INSERT INTO irl_order_item (order_no, item_name, quantity, unit_price, total_price)
                              VALUES ('$order_no', '$item_name', '$quantity', '$price', '$itotal')";

                            $result2 = mysqli_query($conn, $query2);

                            if($result2)
                            {
                                echo '<script>alert("Order added!")</script>';
                                echo '<script>window.location="wclear_cart.php"</script>';
                            }
                            else
                            {
                                echo '<script>alert("There were errors in processing the order!")</script>';
                            }
                            
                        }
                    }
                }
?>

</body>

</html>





