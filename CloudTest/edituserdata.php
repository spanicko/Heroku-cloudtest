<?php

//session_start();

$servername = "us-cdbr-iron-east-03.cleardb.net";
$username = "b963894920a8bb";
$password = "2bb61c8660c1f0e";
$dbname = "heroku_998e6b96de8d903";
$userid =$_GET['User_id'];
$name =$_GET['User_name'];
$add =$_GET['address'];
$dob=$_GET['Dob'];
$age =$_GET['age'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "update appl_user set 
user_name='$name', addr_line_1='$add', dob='$dob', age=$age where
user_id = $userid";

if ($conn->query($sql) === TRUE) {
    echo "Record Updated successfully<br/><br/>";
    
    //$id=$conn->insert_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<html>
<head><title>Updating Data</title></head>
<body>


<a href="viewData.php?id=<?php echo $userid ?>">
		click here
</a> to view the saved data

</body>
</html>
