<?php

try {
	
	//データベース情報
	$pdo = new PDO(
		'mysql:host=localhost;dbname=pdo_sample;charset=utf8',
		'root',
		'root'
	);
	//ここから記述

	//プリペアードステートメント...値を用意する
	$stmt = $pdo->prepare("SELECT * FROM posts WHERE id=:id");

	//プリペアードステートメントの:idにバインドする値を指定
	$stmt->bindValue(':id', 7, PDO::PARAM_INT);

	//execute...実行する
	$stmt->execute();

	//fetch...DBの検索結果を一件取り出す
	if($rows = $stmt->fetch()) {
		$title = $rows["title"];
		$content = $rows["content"];
	}
	//取り出した値を出力
	echo $title." ".$content;

} catch (PDOException $e){

	//tryが上手くいかないときにエラー表示する
	exit('error'.$e->getMessage());

}

?>