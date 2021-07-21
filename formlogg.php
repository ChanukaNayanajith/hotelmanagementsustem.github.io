<?php
 require 'Config.php'; 
?>
<?php
  $username=$_POST["Field1"];
  $password=$_POST["Field2"];

  $sql =  "insert into forog(Userid,Username,Userpassword)values ('','$username',' $password')";
   if (mysqli_query($conn,$sql)){
	   echo "<script>alert('Record insert successfully!!!')</script>";
   }
	   else{
		  echo "<script>alert('Error in inserting records!!!')</script>";
	  }
	  mysqli_close($conn);
?>
   









?>