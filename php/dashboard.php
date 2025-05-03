<?php
session_start();

// ログインしているか確認
if (!isset($_SESSION['user_id'])) {
    header('Location: session.php');
    exit();
}

$userId = $_SESSION['user_id'];
$username = $_SESSION['username'];
$userRole = $_SESSION['role'] ?? 'guest'; // 権限がない場合は 'guest' とする

?>

<!DOCTYPE html>
<html>
<head>
    <title>ダッシュボード</title>
</head>
<body>
    <h1>ようこそ、<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?> さん！</h1>
    <p>あなたのユーザーIDは <?php echo $userId; ?> です。</p>

    <h2>ダッシュボードのコンテンツ</h2>

    <?php if ($userRole === 'admin'): ?>
        <div style="background-color: #f0f8ff; padding: 10px; margin-bottom: 10px;">
            <h3>管理者向けメニュー</h3>
            <ul>
                <li><a href="#">ユーザー管理</a></li>
                <li><a href="#">設定</a></li>
                <li><a href="#">レポート</a></li>
            </ul>
        </div>
    <?php elseif ($username === 'takesue'): ?>
        <div style="background-color: #e0f2f7; padding: 10px; margin-bottom: 10px;">
            <h3>一般ユーザー向け情報</h3>
		<a href="note.php">note</a>
            <p></p>
            <p></p>
        </div>
    <?php else: ?>
        <p>ログインしていただくと、より多くの情報がご覧いただけます。</p>
    <?php endif; ?>

    <p><a href="logout.php">ログアウト</a></p>
</body>
</html>
