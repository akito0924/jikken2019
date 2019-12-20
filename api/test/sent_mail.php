<!DOCUTYPE html>
<html>
<head>
    <meta charaset="utf-8">
    <p class="title">仮登録完了</p>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<?php
$login_success_url = 'main.php';
/*if (isset($_SESSION['id'])) {
    header("Location: {$login_success_url}");
}*/
echo "仮会員登録をしました。"; <br />
echo "送信されたメールに記載されているURLに接続し、登録を完了させてください。";
?>
<a href="index.php">ログイン画面へ</a>
</body>
</html>