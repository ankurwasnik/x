<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
 	<link rel="stylesheet" type="text/css" href="dashboardcss.css">  
 	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body >
	<!-- header -->
	<div class="header">
	  <h5>Welcome <?php echo $_SESSION["username"]; ?></h5>
	</div>
	<!--navigation bar -->
	<div class="topnav">
	  <a href="homepage.php">Home</a>
	  <a href="store.php">Store</a>
	  <a href="myorders.php">My Orders</a>
	  <?php 
			if (isset($_SESSION['username'])) { 
		?>
						  <a href="logout.php" >Logout</a>

		<?php 
			}
		?>

	  <a href="adminlogin.php" style="float: right; color: red"> Admin</a>

	  
	</div>

	<!-- continue after navigation bar in custom pages -->
	