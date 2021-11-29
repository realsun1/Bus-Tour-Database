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

(isset($_POST['deletebooking']));
$book = $_POST["deletebooking"];

$query = "DELETE FROM book WHERE passengerID = " . $book;
$result=mysqli_query($connection,$query);
 if (!$result) {
    printf($query);
      die("Deleted failed");
  }

 echo ("Successfully deleted");

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>