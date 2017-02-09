<?php

/*
 * Use prepared statements do PDO
 * para sanitizar dados externos em uma query
 */

$dsn = "mysql:host=locahost;dbname=teste-oo";
$root = "root";
$pwd = "";

$pdo = new PDO($dsn, $root, $pwd);

$sql = "insert into users VALUES(null, 'vitorHugo', 'vitor@vitor.com', '')";

$stmt = $pdo->prepare($sql);

$stmt->execute();
