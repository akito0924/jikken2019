<?php
session_start();

if(!isset($_SESSION["name"])) {
    $no_login_url = "index.php";
    header("Location: {$no_login_url}");
    exit;
}
echo "ログインしました";
?>