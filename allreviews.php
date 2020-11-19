<?php include 'header.php'; ?>


		<div class="container" style="margin-top: 16px;margin-bottom: 64px;"> <!-- recent review sections -->
			<h3 style="margin-top: 32px;margin-left: 16px; padding: 4px;"> Game Reviews</h3>	
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