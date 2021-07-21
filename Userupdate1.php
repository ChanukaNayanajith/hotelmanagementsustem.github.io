 <?php
//linking the configuration  file
require 'Config.php'; 

$UserName=$_POST["UserName"];
$Password=$_POST["Password"];

$sql="UPDATE login SET Password='$Password' WHERE UserName='$UserName';";

if(mysqli_query($conn,$sql)){
    echo "<script type='text/javascript'>
    alert('Successfully inserted');
    window.location='html/USER ACCOUNT.html';
    </script>";;
}
        else{
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    mysqli_close($conn);
 ?>