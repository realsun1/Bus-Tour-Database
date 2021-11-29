<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bus Trips</title>
</head>
<body>
<?php
include 'displayimage.php';
include 'connectdb.php';
?>
<h1>Here are the bus trips updated:</h1>
<ol>
<?php

$newName = $_POST["newName"];
$newStart = $_POST["newStart"];
$newEnd = $_POST["newEnd"];
$newImage = $_POST["newImage"];
$trip= $_POST["pickbustrip"];

if ($newStart > $newEnd) {
   die("invalid, enter a starting date less than end date");
}

$query = "UPDATE bustrip SET tripName ='" . $newName . "'," . "startDate ='" . $newStart . 
"'," . "endDate ='" . $newEnd . "'," . "image ='" .'<img src="'. $newImage . "' WHERE busTripID ='" . $trip . "'";
$result=mysqli_query($connection,$query);
 if (!$result) {
	 printf($query);
      die("update failed");
  }

 echo ("successfully updated");

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>