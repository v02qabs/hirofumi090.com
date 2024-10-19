<?php
	echo("ようこそ、hironoteへ。\n");
	echo("ok");
	echo("<br/>");
	echo($_GET['pass']);
	$db = new PDO('mysql:host=localhost;dbname=hirofumi090', 'hirofumi090', 'hirofumi090Abc');
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$stmt = $db -> query("SELECT * FROM login");
	foreach($stmt as $row){
		echo $row['pass'];
	
	}


	echo("login.php");
?>
