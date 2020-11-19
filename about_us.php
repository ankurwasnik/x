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
            <a class="nav-link" href="#">Store <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Adventure</a>
              <a class="dropdown-item" href="#">Battle-Royale</a>
              <a class="dropdown-item" href="#">Fighting</a>
              <a class="dropdown-item" href="#">Horror</a>
              <a class="dropdown-item" href="#">Puzzle</a>
              <a class="dropdown-item" href="#">Racing</a>
              <a class="dropdown-item" href="#">Simulation</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">More</a>
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
      <br><br>
      <div class="about">
        <p>We are the students of Third Year Computer Engineering of VJTI College.<p>

        <h3>Contact Us</h3>
        <a href="mailto:vedantban9909@gmail.com">vedantban9909@gmail.com</a>
        <br>
        <a href="mailto:12srohitjadhav@gmail.com">12srohitjadhav@gmail.com</a>
        <br>
        <a href="mailto:sankalpgongle007@gmail.com">sankalpgongle007@gmail.com</a>
        <br>
        <a href="mailto:ankurwasnik358@gmail.com">ankurwasnik358@gmail.com</a>
        <br>

      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <?php
    include 'footer.php';
  ?>
