<!DOCTYPE HTML>
<html>
	<head></head>

	<body>

		<?php
        require 'db.php';
		?>
		<?php

        $proc = $_POST["p"];
        

        if ($proc == "0") {
            $mood = $_POST["m"];
            unset($_COOKIE["mbctag"]);
            $pdo -> query("INSERT INTO Tags (mood) VALUES ('" . $mood . "');");
            $temp = $pdo -> query("SELECT MAX(tag) FROM Tags;");
            $ndata = $temp -> fetchAll();
            $tag = $ndata[0][0];
            $temp = $pdo -> query("SELECT MIN(tag), COUNT(*) FROM Tags WHERE tag != " . $tag . " AND mood = '" . $mood . "';");
            $ndata = $temp -> fetchAll();
            $tag2 = $ndata[0][0];
            $chk = $ndata[0][1];
            if (($chk . "") != "0") {
                $pdo -> query("DELETE FROM Tags WHERE tag = " . $tag . " OR tag = " . $tag2 . ";");
                $pdo -> query("INSERT INTO Chats VALUES(" . $tag . "," . $tag2 . ");");
                setcookie("mbctag", $tag, time() + 0);
                $pdo -> query("INSERT INTO Chats VALUES(" . $_COOKIE["mbctag"] . "," . $tag2 . ");");
            }
        } else if ($proc == "1") {
            $pdo -> query("DELETE FROM Chats WHERE taga = " . $_COOKIE["mbctag"] . " OR tagb = " . $_COOKIE["mbctag"] . ";");
            $pdo -> query("DELETE FROM Msgs WHERE pfrm = " . $_COOKIE["mbctag"] . " OR pto = " . $_COOKIE["mbctag"] . ";");
            unset($_COOKIE["mbctag"]);
        } else if ($proc == "2") {
            if(isset($_COOKIE["mbctag"])){
            $txt = $_POST["t"];
            $temp = $pdo -> query("SELECT taga FROM Chats WHERE tagb = ". $_COOKIE["mbctag"] ." UNION SELECT tagb FROM Chats WHERE taga = ". $_COOKIE["mbctag"] .";");
            $ndata = $temp -> fetchAll();
            $tag = $ndata[0][0];
            $pdo -> query("DELETE FROM Msgs WHERE pfrm = " . $_COOKIE["mbctag"] . " OR pto = " . $_COOKIE["mbctag"] . ";");
            }
        }
		?>
	</body>
</html>