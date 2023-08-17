<?php
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
        <title>Royal Hotel</title>
        <link rel="stylesheet" href="login.css">
    </head>
<body>

<div class="login-title">
            <h1> Staff Registration</h1>
            <h2>Give all the information carefully</h2>
        </div>
        <div class="login-form">
            <form id="login-form" method="POST" action="addstaff.php" enctype="multipart/form-data">
                <input name="name" type="name" class="form-login" placeholder="Full Name" required><br />
                <input name="user_type" type="user_type" class="form-login" placeholder="Post" required><br />
                <input name="email" type="email" class="form-login" placeholder="E-mail" required><br />
                <input name="phone" type="phone" class="form-login" placeholder="Phone Number" required><br />
                <input name="address" type="address" class="form-login" placeholder="Address" required><br />
                <input name="salary" type="salary" class="form-login" placeholder="salary" required><br />
                <input name="password" type="password" class="form-login" placeholder="password" required><br />
                <input type="file" alt="pro-pic" name="profilepic" class="form-control"><br />
                <input type="submit" name="submit" class="form-login submit" value="Registration">
                
                <p style="text-align: right; font-size: 18px; font-family: cursive; color: white; padding-right: 380px">Back to <a href="adindex.php" style="color: white">HOME</a></p>
            </form>
        </div>


<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $user_type = $_POST['user_type'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $imagename = $_FILES['profilepic']['name']; //storing file name
    $tempimagename = $_FILES['profilepic']['tmp_name']; //storing temp name
    move_uploaded_file($tempimagename,"imgs/$imagename"); //storing file in image file
		$sql1 = "INSERT INTO users (name, email, password, user_type) 
		VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["password"]."', '".$_POST["user_type"]."')";

		 $sql2 = "insert into staff(`name`,`user_type`,`email`,`phone`,`salary`,`address`,`image`,`password`) values('$name','$user_type','$email','$phone','$salary','$address','$imagename',    ' $password')";

		if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)){
			echo '<script>alert("New Staff added!")</script>';
            echo '<script>window.location="addstaff.php"</script>';
		}else{
			echo '<script>alert("There is an error while saving the data!")</script>';
		}
}else{
	/*echo 'No data';*/
}

?>


</body>
</html>