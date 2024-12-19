<?php
	echo("ようこそ、hironoteへ。\n");
	echo("ok");
	echo("<br/>");
	echo($_GET['pass']);
	$db = new PDO('mysql:host=localhost;dbname=hirofumi090', 'hirofumi090', 'hirofumi090Abc');
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$stmt = $db -> query("SELECT pass FROM login where pass='1210'");
	foreach($stmt as $row){
		echo("Hello.$stmt様");


	}
	echo("login.php");
?>
