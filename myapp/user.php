<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>PC技術・ドキュメント</title>
	<link rel="stylesheet" href="layout.css" type="text/css">
</head>

<body>

<div class="wrapper">
<header class="header">
	<nav class="g-nav-03">
		<ul class="clearfix">
		<li class="home"><a href="https://hirofumi090.chobi.net"><span></span>HOME</a></li>
			<li class="flower"><a href=""><span></span>言語</a>
				<ul class="second-level">
					<li><a href="https://hirofumi090.chobi.net/java/index.html">java</a></li>
					<li><a href="https://hirofumi090.chobi.net/myapp/index.html">私の作ったアプリ</a></li>
					</ul>
			</li>
			
			<li class="gift"><a href="info.html"><span></span>情報</a>
			</li>
			<li class="shop"><a href="#"><span></span>お店情報</a></li>
			<li class="contact"><a href="#"><span></span>お問い合せ</a></li>
			<li class="shop"><a href="./blog/index.html"><span></span>blog</a></li>
	</nav>
</header>


<form action="note.php" method="POST">
	<textarea id="note" name="note"></textarea>
	<button>ok.</button>
</form>


<?php
	echo "Hello";
	echo "user";
	echo $_GET["pass"];
	if($_GET["pass"] == "0412"){
		echo "武居紘史";
		echo "<br/>";
		

	}
	else{
		echo "other";
	}



?>	


<style>
#menu1
{
	padding: 10px;
	width: 200px;
	border: ridge 3px red;
}

</style>



</body>
</html>
