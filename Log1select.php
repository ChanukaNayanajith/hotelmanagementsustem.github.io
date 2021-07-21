<html>
<head>
    <script src="js/Admin1.js"></script>
</head>
<body>
<?php

require 'Config.php';

$sql="SELECT usernameC,userpasswordC FROM cdetails";
$result=$conn->query($sql);

if($result->num_rows>0){
    echo"<table border='2'><tr><th>USERNAME</th><th>PASSWORD</th><th>Edit</th><th><Delete</th></tr>";
    //output data of each row
    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row["usernameC"]."</td><td>"."</td><td>".$row["userpasswordC"]."</td><td></td><td><input type='button' name='Edit' value='Update' id='cdetails' onclick=\"editpage('cdetails')\"></td><td><a href=Log1delete.php?delete=".$row["usernameC"]." onclick=\"return confirm('Are you sure?)\">Delete</a></td></td></tr>";
    }
    echo"</table>";
}else{
    echo"0 results";
}

?>
</body>
</html>