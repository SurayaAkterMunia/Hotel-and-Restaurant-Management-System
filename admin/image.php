<?php
    if(isset($_POST['submit'])){
        $imagename = $_FILES['profilepic']['name']; //storing file name
        $tempimagename = $_FILES['profilepic']['tmp_name']; //storing temp name

        $conn = mysqli_connect("localhost","root","","hotel") or die(mysqli_error());

        move_uploaded_file( $tempimagename,"img/$imagename"); //storing file in image file
        
        $sql = "INSERT INTO `admin`(`image`) VALUES('$imagename')";
        $run = mysqli_query($conn,$sql);

        echo "Uplod Success";
    }
?>