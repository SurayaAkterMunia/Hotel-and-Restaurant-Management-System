<?php
    include("connect.php");
   include('functions.php');
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
                echo '<script>window.location="cart_irl.php"</script>';
            }else{
                echo '<script>alert("Item is already added to Cart")</script>';
                echo '<script>window.location="cart_irl.php"</script>';
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
                    echo '<script>window.location="Cart_irl.php"</script>';
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Room Service</title>
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
                        <a href="http://localhost/hotel/user/reservation.php"><i class="fa fa-dashboard"></i>Room Booking</a>
                    </li>
                  
					<li>
                        <a href="food_menu.php"><i class="fa fa-bar-chart-o"></i>Food Menu</a>
                    </li>  
                    <li>
                        <a class="active-menu" href="cart_irl.php"><i class="fa fa-bar-chart-o"></i>Room Service</a>
                    </li> 
                    <li>
                        <a href="http://localhost/hotel/user/review.php"><i class="fa fa-bar-chart-o"></i>Feed Back </a>
                    </li> 
                      <li>
                        <a href="http://localhost/hotel/user/profile.php"><i class="fa fa-bar-chart-o"></i>Back To Profile </a>
                    </li> 
              
                    <li>
                        <a href="http://localhost/hotel/user/login.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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

                            <form method="post" action="cart_irl.php?action=add&id=<?php echo $row["id"]; ?>">

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
        <div class="beverage" id="beverage">
            <?php
                $query = "SELECT * FROM item WHERE itype='beverage' ORDER BY pname ASC ";
                $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_array($result)) {

                        ?>
                        <div style="float: left; width: 25%;">

                            <form method="post" action="cart_irl.php?action=add&id=<?php echo $row["id"]; ?>">

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
                            <td><a href="Cart_irl.php?action=delete&id=<?php echo $value["item_id"]; ?>"><span
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
            <form method="post" action = "cart_irl.php">
<label for="name" style="width:100%; text-align: left;"><b>Customer Name</b></label><input class="form-control" id="name" type="text" name="name" style="width:50%; text-align: left;" required>
<label for="email" style="width:100%; text-align: left;">
<b>Customer Email</b></label>
<input class="form-control" id="email" type="email" name="email" style="width:50%; text-align: left;" required>
<label>Type Of Room </label>
    <select name="troom"  class="form-control" required>
        <option value selected ></option>
                                <option value="Superior Room">SUPERIOR ROOM</option>
                                <option value="Deluxe Room">DELUXE ROOM</option>
				                <option value="Guest House">GUEST HOUSE</option>
				                 <option value="Single Room">SINGLE ROOM</option>
                                 </select> <br>
                <label>Bedding Type</label>
                            <select name="bed" class="form-control" required>
				            <option value selected ></option>
                            <option value="Single">Single</option>
                             <option value="Double">Double</option>
				             <option value="Triple">Triple</option>
                             <option value="Quad">Quad</option>
				            <option value="Triple">None</option>                      </select> <br>
                <input type="submit" name="confirm" style="margin-top: 10px; margin-bottom: 20px; float: left;" class="btn btn-success" value="Confirm Order">
                <input type="button" name="cancel" style="margin-top: 10px; margin-left: 2px; margin-bottom: 20px; float: left;" class="btn btn-secondary" value="Cancel" onClick="window.location.href='clear_cart.php';">

                <!---<a style="float: left; margin-left: 3px; margin-top: 10px;" href="http://localhost/projects/rms/customer.php" class="btn btn-secondary " role="button" aria-pressed="true" >Cancel Order</a>--->
                 
            </form>
        </div>

    </div>
<?php 
 if (isset($_POST["confirm"])){
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $type = $_POST["troom"];
                    $bed = $_POST["bed"];
                    $time = date("d-m-Y h:i:sa");

                    $query = "INSERT INTO online_order ( name, email, type, bed, bill, subtime)
                              VALUES ('$name', '$email', '$type', '$bed', '$total', '$time')";                    
                    $result = mysqli_query($conn, $query);
                    $order_no = $conn->insert_id;

                    if($result) {

                        foreach ($_SESSION["cart"] as $key => $value) {
                            

                            $item_name = $value["item_name"];
                            $quantity = $value["item_quantity"];
                            $price = $value["item_price"]; 
                            $itotal = $value["item_quantity"] * $value["item_price"];

                            $query2 = "INSERT INTO online_order_item (order_no, item_name, quantity, unit_price, total_price)
                              VALUES ('$order_no', '$item_name', '$quantity', '$price', '$itotal')";

                            $result2 = mysqli_query($conn, $query2);

                            if($result2)
                            {
                                echo '<script>alert("Your order has been confirmed and will be delivered shortly!")</script>';
                                echo '<script>window.location="clear_cart.php"</script>';
                            }
                            else
                            {
                                echo '<script>alert("There were errors in processing your order!")</script>';
                            }
                            
                        }
                    }
                }else
                {
                    /*echo '<script>alert("There were errors in processing your order!")</script>';*/
                }

                /*if (isset($_POST["cancel"])){
                        echo '<script>window.location="customer.php"</script>';
                        unset($_SESSION["cart"]);
                    
                }*/
             
?>

</body>

</html>





