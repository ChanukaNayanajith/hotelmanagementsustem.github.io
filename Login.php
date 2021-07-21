<?php
require 'Config.php';

$Username=$_POST["Username"];
$pwd=$_POST["pwd"];




$sql = "INSERT INTO cdetails(usernameC,userpasswordC)VALUES('$Username','$pwd')";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Successfully inserted');
        window.location='html/Login.html';
        </script>";;
    }
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }

?>