<?php 
	include 'db.php';
	include 'header.php';
	$id = $_REQUEST["gId"];
	$query = "SELECT * FROM gstore WHERE gId=".$id ." limit 1" ;
	$result= mysqli_query($con,$query);
	$gCategory="action";

	function orderedGame(){
		echo "<script> alert('Your game is ordered !') </script>";
	}
	
?>

<div class="container" style="margin-top: 1% ; margin-bottom: 1%">
	<div class="row">

		<?php 
			if (mysqli_num_rows($result)==1) {
				$row = mysqli_fetch_array($result);
				//echo "$row[0]"; //rid
				//echo "$row[1]"; //desc
				//echo "$row[2]"; //title
				//echo "$row[3]"; //price
				//echo "$row[4]"; //image src
				//echo "$row[5]"; //category
				//echo "$row[6]"; //rating
				$gCategory=$row[5];


		?>


		<div class="col">
			<img src="<?php  echo "$row[4]"; ?>" class="img-responsive" style="box-shadow:4px 4px 16px #000000  ; min-height: 200px ; min-width: 200px;">
		</div>
		<div class="col">
			<h1 style="font-family: sofia ; font-size:300% ; ">  <?php echo "$row[2]"; ?>  </h1>
			<h3> Category : <?php echo "$row[5]"; ?> </h3>	
			<h5> About <br> <?php echo "$row[1]"; ?> </h5>
			<h5 style="color:green"> Rating : <?php  echo "$row[6]"; ?> </h5>
			<h2> Price <?php echo "$row[3]"; ?> INR </h2>
			<form class="form" method="post" action="buygame.php">
				<input type="hidden" name="gId" value="<?php echo "$row[0]";  ?>">
				<input type="submit"  class="btn btn-primary" value="BUY" onclick="orderedGame()"> 
			</form>	
		</div>


		<?php
			}

		?>


	</div>
</div>
<div class="divider"></div>
<div class="container" style="margin-top: 5%">
	<h3 style="margin-left:32px; margin-top: 16px;">Suggested Games</h3>
			<div class="card-columns" style="margin:16px;  align-content: center; align-self: center;" > <!-- top 3 games -->
				<?php 
					$query="SELECT * from gstore where gCategory='$gCategory'order by gRating desc limit 5 ";
					$result = mysqli_query($con,$query);
					if (mysqli_num_rows($result)>0) {
						while ($row=mysqli_fetch_array($result)) {
				?>

					<div class="card bg-light text-dark" > <!-- card 3-->
						<div class="card-body">
							<form method="post" action="game.php">
							<input type="hidden" name="gId" value="<?php echo($row[0])?>">
							<img src="<?php echo($row[4]) ?>" class="card-img-top img-responsive" alt="game image" >
							<div class="card-title" style="margin-top: 4px; background:white; opacity: 0.7; "> <h5>Cyberpunk </h5></div>
							<input class="btn btn-primary" type="submit" value=" <?php echo($row[3])?>">
							</form>
							
						</div>
					
						
					</div>

				<?php
						}
					}
				?>																		
			</div>
</div>

			
<?php include 'footer.php';  ?>