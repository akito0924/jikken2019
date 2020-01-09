<?php
function circleConnect(){

    $pdo = new PDO ('mysql:host=localhost;dbname=jikkenb', 'root', '');
    $circle_rows = $pdo->query('SELECT * FROM circles');
    return $circle_rows;
}