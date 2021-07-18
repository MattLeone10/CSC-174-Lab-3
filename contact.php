<?php 
include "inc/top-part.php"; 
?>
	<form method="post" action="scripts/insert.php">
		<h2>Contact Information</h2>
		<p>Give us your information so we can send you our newsletter!</p>
		<label for="name"> Write down your name:</label> <input type="text" name="name" id="name"><br>
		<label for="email"> Email:</label> <input type="text" name="email" id="email"><br>
		<label for="phone"> Phone:</label> <input type="text" name="phone" id="phone"><br>
		<br>

		<h2>Favorite Place to eat in Ridgewood</h2>
		<p>What is your favorite place to eat in ridgewood?</p>
		<label for="eat"> Write down the location:</label> <input type="text" name="eat" id="eat"><br>

		<h2>Favorite Place to hang out in Ridgewood</h2>
		<p>Where is your favorite place to hang out in ridgewood?</p>
		<label for="hangout"> Write down the location:</label> <input type="text" name="hangout" id="hangout"><br>

		<input type="submit" value="Send us your info!">
<?php include "inc/bottom-part.php"; ?>