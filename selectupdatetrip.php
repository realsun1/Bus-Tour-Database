<?php

(isset($_POST['pickbustrip']));

 $query = "SELECT * FROM bustrip";
 $result = mysqli_query($connection,$query);
 if (!$result) {
     die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
     echo "<option value=". $row['busTripID'] .  ">" . $row["tripName"] ."</option>";
 }                                                                                        
 mysqli_free_result($result);
?>
