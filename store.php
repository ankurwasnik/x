<?php include 'header.php';  ?>
<?php include 'db.php'; ?>
<div class="container">
	<!-- display all the games in db with pagination -->
	<div class="row" style="padding: 8px; margin-bottom: 64px; ">  <!-- featured games row -->

			
			<div class="card-deck" style="margin:16px;  align-content: center; align-self: center;" > <!-- top 3 games -->

					<?php
				        $query = "SELECT * FROM gstore ORDER BY gId ASC";
				        $result = mysqli_query($con, $query);
				        if (mysqli_num_rows($result) > 0) {
				            while ($row = mysqli_fetch_array($result)) {
        			?>

						<div class="card bg-light text-dark" > <!-- card 3-->

						<div class="card-body">
							<img src="<?php echo $row["gPic"]; ?>" class="card-img-top img-responsive" alt="game image">
							
								<div class="card-title" style="margin-top: 4px; background:white; opacity: 0.7; "> <h5> <?php echo $row["gTitle"]; ?> </h5></div>
						</div>
						<a href="#" class="btn btn-primary"> <?php echo $row["gprice"]." INR ";  ?></a>
						
						</div>

					<?php
			    }
			}
			?>
				
			</div>

			
</div>

<?php include 'footer.php'; ?>