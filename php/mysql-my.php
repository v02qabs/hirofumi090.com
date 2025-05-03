<?php
$servername = "mysql321.phy.lolipop.lan"; // MySQLサーバーのアドレス
$username = "LAA1661641";    // MySQLのユーザー名
$password = "user";    // MySQLのパスワード
$dbname = "LAA1661641-user"; // データベース名

// 接続を作成
$conn = new mysqli($servername, $username, $password, $dbname);

	
// 接続エラーの確認
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// テーブルを作成するSQLクエリ
$sqlCreateTable = "CREATE TABLE users (
    name ,
    password
)";
// SQLクエリを実行してテーブルを作成
if ($conn->query($sqlCreateTable) === TRUE) {
    echo "テーブル 'users' が作成されました。\n";
} else {
    echo "テーブル作成エラー: " . $conn->error . "\n";
}


// データを挿入するSQLクエリ
/*$sqlInsertData = "INSERT INTO users (name, password) VALUES
('0412', 'toor'),

// SQLクエリを実行してデータを挿入
if ($conn->query($sqlInsertData) === TRUE) {
    echo "データが登録されました。\n";
} else {
    echo "データ登録エラー: " . $conn->error . "\n";
}
*/




// データベース接続を閉じる
$conn->close();
?>
