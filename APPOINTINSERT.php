<?php
require 'Config.php';

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$mobile=$_POST["mobile"];
$Age=$_POST["Age"];
$day=$_POST["day"];
$appt=$_POST["appt"];

$sql = "INSERT INTO details(FirstName,LastName,Email,Gender,ContactNo,Age,Date,Time)VALUES('$firstname','$lastname','$email','$gender','$mobile','$Age','$day','$appt')";

		if(mysqli_query($conn,$sql)){
			echo "<script type='text/javascript'>
			alert('successfully inserted');
			window.lacation='html/APPOINTMENT.html';
			</script>";;
		}
		else{
			echo "Error:".$sql."<br>".mysqli_error($conn);
		}
?>