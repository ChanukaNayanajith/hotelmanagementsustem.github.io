<?php 

    require 'Config.php';

    $message =$_POST["text"];
    $email =$_POST["email"];

    $sql = "INSERT INTO about (ID,message,email) VALUES('',' $message',' $email')";

    if (mysqli_query($conn,$sql)){

        echo "<script> alert ('Record inserted successfully!')</script>";

    }
    else {

        echo "<script> alert ('Error in inserted records')</script>";

    }

    mysqli_close ($conn);

?>