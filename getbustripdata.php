<?php
$query = "SELECT * FROM bustrip";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
     foreach($row as $value){   // convert array to string
        echo $value, '<br>';    // print values, then line break
    }
}
mysqli_free_result($result);
?>