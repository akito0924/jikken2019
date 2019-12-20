<?php

$login_success_url = 'main.php';
/*if ($_SESSION['flag'] == 1 && isset($_SESSION['id'])) {
    header("Location: {$login_success_url}");
}*/
require_once('login.php');

$result_rows = loginConnect();
$id = $_GET['id'];
$token = $_GET['token'];
$date = date("Y/m/d H:i:s");
$messageFlag = 0;

foreach($result_rows as $row){
    if($id == $row['id']){
        $messageFlag = 1;
        if($date <= $row['date']){
            $messageFlag = 2;
            if($token == $row['token']){
                $sql ="UPDATE users SET flag = :flag WHERE id = :id";
                $stmt = $dph->prepare($sql);
                $params = array(':flag' => '1', ':id' => $row['id']);
                $stmt->execute($params);
                $messageFlag = 3;
                break();
            }
        }
    }
}
switch ($messageFlag) {
    case 0:
        echo "仮登録を行なってください。";
    break;
    case 1:
        echo "有効期限が切れています";
    break;
    case 2:
        echo "キーが一致しません。";
    break;
    case 3:
        echo "本登録が完了しました";
    break;
    default:
        echo "エラーが発生しました。";
    break;
}


