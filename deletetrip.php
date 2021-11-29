<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delete trip</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Deleting a Trip:</h1>
<ol>
<?php

(isset($_POST['trip']));
$trip = $_POST["trip"];

$query = "DELETE FROM bustrip WHERE busTripID = " . $trip;
$result=mysqli_query($connection,$query);
 if (!$result) {
    printf($query);
      die("Deleted failed, this trip has a booking");
  }

 echo ("Successfully deleted");

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>