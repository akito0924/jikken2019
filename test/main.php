<?php
session_start();
?>
<!DOCUTYPE html>
<html lang="ja">
    <head>
        <meta charaset="utf-8">
        <p class="title">サークル一覧</p>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <?php 
        $url = 'register.php';
        
        if (!isset($_SESSION['flag'])) {
            header("Location: {$url}");
        }
        
        require_once("circle.php");
        $circle_rows = circleConnect();
        foreach($circle_rows as $row){
            echo "<button onclick=\"location.href='/jikkenb/api/test/detail.php?name=".$row['name']."'\">".$row['name']."</button><br />";
        }
        ?>
    </body>
</html>