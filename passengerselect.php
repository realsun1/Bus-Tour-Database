<?php

(isset($_POST['passengerbooking']));

 $query = "SELECT * FROM passenger";
 $result = mysqli_query($connection,$query);
 if (!$result) {
     die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
     echo "<option value=". $row['passengerID'] .  ">" . $row["firstName"] . " " . $row["lastName"] ."</option>";
 }                                                                                        
 mysqli_free_result($result);
?>