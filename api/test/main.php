<!DOCUTYPE html>
<html lang="ja">
    <head>
        <meta charaset="utf-8">
        <p class="title">サークル一覧</p>
    </head>
    <body>
        <?php 
        $url = 'index.php';

        /*if ($_SESSION['flag'] == 0) {
            header("Location: {$url}");
        }*/
        
        require_once("circle.php");
        $circle_rows = circleConnect();
        foreach($circle_rows as $row){
            echo "<button onclick=\"location.href='/detail.php?name=".$row['name']."'\">".$row['name']."</button><br />";
        }
        ?>
    </body>
</html>