<html>
<head>
    <script src="js/Admin1.js"></script>
</head>
<body>
<?php

require 'Config.php';

$sql="SELECT UserName,Password FROM login";
$result=$conn->query($sql);

if($result->num_rows>0){
    echo"<table border='2'><tr><th>UserName</th><th>Password</th><th>Edit</th><Delete</th></tr>";
    //output data of each row
    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row["UserName"]."</td><td>".$row["Password"]."</td><td><input type='button' name='Edit' value='Update' id='login' onclick=\"editpage('login')\"></td><td><a href=Userdelete.php?delete=".$row["UserName"]." onclick=\"return confirm('Are you sure?)\">Delete</a></td></td></tr>";
    }
    echo"</table>";
}else{
    echo"0 results";
}

?>
</body>
</html>