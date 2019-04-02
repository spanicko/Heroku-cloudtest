<?php

//session_start();

$servername = "us-cdbr-iron-east-03.cleardb.net";
$username = "b963894920a8bb";
$password = "2bb61c8660c1f0e";
$dbname = "heroku_998e6b96de8d903";
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

$sql = "INSERT INTO appl_user (user_name, addr_line_1, dob, age)
VALUES ('$name','$add','$dob','$age')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br/><br/>";
	
	$id=$conn->insert_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<html>
<head><title>Saving php</title></head>
<body>


<a href="viewData.php?id=<?php echo $id ?>">
		click here
</a> to view the saved data

</body>
</html>
