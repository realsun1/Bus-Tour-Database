<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bus Trips</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are the bus trips for the country:</h1>

<table border ="2">     <!-- add table with header cells -->
	<tr>
	<th>Trip ID</th>
	<th>Start Date</th>
	<th>End Date</th>
    <th>Country Visiting</th>
	<th>Trip Name</th>
    <th>License Plate ID</th>
	</tr>

<ol>
<?php

$countrySelected = $_POST["pickacountry"];

$query = 'SELECT * FROM bustrip WHERE busTripID = ' . $countrySelected;
$result=mysqli_query($connection,$query);
 if (!$result) {
	  die("database query2 failed.");
  }
 while ($row=mysqli_fetch_assoc($result)) {
	 echo "<tr>";
	 echo "<td>" . $row['busTripID'] ."</td>";
	 echo "<td>" . $row['startDate'] ."</td>";
	 echo "<td>" . $row['endDate'] ."</td>";
	 echo "<td>" . $row['countryToVisit'] ."</td>";
	 echo "<td>" . $row['tripName'] ."</td>";
	 echo "<td>" . $row['licensePlateID'] ."</td>";
	 echo "<td>" . $row['image'] ."</td>";
  }
  mysqli_free_result($result);

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>