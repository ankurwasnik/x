<?php
include 'db.php';
$orderId=$_REQUEST['orderId'];
$query="DELETE FROM orders where orderId='$orderId' ";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<script> alert('Order deleted Successfully !') </script>";
	echo "<a href='myorders.php'> <h3> Go to MyOrders </h3></a>";
}
else{
	echo "<script> alert('something went wrong') </script>";
}
?>