<?php
	/*
		<!--
			Sarah R. Greenhill
			ASL - Update - July 28, 2016
		-->
	*/
	$guildName = "The Headless Hunt";
?>
<h1>Guild Control Center</h1>
<hr>
<h2>Welcome to <?php echo $guildName ?>'s Control Panel!</h2>

<!--DISPLAY OTHER MEMBERS TO UPDATE
	<?php foreach ($users as $user): ?>
<li><a href="<?php echo base_url() . "index.php/update_ctrl/show_guildie_id/" . $user->user_id; ?>"><?php echo $user->fName; ?></a></li>
<?php endforeach; ?>
-->

<?php foreach ($single_user as $user): ?>
<h4><i>Update <?php echo $user->fName; ?>'s Character: <?php echo $user->charName; ?></i></h4>
<form action="<?php echo base_url() . "index.php/update_ctrl/update_guildie_id"?>" method="post">
	
	<input type="hidden" id="hide" name="user_id" value="<?php echo $user->user_id; ?>">
	
	<input type="text" name="fName" placeholder="First Name" value="<?php echo $user->fName; ?>" />
	<input type="text" name="charName" placeholder="Character Name" value="<?php echo $user->charName; ?>" />
	<input type="text" name="rank" placeholder="Rank" value="<?php echo $user->rank; ?>" />
	<input type="text" name="profession_pri" placeholder="Primary Profession" value="<?php echo $user->profession_pri; ?>" />
	<input type="text" name="profession_sec" placeholder="Secondary Profession" value="<?php echo $user->profession_sec; ?>" />
	<br>
	<br>
	<input class="submit" type="submit" name="submit" value="Update Member" />
</form>
<?php endforeach; ?>
<hr>