<?php
	session_start();

	// ログインしているか確認
	if (!isset($_SESSION['user_id'])) {
	    header('Location: dashboard.php');
	    exit();
	}


?>
