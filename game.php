<?php 
	include 'db.php';
	include 'header.php';
	$id = $_REQUEST["gId"];
	$query = "SELECT * FROM gstore WHERE gId=".$id ." limit 1" ;
	$result= mysqli_query($con,$query);

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

<?php include 'footer.php';  ?>