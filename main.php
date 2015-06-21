<!DOCTYPE HTML>
<html>
	<head>
		<title>Mood-Boost</title>
		<link href="bootstrap-3.3.5-dist/css/bootstrap.css" type="test/css" rel="stylesheet">
		<link href="MB.css" type="text/css" rel="stylesheet" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script language="JavaScript" src="main.js"></script>
	</head>
	<body>
        <?php require 'db.php';?>
        
        <?php
	        $mood = $_GET["mood"];
	        $pdo->query("INSERT INTO Data (name,tme) VALUES ('$mood','".date("Y-m-d H:i:s")."');");
        ?>
		<div>
			<div id="top-main">
				<div id="top-left">
					<button class="btn btn-default sqr1" type="submit" id="initCht" display='block'>WOULD YOU LIKE TO SPEAK TO ANOTHER PERSON?</button>
					<button class="btn btn-default sqr1" type="submit" id="endCht" display='none'>...END CONVERSATION</button>
				</div>
				<div id="top-right">
					<h1>Watch Some Videos While You Wait</h1>					

				</div>
				<div id="bottom-main">
				<h3><a href="http://moodboost.dev/moodboost/MB.php">Home</a><h3>
			</div>	
			
			<div id="bottom-main">

			</div>
			
		</div>
	</body>
</html>