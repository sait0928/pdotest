<?php

try {
	
	//データベース情報
	$pdo = new PDO(
		'mysql:host=localhost;dbname=pdo_sample;charset=utf8',
		'root',
		'root'
	);
	//ここから記述

	//バインド前にセットする値を指定
	$mytitle = "before";
	$mycontent = "before";

	/*
	プリペアードステートメント
	ここでidのところを''にしていたが、
	idを省略したところ、上手くinsertできた。
	*/
	$stmt = $pdo->prepare("INSERT INTO posts (title,content) VALUES (:title,:content)");

	//bindparam...バインドの後でセットする値を変えられる
	$stmt->bindParam(':title',$mytitle,PDO::PARAM_STR);
	//bindvalue...バインドした時点でセットした値が使われる
	$stmt->bindValue(':content',$mycontent,PDO::PARAM_STR);
	//バインド後にセットする値を指定
	$mytitle = "after";
	$mycontent = "after";

	//execute...実行する
	$stmt->execute();

} catch (PDOException $e){

	//tryが上手くいかないときにエラー表示する
	exit('error'.$e->getMessage());

}

?>