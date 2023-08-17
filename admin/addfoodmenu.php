<?php
if(isset($_POST['submit'])){
    
      $pname= $_POST['pname'];
      $price= $_POST['price'];
    $itype= $_POST['type'];
    $imagename = $_FILES['profilepic']['name']; //storing file name
    $tempimagename = $_FILES['profilepic']['tmp_name']; //storing temp name
    
    
    $con = mysqli_connect("localhost","root","","hotel");
    
    move_uploaded_file($tempimagename,"imgs/$imagename"); //storing file in image file
    
    
    $sql = "INSERT INTO item (pname, image, price, itype) values('$pname','$imagename','$price','$itype')";
    
    $query = mysqli_query($con,$sql);
    if($query)
    {
        echo "<script type='text/javascript'> alert('Your Food Item  Is Saved')</script>";
        echo '<script>window.location="addfoodmenu.php"</script>';
    }
    else
    {
        die(mysqli_connect_error());
    }
    
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Royal Hotel</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-title">
            <h1> Add Menu</h1>
            <h2>Give all the information carefully</h2>
        </div>
        <div class="login-form">
            <form id="login-form" method="POST" action="addfoodmenu.php" enctype="multipart/form-data">
                <input name="pname" type="pname" class="form-login" placeholder="item Name" required><br />
                <input name="type" type="itype" class="form-login" placeholder="type" required><br />
                <input name="price" type="price" class="form-login" placeholder="price" required><br />
                <input type="file" alt="pro-pic" name="profilepic" class="form-control"><br />
                <input type="submit" name="submit" class="form-login submit" value="Add">
                
                <p style="text-align: right; font-size: 18px; font-family: cursive; color: white; padding-right: 380px">Back to <a href="updatedatabase.php" style="color: white">HOME</a></p>
            </form>
        </div>
    </body>
</html>