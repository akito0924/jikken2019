<!DOCUTYPE html>
<html>
<head>
    <meta charaset="utf-8">
    <p class="title">サークル詳細</p>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<?php
session_start();
require_once("main.php");
if(isset($_SESSION["name"])){
    echo "111";
}
echo $_SESSION["name"];
?>
</body>
</html>