<!DOCUTYPE html>
<html lang="ja">
    <head>
        <meta charaset="utf-8">
        <p class="title">サークル一覧</p>
    </head>
    <body>
        <?php 
        require_once("circle.php");
        $circle_rows = circleConnect();
        foreach($circle_rows as $row){
            echo "<button onclick=\"location.href='/circle_info.php?test=".$row['name']."'\">".$row['name']."</button><br />";
        }
        ?>
    </body>
</html>