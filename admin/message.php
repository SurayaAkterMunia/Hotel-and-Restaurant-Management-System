<?php
    session_start();
    //echo $_SESSION['userid'];
    $id = $_SESSION['userid'];
   
    $con = mysqli_connect("localhost","root","","hotel");
            
    $sql = "select * from admin where id = $id";
                
    $query = mysqli_query($con,$sql);
            
    $row = mysqli_fetch_assoc($query);
                    
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ROYAL HOTEL HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div id="wrapper">
        
        <nav class="navbar navbar-default top-navbar" role="navigation">

            <ul class="nav navbar-top-links navbar-right">
                        <li><a href="adindex.php"><i class="fa fa-user fa-fw"></i>Back</a>
                        </li>
            </ul>
        </nav>
    </div>
        <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                    <?php
                    echo "<p style=' font-size: 20px; padding-top: 10px'>"."Hi "."<i>".$row["name"]." . You have a meassage</i>"."</p>";
                ?>
                        </h1>
                    </div>
                </div> 
        <?php
            $con = mysqli_connect("localhost","root","","hotel");
            
            $sql = "select * from contact order by id desc";
            
            $query = mysqli_query($con,$sql);
            
            while($row = mysqli_fetch_assoc($query)){
                echo "<div class='container jumbotron' style='margin-top: 30px;'>";
                echo "You have a message from "."<b><i>".$row["name"]."</b></i>";
                echo "<hr align='left'>";
            
                echo "<div class='text-justify' style='padding-left: 50px'>";
                
                    echo "Name   &nbsp: "."<b><i>".$row["name"]."</b></i><br />";
                    echo "E-mail : "."<b><i>".$row["email"]."</b></i><br />";
                    echo "Subject: "."<b><i>".$row["subject"]."</b></i><br /><br />";
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp "."<i>".$row["message"]."</i>";
                echo "</div>";
                echo "</div>";
            }   
        ?>
    </div>
    </body>
</html>