<h1> MEMBERS </h1>

<?php
				
	foreach($users as $user) {
		
    echo "<div class='thumbnail'>";
	echo "<img src='https://api.adorable.io/avatars/180/" . $user->fName . "@members.php' class='img-rounded img-responsive'>";
	echo "<div class='caption'><h3>" . $user->fName . " | " . $user->charName . "</h3>";
	echo "<p>" . "Rank: " . $user->rank . "<br>" . "Professions: " . $user->profession_pri . " | " . $user->profession_sec . "</p>" . "<br>";
	echo "<p><a href='" . "http://localhost:8888/Fellowship/index.php" . "/delete_guildie/delete_guildie_id/" . $user->user_id . "' role='button'><button id='delete' class='btn btn-default'>DELETE</button></a>";
	echo "<a href='#" . "' role='button'><button id='update' class='btn btn-default'>UPDATE</button></a>";
	echo "</p></div></div>";
}
?>