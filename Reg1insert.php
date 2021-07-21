<?php
require 'Config.php';

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gender=$_POST["gender"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$day=$_POST["day"];
$pwd=$_POST["pwd"];
$cnfrmpwd=$_POST["cnfrmpwd"];

$sql = "INSERT INTO register(FirstName,LastName,Gender,MobileNumber,Email,DOB,Password,RePassword)VALUES('$firstname','$lastname','$gender','$mobile','$email','$day','$pwd','$cnfrmpwd')";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Successfully inserted');
        window.location='html/Registration1.html';
        </script>";;
    }
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }

?>