<?php 
//include auth_session.php file on all user panel pages
	include("header.php");
 ?>


	<div class="container" style="margin-top: 16px; ">

		<div class="row" style="padding: 8px;">  <!-- featured games row -->

			<h3 style="margin-left:32px; margin-top: 16px;">Featured Games</h3>
			<div class="card-deck" style="margin:16px;  align-content: center; align-self: center;" > <!-- top 3 games -->


				<div class="card bg-light text-dark" > <!-- card 3-->
					<div class="card-body">
						<img src="cyberpunk.jpg" class="card-img-top img-responsive" alt="game image">
						<div class="card-title" style="margin-top: 4px; background:white; opacity: 0.7; "> <h5>Cyberpunk </h5></div>
					</div>
					<a href="#btnclicked" class="btn btn-primary">Buy</a>
					
				</div>
					

				<div class="card bg-light text-dark" > <!-- card 3-->
					<div class="card-body">
						<img src="assassins_creed_valhalla.jpg" class="card-img-top img-responsive" alt="game image">
						
							<div class="card-title" style="margin-top: 4px; background:white; opacity: 0.7; "> <h5>Assassins Creed Valhalla </h5></div>
					</div>
					<a href="#" class="btn btn-primary">Buy</a>
					
				</div>
				
				<div class="card bg-light text-dark" > <!-- card 3-->
					<div class="card-body">
						<img src="need_for_speed.jpg" class="card-img-top img-responsive" alt="game image">
							<div class="card-title" style="margin-top: 4px; background:white; opacity: 0.7; "> <h5>Need For Speed </h5></div>						
					</div>
					<a href="#" class="btn btn-primary">Buy</a>
					
				</div>
				
			</div>

		<div class="container" style="margin-top: 16px;margin-bottom: 64px;"> <!-- recent review sections -->
			<h3 style="margin-top: 32px;margin-left: 16px; padding: 4px;"> Recent Game Reviews</h3>	
		<div class="column"> 
			<ul class="list-group list-group-flush">

				<?php 

				include 'db.php';
				$query = "SELECT * FROM reviews order by rDate desc limit 5" ;
				$result = mysqli_query($con , $query) ;

				if (mysqli_num_rows($result)>0) {
					
					while ($row = mysqli_fetch_array($result)) {
						//display card
	

				?>

				<li class="list-group-item"> 
					<div class="card"> <!-- template review card -->
						<div class="card-header"> <h5><?php echo "$row[2]"; ?></h5> </div>
						<div class="card-body">
							<div class="card-title"> 
								<p><?php echo "$row[3]"; ?></p>
								<br>
								<p class="card-text"><strong><?php echo "$row[1]"; ?></strong> &nbsp;&nbsp;<?php echo "$row[4]"; ?></p>
							</div>
						</div>	
					</div>
				</li>




				<?php 
					}
				}
				?>




			


			</ul>
			
		</div>
		</div>
		


		</div>
	</div>
   
<?php  
	include 'footer.php';
?>