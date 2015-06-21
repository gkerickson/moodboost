<!DOCTYPE HTML>
<html>
	<head>
		<title>MoodBoost</title>
		<link href="bootstrap-3.3.5-dist/css/bootstrap.css" type="test/css" rel="stylesheet">
		<link href="MB.css" type="text/css" rel="stylesheet" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script language="JavaScript" src="MB.js"></script>
	</head>
	<body>
	   <?php require 'db.php';?>
		<!--select id="mdlst"-->
			<!--?php
//                foreach ($pdo->query("SELECT name FROM Mood") as $mood) {
//                    echo("<option value=\"");
//                    echo($mood[0]);
//                    echo("\">");
//                    echo($mood[0]);
//                    echo("</option>");
//                }
			?-->
		<!--/select-->
		<h1> How are you feeling today?</h1>
		<div>
			<?php
				$temp = $pdo->query("SELECT name FROM Mood");
				$emotions = $temp->fetchAll();
				$length = count($emotions);
				for ($x = 0; $x < $length; $x++){
					echo("<button class=\"btn btn-default square\" type=\"submit\">");
					echo($emotions[$x][0]);
					echo("</button>");
				}
			?>
		</div>
	</body>
</html>