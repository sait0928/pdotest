<?php

try {
	
	//データベース情報
	$pdo = new PDO(
		'mysql:host=localhost;dbname=pdo_sample;charset=utf8',
		'root',
		'root'
	);
	//ここから記述

	$myid = 1;//変更したいデータのid
	$mytitle = update;//変更後のタイトル名

	//プリペアードステートメント
	$stmt = $pdo->prepare("UPDATE posts SET title=:title WHERE id=:id");

	//バインドする値を指定
	$stmt->bindParam(':title', $mytitle, PDO::PARAM_STR);
	$stmt->bindValue(':id', $myid, PDO::PARAM_INT);

	//実行
	$stmt->execute();

} catch (PDOException $e){

	//エラー
	exit('error'.$e->getMessage());

}

?>