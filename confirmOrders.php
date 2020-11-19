<?php 
include 'db.php';
$orderId = $_REQUEST['orderId'];
$username = $_REQUEST['user'];
$price = $_REQUEST['price'];
$title = $_REQUEST['title'];
$query   = "UPDATE orders set orderStatus = 'Confirmed' where orderId='$orderId'";
$result = mysqli_query($con , $query);
$queryGetUser ="SELECT email FROM users where username = '$username'  ";
if ($result) {
	//confirmed the order
	$rGetUser = mysqli_query($con,$queryGetUser);
	if ($rGetUser) {
		//got the email of user now mail 
		$date = date("l d/m/Y");
		$useremail = mysqli_fetch_array($rGetUser);
		$msg ="Your order of Game $title is confirmed on date $date. Your will recieve your order soon ! Thank you for shopping with Us.";
		
	}
	$msg = "Your order for Game $";
	echo "<script> alert('Order is Confirmed') </script>";
	echo "<h2><a href='admin.php'> Go to admin Page </a> </h2>";
}
else{
	echo "<script> alert('Something went wrong') </script>";
}
?>