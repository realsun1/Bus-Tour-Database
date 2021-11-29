<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Passenger Bookings</title>
</head>
<body>
<?php
include 'connectdb.php';
?>

<h1>Here are the bookings for the passenger:</h1>

<table border ="2">     <!-- add table with header cells -->
	<tr>
	<th>Passenger ID</th>
	<th>Bus Trip ID</th>
	<th>Price</th>
	</tr>

<ol>
<?php

$passenger = $_POST["passengerbooking"];

$query = 'SELECT * FROM book WHERE passengerID = ' . $passenger;
$result=mysqli_query($connection,$query);
 if (!$result) {
	  die("Select a valid option");
  }
 while ($row=mysqli_fetch_assoc($result)) {
	 echo "<tr>";
	 echo "<td>" . $row['passengerID'] ."</td>";
	 echo "<td>" . $row['busTripID'] ."</td>";
	 echo "<td>" . $row['pricePaid'] ."</td>";
  }
  mysqli_free_result($result);

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>