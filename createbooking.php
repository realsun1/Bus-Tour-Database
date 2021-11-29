<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bookings</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are the bookings added:</h1>
<ol>
<?php

$passenger = $_POST["passengerbook"];
$trip = $_POST["existingtrip"];
$price = $_POST["price"];

$query = "INSERT INTO book VALUES ('" . $passenger . "','" . $trip . "','" . $price ."')";
$result=mysqli_query($connection,$query);
 if (!$result) {
      die("insertion failed");
  }

 echo ("Successfully added booking");

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>