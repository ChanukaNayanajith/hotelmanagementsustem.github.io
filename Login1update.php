 <?php
//linking the configuration  file
require 'Config.php'; 

$Username=$_POST["Username"];
$pwd=$_POST["pwd"];


$sql="UPDATE cdetails SET usernameC='$Username',userpasswordC='$pwd', WHERE usernameC='$Username'";

if(mysqli_query($conn,$sql)){
    echo "<script type='text/javascript'>
    alert('Successfully inserted');
    window.location='html/Login.html';
    </script>";;
}
        else{
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    mysqli_close($conn);
 ?>