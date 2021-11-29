<?php

(isset($_POST['deletebooking']));

 $query = "SELECT * FROM book";
 $result = mysqli_query($connection,$query);
 if (!$result) {
     die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
     echo "<option value=". $row['passengerID'] .  ">" . "passengerID=" . $row["passengerID"] .  ", tripID=" .  $row["busTripID"] .   ", price=" .$row["pricePaid"] ."</option>";
 }                                                                                        
 mysqli_free_result($result);
?>