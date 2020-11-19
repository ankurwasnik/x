
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
 	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
	<div class="navbar navbar-dark bg-dark">
		<h3><a href="adminLogout.php" style="color: red ; float: right;" >Logout</a> </h3>
	</div>
		<div class="card-deck" style="margin-top: 16px;margin-bottom: 64px;"> 
		<h2 style="margin-top: 32px;margin-left: 16px; padding: 4px;">Confirm Orders</h2> 

		<div class="card-deck" style="margin: 64px;"> 
				
				
				<?php 
				include 'db.php';
				$query = "SELECT * FROM orders where orderStatus='Pending'  " ;
				$result = mysqli_query($con,$query) ;
				if (mysqli_num_rows($result)>0) {			
					while ($row = mysqli_fetch_array($result)) {
						//display card	
						$gameId = $row[2];
						$gameQuery = "SELECT * FROM gstore WHERE gId='$gameId'";
						$gameResult = mysqli_query($con,$gameQuery);
						if ($gameResult) {

							
								
								$gameRow = mysqli_fetch_array($gameResult);


						
				?>

				<div style="margin: 8px;" class="card">
					<div class="card-body">
						<div> <h4 class="card-title"> <?php echo "$gameRow[2]"; ?> </h4></div>
					<img style="max-height: 200px; max-width: 200px;"  src="<?php echo($gameRow[4])?>" >
					<form method="post" action="confirmOrders.php">
						<input type="hidden" name="orderId" value="<?php echo($row[0]) ?>">
						<input type="hidden" name="user" value="<?php echo($row[1]) ?>">
						<input type="hidden" name="title" value="<?php echo($gameRow[2]) ?>">
						<input type="hidden" name="price" value="<?php echo($gameRow[3]) ?>">
						<h3> <?php echo "$row[1]"; ?> </h3>	
						<input type="submit" value="Confirm" class="btn btn-primary" style="margin: 16px;">
					</form>
					</div>
					

				</div>
				<?php 
						} //close gameif
							

						} //close while
					} //close if
					else{
						echo "No orders Pending";
					}
				
				?>

				
		</div>
		</div>
</body>
</html>