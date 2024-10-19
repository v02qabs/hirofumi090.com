<html>
	<head>
		<title>hirotake note へようこそ。</title>
		<meta charset='utf-8'/>

	</head>

	<body>
		<h1>hirotake note へようこそ。</h1>
	<hr>
	<p>
	login : <a href="https://hirofumi090.chobi.net/note/login.html">login</a>
		</p>
	<p>
	<?php
	     echo("最新の投稿")?>

	<?php
		$db = new PDO('mysql:host=localhost;dbname=hirofumi090', 'hirofumi090', 'hirofumi090Abc');
	     echo("<br/>");
		echo('<div class="box">');
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	     $stmt = $db->query("SELECT _data from weblog WHERE _data=20241019");
	     foreach($stmt as $row){
		     echo $row['_data'].'<br/>';
	     }
	     $stmt = $db-> query("SELECT name from weblog");
	     foreach($stmt as $row){
		     echo $row['name'];
	     }

	     echo("</div>");
		
?>

	<style>
		div.box{
			background-color: #0088ff;
			width: 200px;
		}
	</style>

	</body>
</html>
