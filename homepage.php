<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="homesty.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="homepage.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="store.php">Store <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php 
                include 'db.php';
                $query = "SELECT DISTINCT gCategory from gstore";
                $result= mysqli_query($con,$query);
                if ($result) {
                  while ($row=mysqli_fetch_array($result)) {
              ?>
                <form method="get" action="getgame.php">
                <input type="hidden" name="type" value="<?php echo($row[0]) ?>">
                <input class="btn btn-light " type="submit" value="<?php echo($row[0]) ?>">
                </form>

              <?php
                  }
                }
              ?>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="store.php">More</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login.php">Login <i class="far fa-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us.php">About Us</i></a>
          </li>
        </ul>

      </div>
    </nav>
    <br>
    <div class="container">
    		<div class="carousel slide" id="main-carousel" data-ride="carousel">
    			<ol class="carousel-indicators">
    				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
    				<li data-target="#main-carousel" data-slide-to="1"></li>
    				<li data-target="#main-carousel" data-slide-to="2"></li>
    				<li data-target="#main-carousel" data-slide-to="3"></li>
    			</ol><!-- /.carousel-indicators -->

    			<div class="carousel-inner">
    				<div class="carousel-item active">
    					<img class="d-block img-fluid" src="red.jpg" alt="">
    				</div>
    				<div class="carousel-item">
    					<img class="d-block img-fluid" src="nfs.jpg" alt="">
    				</div>
    				<div class="carousel-item">
    					<img class="d-block img-fluid" src="cod.jpeg" alt="">

    				</div>
    				<div class="carousel-item">
    					<img src="forza.jpg" alt="" class="d-block img-fluid">

    				</div>
    			</div><!-- /.carousel-inner -->

    			<a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
    				<span class="carousel-control-prev-icon"></span>
    				<span class="sr-only" aria-hidden="true">Prev</span>
    			</a>
    			<a href="#main-carousel" class="carousel-control-next" data-slide="next">
    				<span class="carousel-control-next-icon"></span>
    				<span class="sr-only" aria-hidden="true">Next</span>
    			</a>
    		</div><!-- /.carousel -->
    	</div><!-- /.container -->
      <br><br>
      <section id="gallery">

        <div class="container">
          <h1>Featured Games</h1>
          <div class="row">
            <div class="col-lg-4 mb-4">
              <div class="card">
                <img class="card-img-top" src="cyberpunk.jpg" alt="">
                <div class="card-body">
                  <a href="login.php"><h5 class="card-title">Cyberpunk 2077</h5></a>

                  <p class="card-text">Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification.</p>
                  <a href="login.php" class="btn btn-outline-info btn-sm">Buy</a>
                  <a href="login.php" class="btn btn-outline-success btn-sm">More</i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="card">
                <img class="card-img-top" src="assassins_creed_valhalla.jpg" alt="">
                <div class="card-body">
                  <a href="login.php"><h5 class="card-title">Assassin's Creed Valhalla</h5></a>
                  <p class="card-text">Become a legendary Viking on a quest for glory. Explore England's Dark Ages as you raid your enemies, grow your settlement, and build your political power.</p>
                  <a href="login.php" class="btn btn-outline-info btn-sm">Buy</a>
                  <a href="login.php" class="btn btn-outline-success btn-sm">More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="card">
                <img class="card-img-top" src="dirt.jpg" alt="">
                <div class="card-body">
                  <a href="login.php"><h5 class="card-title">Dirt 5</h5></a>
                  <p class="card-text"> Conquer stunning global routes and drive an iconic roster of cars. Experience a star-studded Career mode, four-player split-screen and much more!</p>
                  <a href="login.php" class="btn btn-outline-info btn-sm">Buy</a>
                  <a href="login.php" class="btn btn-outline-success btn-sm">More</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
	include 'footer.php';
?>
