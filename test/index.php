<!DOCUTYPE html>
<html>
<head>
    <meta charaset="utf-8">
    <p class="title">ログインフォーム</p>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<?php
session_start(); 

require_once('login.php');

$login_success_url = 'main.php';

if (isset($_SESSION['flag']) && isset($_SESSION['id'])) {
    header("Location: {$login_success_url}");
}

if (isset($_POST['login'])) {
    $result_rows = loginConnect();
    foreach ($result_rows as $row) {
        $name = $row['name'];
        $password_hash = $row['password_hash'];
        if ($name == $_POST['name']) {
            if ($password_hash == sha1($_POST['password'])) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['flag'] = $row['flag'];
                header("Location: {$login_success_url}");
                exit();
            }
        }
    }
    echo "※ID、もしくはパスワードが間違っています。<br>　もう一度入力して下さい。";
}
?>

<form action="index.php" method="POST">
    <p>名前：<input type="text" name="name"></p>
    <p>パスワード：<input type="password" name="password"></p>
    <input type="submit" name="login" value="ログイン">
</form>
    <a href="register.php">新規登録はこちら</a>
</body>
</html>

