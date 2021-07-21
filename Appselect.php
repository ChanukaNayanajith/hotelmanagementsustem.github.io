<html>
<head>
    <script src="js/Admin1.js"></script>
</head>
<body>
<?php

require 'Config.php';

$sql="SELECT FirstName,LastName,Email,Gender,ContactNo,Age,Date,Time FROM details";
$result=$conn->query($sql);

if($result->num_rows>0){
    echo"<table border='2'><tr><th>FirstName</th><th>LastName</th><th>Email</th><th>Gender</th><th>ContactNo</th><th>Age</th></th>Date</th><th>Time</th><th>Edit</th><Delete</th></tr>";
    //output data of each row
    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Email"]."</td><td>".$row["Gender"]."</td><td>".$row["ContactNo"]."</td><td>".$row["Age"]."</td><td>".$row["Date"]."</td><td>".$row["Time"]."</td><td><input type='button' name='Edit' value='Update' id='Details' onclick=\"editpage('Details')\"></td><td><a href=Appdelete.php?delete=".$row["Email"]." onclick=\"return confirm('Are you sure?)\">Delete</a></td></td></tr>";
    }
    echo"</table>";
}else{
    echo"0 results";
}

?>
</body>
</html>