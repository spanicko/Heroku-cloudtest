<?php

//session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cst-323 activities";

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
