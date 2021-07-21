 <?php
//linking the configuration  file
require 'Config.php'; 

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gender=$_POST["gender"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$day=$_POST["day"];
$pwd=$_POST["pwd"];
$cnfrmpwd=$_POST["cnfrmpwd"];

$sql="UPDATE register SET FirstName='$firstname',LastName='$lastname',Gender='$gender',MobileNumber='$mobile',Email='$email',DOB='$day',Password='$pwd',RePassword='cnfrmpwd' WHERE Email='$Email';";

if(mysqli_query($conn,$sql)){
    echo "<script type='text/javascript'>
    alert('Successfully inserted');
    window.location='html/Registration1.html';
    </script>";;
}
        else{
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    mysqli_close($conn);
 ?>