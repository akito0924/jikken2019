<?php
session_start();
?>
<!DOCUTYPE html>
<html lang="ja">
    <head>
        <meta charaset="utf-8">
        <p class="title">詳細</p>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <?php 
        $url = 'index.php';

        if (is_null($_SESSION['flag'])) {
            header("Location: {$url}");
        }
        
        require_once("circle.php");
        $circle_rows = circleConnect();

        $name = isset($_GET['name']) ? $_GET['name'] : null;

        foreach($circle_rows as $row){
            if ($row['name'] == $name) {
                echo "サークル名：".$name.'<br />';
                echo "　活動内容：".$row['abstract'];
                exit();
            }
        }
        ?>
    </body>
</html>
