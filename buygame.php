<?php
include 'db.php';
include 'auth_session.php';

$rid = (int)stripslashes($_REQUEST["gId"]);
$user = stripslashes($_SESSION["username"]);
$query ="INSERT INTO orders (orderowner , ordergameId ) VALUES ('$user','$rid')" ;
$result = mysqli_query($con,$query);
if ($result) {
	echo "<script> alert('Your game is ordered!' )  </script>";
	echo "<a href='store.php'> Explore More Games ... </a>";
}
else{
	echo "<script>  alert('Something went wrong !'  ) </script>";
	echo "$query";
}

?>