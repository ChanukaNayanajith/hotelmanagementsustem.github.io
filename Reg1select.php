<html>
<head>
    <script src="js/Admin1.js"></script>
</head>
<body>
<?php

require 'Config.php';

$sql="SELECT FirstName,LastName,Gender,MobileNumber,Email,DOB,Password,RePassword FROM register";
$result=$conn->query($sql);

if($result->num_rows>0){
    echo"<table border='2'><tr><th>FIRSTNAME</th><th>LASTNAME</th><th>GENDER</th><th>MOBILENO</th><th>EMAIL</th><th>DOB</th></th>PASSWORD</th><th>REPASSWORD</th><th>Edit</th><Delete</th></tr>";
    //output data of each row
    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Gender"]."</td><td>".$row["MobileNumber"]."</td><td>".$row["Email"]."</td><td>".$row["DOB"]."</td><td>".$row["Password"]."</td><td>".$row["RePassword"]."</td><td><input type='button' name='Edit' value='Update' id='register' onclick=\"editpage('register')\"></td><td><a href=Reg1delete.php?delete=".$row["Email"]." onclick=\"return confirm('Are you sure?)\">Delete</a></td></td></tr>";
    }
    echo"</table>";
}else{
    echo"0 results";
}

?>
</body>
</html>