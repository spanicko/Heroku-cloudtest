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


$sql = $conn->prepare("select * from appl_user") ;

$sql ="select * from appl_user" ; 
    
	
	$result = $conn->query($sql);




$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cloud Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="create.php">Create User</a></p>
      <p><a href="viewall.php">View User</a></p>
      <p><a href="deleteuser.php">Delete User</a></p>
      <p><a href="edituser.php">Edit User</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
    
<h2>View User Details</h2><br />

<table border=2>
    <thead>
        <tr>
		   <th> User ID </th>
            <th> Name </th>
            <th> DOB </th>
            <th> Address </th>
			 <th>  Age  </th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $result->fetch_assoc()): ?>
        <tr>
		    <!--Each table column is echoed in to a td cell-->
			 <td><?php echo $row['user_id'];?>
			  <a href="delete.php?id=<?php echo $row['user_id']; ?>">
				Delete			</a> 

							
			 </td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['addr_line_1']; ?></td>
			 <td><?php echo $row['age']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>


    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright 2019 - 2020</p>
</footer>

</body>
</html>
