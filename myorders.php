<?php 
	include 'db.php';
	include 'header.php';
?>

<div class="container" style="margin: 64px;">
	<h3>Your Orders</h3>
	<div class="card-deck">
		<?php  
			$username = $_SESSION['username'];
			$query="SELECT * FROM orders where orderowner='$username' order by orderStatus";
			$result = mysqli_query($con,$query);
			if (mysqli_num_rows($result)>0) {
				while ($row=mysqli_fetch_array($result)) {
					$orderQuery = "SELECT * FROM gstore where gId=$row[2]" ;
					$orderResult = mysqli_query($con , $orderQuery);
					if ($orderResult) {
						$gameTemplate = mysqli_fetch_array($orderResult);
						
					
		?>
			<div class="card bg-light text-dark" > 
					<div class="card-body">
						<img src="<?php echo($gameTemplate[4]) ?>" class="card-img-top img-responsive" alt="game image">
						<div class="card-title" style="margin-top: 4px; background:white; opacity: 0.7; "> <h5> <?php echo "$gameTemplate[2]"; ?> </h5></div>
						<div class="row">
							<form method="post" action="deleteOrders.php">
								<input type="hidden" name="orderId" value="<?php echo($row[0]) ?>">
								<input class="btn btn-danger" type="submit" value="Cancel Order">
							</form>
						</div>
					</div>		
			</div>

		<?php
					}
				}
			}
		?>	



	</div>
</div>

<?php
	include 'footer.php';
?>