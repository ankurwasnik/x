<html>
<head>
	<title> Experiment 5 </title>
</head>
<body>

<h1> Users in Our Database </h1>
<table border=1px>
<tr>
	<th> Username </th>
	<th> Email Address </th>
</tr>

<?php
require('db.php');
$query = "SELECT * FROM `users`";
$result = mysqli_query($con,$query);
$rows = mysqli_num_rows($result);
echo "Total number of Users : $rows"." <h1> </h1>	" ;
while($array=mysqli_fetch_row($result)) {

?>

<tr>
	<th> <?php echo $array[1]; ?> </th>
	<th> <?php echo $array[2]; ?> </th>
</tr>

<?php 
	}
 ?>


</table>

</body>
</html>