<?php 
include 'db.php';
include 'auth_session.php';

$username = $_SESSION["username"];
$rDesc = $_POST["rDesc"] ;
$rTitle = $_POST["rTitle"] ;
$rDate =   date("l d/m/Y");
$rTitle = stripslashes($rTitle);
$rDesc = stripslashes($rDesc);
if (empty($rTitle) or empty($rDesc)) {
	echo "<script> alert('Empty reviews doesn't seem good') </script>";
}
$query= "INSERT INTO reviews (rUsername,rTitle,rDesc,rDate) VALUES('$username','$rTitle','$rDesc','$rDate')" ;
if (mysqli_query($con , $query)) {
	echo "<script>  alert('You reviewed Successfully ! Review More ... ');   </script>";
	echo "<div class='header'>";
	echo "<a href='reviews.php'> Review more games </a> <br>";
	echo "<a href='allreviews.php' > See all reviews </a>";

	
}
else{
	echo "<script>  alert('Something went wrong ! Try again ...' );   </script>";
	header("Location:reviews.php");	
}

?>