<?php
session_start();

$servername = "mysql323.phy.lolipop.lan"; // MySQLサーバーのアドレス
$username = "LAA1661641";    // MySQLのユーザー名
$password = "user";    // MySQLのパスワード
$dbname = "LAA1661641-user"; // データベース名






// ログイン処理のコード (例: データベース照合)
$username = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'takesue' && $password === '0412') {
    // ログイン成功
    $_SESSION['user_id'] = 123; // ユーザーIDをセッションに保存
    $_SESSION['username'] = $username;
    header('Location: dashboard.php'); // ダッシュボードへリダイレクト
    exit();
} else {
    // ログイン失敗
    $error = 'ユーザー名またはパスワードが間違っています。';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="name">ユーザー名:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit">ログイン</button>
    </form>
</body>
</html>
