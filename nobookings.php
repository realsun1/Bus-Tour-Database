<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>No Bookings</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are the bus trips with no bookings:</h1>

<table border ="2">     <!-- add table with header cells -->
	<tr>
	<th>Trip Name</th>
	</tr>

<ol>
<?php

   $query = 'SELECT passengerID, tripName FROM bustrip, book WHERE bustrip.busTripID = book.busTripID GROUP BY bustrip.busTripID';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['tripName'] ."</td>";
     }
     mysqli_free_result($result);

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>