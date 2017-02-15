<?php

$dsn = "mysql:host=localhost;dbname=test-oo;port-;charset=utf8";
$root = "root";
$pwd = "";


try {
	$pdo = new \PDO($dsn, $root, $pwd);
	
	$sql = "select * from user where email = :email";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(
			":email",
			filter_input(INPUT_POST,'email')
			);
	
	$stmt->execute();
	
	while ($data = $stmt->fetch(PDO::FETCH_ASSOC) !== false) {
		echo $data['email'];
	}
	
} catch (PDOException $e) {
	echo $e->getMessage();		
}