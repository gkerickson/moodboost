<!DOCTYPE HTML>
<html>
	<head>
		<title>Mood-Boost</title>
		<link href="bootstrap-3.3.5-dist/css/bootstrap.css" type="test/css" rel="stylesheet">
		<link href="MB.css" type="text/css" rel="stylesheet" >
		<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script-->
		<!--script language="JavaScript" src="MB.js"></script-->
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
					<button class="btn btn-default" id="speak-button" type="submit">WOULD YOU LIKE TO SPEAK TO ANOTHER PERSON?</button>
				</div>
				<div id="top-middle">
					<h1>PROJECT MOOD BOOST</h1>
					<a href="/MB.php">
					<img src="https://openclipart.org/download/192852/thumbs-up-right.svg" id="main-img">
					</a>
				</div>
				<div id="top-right">
					<h1>For While You Wait</h1>
					<?php
						$temp = $pdo->query("SELECT link FROM Content");
						echo("<ul>");
						$content = $temp->fetchAll();
						$max = 4;
						if(count($content)<5){
							$max = count($content);
						}
						for ($x=0; $x<$max; $x++){
							echo("<li><a class=\"btn btn-default content-button\" target=\"_blank\" href=\"");
							echo($content[$x][0]);
							echo("\">HERES SOME STUFF FEEL BETTER!!!!</a></li>");
						}
						echo("</ul>");
						?>
				</div>
			</div>
			<div id="bottom-main">

			</div>
			
		</div>
	</body>
</html>