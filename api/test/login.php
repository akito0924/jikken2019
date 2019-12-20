<?php
function loginConnect(){
    $pdo = new PDO ('mysql:host=localhost;dbname=jikkenb', 'root', '');
    $result_rows = $pdo->query('SELECT * FROM users');
    return $result_rows;
}
