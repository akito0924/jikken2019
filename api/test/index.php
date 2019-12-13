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

$error_message = "";

if(isset($_POST["login"])) {
     $pdo = connect();
    if($_POST["name"] == "hoge" && $_POST["password"] == "hogehoge") {
        $_SESSION["name"] = $_POST["name"];
        $login_success_url = "main.php";
        header("Location: {$login_success_url}");
           exit;
       }
    }
$error_message = "※ID、もしくはパスワードが間違っています。<br>　もう一度入力して下さい。";
}
if($error_message) {
    echo $error_message;
}
?>

<form action="index.php" method="POST">
    <p>ログインID：<input type="text" name="name"></p>
    <p>パスワード：<input type="password" name="password"></p>
    <input type="submit" name="login" value="ログイン">
</form>
</body>
</html>

