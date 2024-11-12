<?php
	echo("ようこそ、hironoteへ。\n");
	echo("ok");
	echo("<br/>");
	echo($_GET['pass']);
	$db = new PDO('mysql:host=localhost;dbname=hirofumi090', 'hirofumi090', 'hirofumi090Abc');
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$stmt = $db -> query("SELECT * FROM login where pass=pass ");
	foreach($stmt as $row){
		echo("$stmtお疲れ様でした。");

	}
	echo("login.php");
?>
