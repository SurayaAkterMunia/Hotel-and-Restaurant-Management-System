<?php
session_start();
$con = mysqli_connect("localhost","root","","hotel");

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "select * from admin where email='".$email."' AND password='".$password."' limit 1";
    
    $query = mysqli_query($con,$sql);
    
    $row = mysqli_fetch_assoc($query);
    $uid = $row["id"];
    
    if(mysqli_num_rows($query)==1)
    {
        $_SESSION['userid'] = $uid;
        header("location:adindex.php");
    }
    else
    {
        echo "Your email or password is incorrect. Try again.";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Royal Hotel Admin Panel</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-title">
            <h1>Admin Login</h1>
            <h2>If you not registered, contact with Admin panel</h2>
        </div>
        <div class="login-form">
            <form id="login-form" method="POST" action="adlogin.php">
                <input name="email" type="email" class="form-login" placeholder="E-mail" required><br />
                <input name="password" type="password" class="form-login" placeholder="Password" required><br />
                
                <input type="submit" class="form-login submit" value="Login"><br />
                
                <p style="text-align: right; font-size: 18px; font-family: cursive; color: white; padding-right: 380px">Back to <a href="../index.php" style="color: white">HOME</a></p>
            </form>
        </div>
    </body>
</html>