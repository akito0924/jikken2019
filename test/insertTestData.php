<?php

$dbh = new PDO ('mysql:host=localhost;dbname=jikkenb', 'root', '');
$dbh->query('insert into jikkenb.circles (name, abstract) values ("サッカー部", "サッカーしてます。")');
$dbh->query('insert into jikkenb.circles (name, abstract) values ("バスケットボール部", "バスケしてます。")');
$dbh->query('insert into jikkenb.circles (name, abstract) values ("バレーボール部", "バレーしてます。")');
$dbh->query('insert into jikkenb.circles (name, abstract) values ("テニスサークル", "テニスしてます。")');
$dbh->query('insert into jikkenb.circles (name, abstract) values ("アカペラサークル", "アカペラしてます。")');
$dbh->query('insert into jikkenb.circles (name, abstract) values ("鉄道サークル", "模型作ってます。")');
$dbh->query('insert into jikkenb.circles (name, abstract) values ("漫画サークル", "漫画作ってます。")');
