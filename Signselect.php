<html>
<head>
    <script src="js/Admin1.js"></script>
</head>
<body>
<?php

require 'Config.php';

$sql="SELECT Username,Email,Password,Reenterpassword FROM customerlog";
$result=$conn->query($sql);

if($result->num_rows>0){
    echo"<table border='2'><tr><th>USERNAME</th><th>EMAILl</th><th>PASSWORD</th><th>REPASSWORD</th><th></th><th>Edit</th><Delete</th></tr>";
    //output data of each row
    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row["Username"]."</td><td>".$row["Email"]."</td><td>".$row["Password"]."</td><td>".$row["Reenterpassword"]."</td><td><input type='button' name='Edit' value='Update' id='customerlog' onclick=\"editpage('customerlog')\"></td><td><a href=Signdelete.php?delete=".$row["Email"]." onclick=\"return confirm('Are you sure?)\">Delete</a></td></td></tr>";
    }
    echo"</table>";
}else{
    echo"0 results";
}

?>
</body>
</html>