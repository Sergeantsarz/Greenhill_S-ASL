<?php
	/*
		<!--
			Sarah R. Greenhill
			ASL - Footer - July 13, 2016
		-->
	*/
	$guildName = "The Headless Hunt";
?>

<h1>Guild Control Center</h1>
<hr>
<h2>Welcome to <?php echo $guildName ?>'s Control Panel!</h2>
<h4><i>New Guild Member</i></h4>

<form action="" method="post">
	<input type="text" name="fName" placeholder="First Name" value="" />
	<input type="text" name="charName" placeholder="Character Name" value="" />
	<input type="text" name="rank" placeholder="Rank" value="" />
	<input type="text" name="profession_pri" placeholder="Primary Profession" value="" />
	<input type="text" name="profession_sec" placeholder="Secondary Profession" value="" />
	<br>
	<br>
	<input class="submit" type="submit" name="submit" value="Add New Member" />
</form>
<hr>

<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Success! Data Inserted.</h3></CENTER><br>
<?php } ?>
