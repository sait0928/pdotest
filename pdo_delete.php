<?php

try {
	
	//データベース情報
	$pdo = new PDO(
		'mysql:host=localhost;dbname=pdo_sample;charset=utf8',
		'root',
		'root'
	);
	//ここから記述

	$myid = 5;//削除したいデータのid

	//プリペアードステートメント
	$stmt = $pdo->prepare("DELETE FROM posts WHERE id=:id");

	//バインドする値を指定
	$stmt->bindValue(':id', $myid, PDO::PARAM_INT);

	//実行
	$stmt->execute();

} catch (PDOException $e){

	//エラー
	exit('error'.$e->getMessage());

}

?>