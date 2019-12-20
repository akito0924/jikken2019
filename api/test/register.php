<!DOCUTYPE html>
<html>
<head>
    <meta charaset="utf-8">
    <p class="title">新規登録フォーム</p>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<?php
session_start(); 

require_once('login.php');

$regist_success_url = 'main.php';
$sent_mail_url = 'sent_mail.php';

/*if (isset($_SESSION['id'])) {
    header("Location: {$login_success_url}");
}*/

if (isset($_POST['regist'])) {
    if ($_POST['password'] == $_POST['re_password']){
        $name = $POST['name'];
        $password = sha1($_POST['password']);
        $mail = $_POST['mail'];
        $token = sha1(uniqid(rand(),1));
        $flag = 0;
        $PDO= new PDO ('mysql:host=localhost;dbname=jikkenB;charset=utf8','root','');
        $sql=$pdo->prepare('INSERT INTO jikkenb (name, password_hash, mail, token, flag, date) VALUES (:name, :password_hash, :mail, :token, :flag, DATE_ADD(CURRENT_DATE(), INTERVAL 1 DAY))';
        $stmt = $dbh->prepare($sql);
        $params = array(':name'=>$_POST['id'], ':password_hash'=>$password, ':mail'=>$mail, ':token'=>$token, 'flag'=>$flag);
        header("Location: {$regist_success_url}");
        exit();
        //メール送信入れる
    }echo "※パスワードが間違っています。<br>　もう一度入力して下さい。";
}
?>

<form action="mail_send.php" method="POST">
    <p>名前：<input type="text" name="name"></p>
    <p>パスワード：<input type="password" name="password"></p>
    <p>パスワード確認：<input type="password" name="re_password"></p>
    <p>メールアドレス：<input type="text" name="mail"></p>
    <input type="submit" name="regist" value="登録">
</form>
</body>
</html>

