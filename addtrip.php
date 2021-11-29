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
<h1>Here are the bus trips added:</h1>
<ol>
<?php

$newID = $_POST["newID"];
$newName = $_POST["newName"];
$newStart = $_POST["newStart"];
$newEnd = $_POST["newEnd"];
$newCountry = $_POST["newCountry"];
$newLicense = $_POST["newLicense"];
$newImage = $_POST["newImage"];

if ($newID < 0) {
   die("invalid, enter a trip id greater than 0");
}

if ($newStart > $newEnd) {
   die("invalid, enter a starting date less than end date");
}

$query = "INSERT INTO bustrip VALUES ('" . $newID . "','" . $newStart . "','" . 
		$newEnd . "','" . $newCountry . "','" . $newName . "','" . $newLicense .  "','" .  '<img src="' . $newImage ."')";
$result=mysqli_query($connection,$query);
 if (!$result) {
      die("failed, try to enter a valid trip that does not already exist or a valid bus (license id)");
  }

 echo ("successfully added ");
 echo ($newName);

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>