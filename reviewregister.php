<?php 
include 'db.php';
include 'auth_session.php';
$username = $_SESSION["username"];
$rDesc = $_POST["rDesc"] ;
$rTitle = $_POST["rTitle"] ;
$rDate =   date("l d/m/Y");
$query= "INSERT INTO reviews (rUsername,rTitle,rDesc,rDate) VALUES('$username','$rTitle','$rDesc','$rDate')" ;
if (mysqli_query($con , $query)) {
	echo "<script>  alert('You reviewed Successfully ! Review More ... ');   </script>";
	sleep(1);
	header("Location:reviews.php");	
	
}
else{
	echo "<script>  alert('Something went wrong ! Try again ...' );   </script>";
	header("Location:reviews.php");	
}

?>