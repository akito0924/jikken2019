<?php
function circleConnect(){
    //$pdo = new PDO('mysql:host=localhost;dbname=circle_db', 'user01', 'jikken2019');
    //$circle_rows = $pdo->query('SELECT * FROM circle_table');
    $circle_rows[] = array("name" => "ああ");
    $circle_rows[] = array("name" => "いい");
    $circle_rows[] = array("name" => "うう");
    return $circle_rows;
}
