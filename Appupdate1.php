 <?php
//linking the configuration  file
require 'Config.php'; 

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$gender=$_POST["gender"]; 
$mobile=$_POST["mobile"];
$Age=$_POST["Age"];
$day=$_POST["day"];
$appt=$_POST["appt"];

$sql="UPDATE details SET FirstName='$firstname',LastName='$lastname',Email='$email',Gender='$gender',ContactNo='$mobile',Age='$Age',Date='$day',Time='$appt' WHERE Email='$email';";

if(mysqli_query($conn,$sql)){
    echo "<script type='text/javascript'>
    alert('Successfully inserted');
    window.location='html/APPOINTMENT.html';
    </script>";;
}
        else{
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    mysqli_close($conn);
 ?>