<?php
require 'Config.php';

$Username=$_POST["Username"];
$emailAdd=$_POST["emailAdd"];
$pwd=$_POST["pwd"];
$rpwd=$_POST["rpwd"];


$sql = "INSERT INTO customerlog(Username,Email,Password,Reenterpassword)VALUES('$Username','$emailAdd','$pwd','$rpwd')";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Successfully inserted');
        window.location='html/Sign up.html';
        </script>";;
    }
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }

?>
