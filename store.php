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
	
		<?php 
			if (isset($_SESSION['username'])) { 
		?>
						<div class="header">
					  <h5>Welcome <?php echo $_SESSION["username"]; ?></h5>
					  </div>

		<?php 
			}
		?>
	
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

	  
	</div>

<?php include 'db.php'; ?>
<div class="container">
	<!-- display all the games in db with pagination -->
	<div class="row" style="padding: 8px; margin-bottom: 64px; ">  <!-- featured games row -->

			
			<div class="card-columns" style="margin:16px;  align-content: center; align-self: center;" > <!-- top 3 games -->

					<?php
				        $query = "SELECT * FROM gstore ORDER BY gId ASC";
				        $result = mysqli_query($con, $query);
				        if (mysqli_num_rows($result) > 0) {
				            while ($row = mysqli_fetch_array($result)) {
        			?>

						<div class="card bg-light text-dark" > <!-- card 3-->

						<div class="card-body">
							<img style="max-height: 1080px;max-width: 1440px;" src="<?php echo $row["gPic"]; ?>" class="card-img-top img-responsive" alt="game image">
							
								<div class="card-title" style="margin-top: 4px; background:white; opacity: 0.7; "> <h5> <?php echo $row["gTitle"]; ?> </h5></div>
						</div>
						<form method="post" action="game.php">
							<input type="hidden" name="gId" value="<?php echo($row["gId"]) ?>" > 
							<input class="btn btn-primary" style="margin: 4px" type="submit" value="BUY @<?php echo $row["gprice"]." INR "; ?>">
						</form>
						
						
						</div>

					<?php
			    }
			}
			?>
				
			</div>

			
</div>

<?php include 'footer.php'; ?>