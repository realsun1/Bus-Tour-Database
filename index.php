<html>
<head>
	<title>Bus Tour Database</title>
	<link rel="stylesheet" type="text/css" href="page.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>

<script src="dropdownevent.js"></script>

<?php
include 'connectdb.php';	// connect to database
?>


<h1 style="text-align:center;">Bus Tour Database </h1>
<hr>

<h3>Bus Trips </h3> 
<form action="getbustrip.php" method="post">
<input type="submit" class="button" value="Get bus trips">
</form>

<form action="tripascending.php" method="post">
<input type="submit" value="Order by trip name (ascending)">
</form>

<form action="tripdescending.php" method="post">
<input type="submit" value="Order by trip name (descending)">
</form>

<form action="countryascending.php" method="post">
<input type="submit" value="Order by country (ascending)">
</form>

<form action="countrydescending.php" method="post">
<input type="submit" value="Order by country (descending)">
</form>

<hr>

<h3>Update a Bus Trip </h3>

<form action = "updatetrip.php" method = "post">

Select Trip To Update:

<form action="updatetrip.php" method="post">
<select name="pickbustrip" id="pickbustrip">
 <option value="1">Select Here</option>
<?php
 include "selectupdatetrip.php";
?>
</select>

<br><br>

New Trip Name: <input type = "text" name = "newName"><br>
New Start Date: <input type = "text" name = "newStart"><br>
New End Date: <input type = "text" name = "newEnd"><br>
New Image URL: <input type = "text" name = "newImage"><br>
<input type = "Submit" value = "Update"><br>
</form>

<hr>	<!--horizontal break-->


<h3>Delete a Bus Trip </h3>

<form action = "deletetrip.php" method = "post">
<select name="trip" id="existingtrip">
	<option>Select trip</option>
	<?php
		include "tripselect.php";
	?>
</select>
<input type = "Submit" value = "Delete"><br>
<h6>*Reload page after deletion to update the dropdown box*</h6>
</form>

<hr>	<!--horizontal break-->


<h3>Enter a New Bus Trip </h3>

<form  action = "addtrip.php" method="post">
New ID: <input type = "number" name = "newID"><br>
New Trip Name: <input type = "text" name = "newName"><br>
New Start Date: <input type = "text" name = "newStart"><br>
New End Date: <input type = "text" name = "newEnd"><br>
New Country: <input type = "text" name = "newCountry"><br>
New License Plate ID: <input type = "text" name = "newLicense"><br>
New Image URL: <input type = "text" name = "newImage" ><br>
<input type = "Submit" value = "Add"><br>
</form>


<hr>	<!--horizontal break-->


<h3>Select a Country to View Bus Trips From</h3>
<form  action = "countryselectview.php" method="post">
	<select name="pickacountry" id="pickacountry">
		<option>Select country</option>
		<?php
			include "countryselect.php";
		?>
	</select>
	<input type = "Submit" value = "View"><br>
</form>
<br>
<hr>	<!--horizontal break-->


<h3>Create a Booking </h3>

<form  action = "createbooking.php" method="post">
	<select name="passengerbook" id="passengerbook">
		<option>Select passenger</option>
		<?php
			include "passengerselect.php";
		?>
	</select>

	<select name="existingtrip" id="existingtrip">
		<option>Select trip</option>
		<?php
			include "tripselect.php";
		?>
	</select>
	<br>
	<br>
	Enter price: <input type = "number" step="0.01" name = "price">

	<input type = "Submit" value = "Create"><br>
</form>
<br>

<hr>	<!--horizontal break-->


<h3>Info About Passengers </h3>
<form  action = "getpassengers.php" method="post">
<input type="submit" value="Get info">
</form>
<hr>	<!--horizontal break-->


<h3>View a Passenger Booking </h3>
<form  action = "viewbooking.php" method="post">
	<select name="passengerbooking" id="passengerbooking">
		<option>Select passenger</option>
		<?php
			include "passengerselect.php";
		?>
	</select>
	<input type = "Submit" value = "View"><br>
</form>
<hr>	<!--horizontal break-->


<h3>Delete a Booking </h3>

<form action = "deletebooking.php" method = "post">
<select name="deletebooking" id="deletebooking">
	<option>Select booking</option>
	<?php
		include "bookingselect.php";
	?>
</select>
<input type = "Submit" value = "Delete"><br>
<h6>*Reload page after deletion to update the dropdown box*</h6>
</form>
<hr>	<!--horizontal break-->


<h3>Bus Trips Without Any Bookings </h3>
<form action="nobookings.php" method="post">
<input type="submit" value="Get">
</form>
<hr>	<!--horizontal break-->

<?php
mysqli_close($connection);
?>

</body>
</html>