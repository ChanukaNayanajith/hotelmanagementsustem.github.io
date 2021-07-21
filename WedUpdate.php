<?php
//linking the configuration  file
require 'Config.php'; 

$packagetype=$_POST["packagetype"];
$email=$_POST["email"];

$sql="UPDATE packages SET Packages='$packagetype' WHERE Email='$email';";

if(mysqli_query($conn,$sql)){
    echo "<script type='text/javascript'>
    alert('Successfully inserted');
    window.location='html/wedding.html';
    </script>";;
}
        else{
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    mysqli_close($conn);
 ?>