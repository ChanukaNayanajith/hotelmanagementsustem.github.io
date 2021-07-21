 <?php
//linking the configuration  file
require 'Config.php'; 

$Username=$_POST["Username"];
$emailAdd=$_POST["emailAdd"];
$pwd=$_POST["pwd"];
$rpwd=$_POST["rpwd"];

$sql="UPDATE customerlog SET Username='$Username',Password='$pwd',Reenterpassword='$rpwd'  WHERE Email='$EmailAdd';";

if(mysqli_query($conn,$sql)){
    echo "<script type='text/javascript'>
    alert('Successfully inserted');
    window.location='html/Sign up.html';
    </script>";;
}
        else{
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    mysqli_close($conn);
 ?>