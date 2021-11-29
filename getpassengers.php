<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Passenger Info</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is the passenger info in order by last name:</h1>

<table border ="2">     <!-- add table with header cells -->
	<tr>
	<th>Passenger ID</th>
	<th>First Name</th>
	<th>Last Name</th>
    <th>Passport ID</th>
	</tr>

<ol>
<?php

   $query = 'SELECT * FROM passenger ORDER BY lastName;';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['passengerID'] ."</td>";
        echo "<td>" . $row['firstName'] ."</td>";
        echo "<td>" . $row['lastName'] ."</td>";
        echo "<td>" . $row['passportID'] ."</td>";
     }
     mysqli_free_result($result);

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>