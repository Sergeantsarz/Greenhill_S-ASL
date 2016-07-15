<?php
	/*
		<!--
			Sarah R. Greenhill
			ASL - Header - July 13, 2016
		-->
	*/
	
	//Your Guild's Name
	$guildName = "The Headless Hunt";
	
	echo "<h2>" . "Welcome to " . $guildName . "'s corner of the internet!" . "</h2>";
?>
<h3>Please log in to access the roster:</h3>
<form action="?action=login" method="post">
	<input type="text" name="username" placeholder="Username" value="" required/>
	<input type="password" name="passcode" placeholder="Passcode" value="" required/>
	<input type="submit" name="submit" value="Sign In" />
</form>
<br>
<br>
<br>