<?php

//session_start();

$servername = "us-cdbr-iron-east-03.cleardb.net";
$username = "b963894920a8bb";
$password = "2bb61c8660c1f0e";
$dbname = "heroku_998e6b96de8d903";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "delete from appl_user where user_id=".$_GET['id'];


$result = $conn->query($sql);

$conn->close();

header("Location: viewall.php"); /* Redirect browser */
exit();

?>
