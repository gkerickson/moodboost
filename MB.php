<!DOCTYPE HTML>
<html>
	<head>
		<title>MoodBoost</title>
		<!--link href="MB.css" type="text/css" rel="stylesheet" /-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script language="JavaScript" src="MB.js"></script>
	</head>

	<body>
		<!--?php require 'db.php'; ?-->
		<!--select id="mdlst"-->
			<!--?php
				$mood = 0;
                foreach ($pdo->query("SELECT name FROM Mood") as $mood) {
                	echo("<option value=\"$mood\">$mood</option>");
                }               
			?-->
		<!--/select-->
		<h1> How are you feeling today?</h1>
		<?php
			$emotions = array("Sad","Happy","Shitty","Horny");
			foreach ($emotions as $emotion){
				echo "<button type=\"button\">$emotion</button>";
			}
		?>
	</body>
</html>