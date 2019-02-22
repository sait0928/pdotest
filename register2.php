<?php
$page_title = "登録";
include("header.php");

include("pdo.php");

try{
	$pdo = new PDO($dsn, $user, $pass);
	$sql = 'insert into users (name, email, password) values (:name, :email, :password)';
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':name', $my_name, PDO::PARAM_STR);
	$stmt->bindParam(':email', $my_email, PDO::PARAM_STR);
	$stmt->bindParam(':name', $my_password, PDO::PARAM_STR);
	$stmt->execute();
} catch(PDOException $e) {
	exit($e->getMessage());
}

include("footer.php");
?>