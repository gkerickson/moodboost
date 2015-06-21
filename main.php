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
        //echo("INSERT INTO Data (name,tme) VALUES ('");echo("$mood','"+time()+"');");
        ?>
		<div>
			<div id="top-main">
				<div id="top-left">
					<button class="btn btn-default" type="submit">Do you need to talk?</button>
				</div>
				<div id="top-right">
					<p>test</p>
				</div>
			
				<div id="bottom-main">

				</div>
			</div>
		</div>
	</body>
</html>