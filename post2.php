<?php
$page_title = "管理画面";
include("header.php");
$mytitle = $_POST['title'];
$mycontent = $_POST['content'];

include("pdo.php");

try {
    if(!($mytitle) || !($mycontent)) {
        $check = false;
    } else if(ctype_space($mytitle) || ctype_space($mycontent)) {
        $check = false;
    } else {
        $check = true;
    }
    
    if($check) {
        $pdo = new PDO($dsn, $user, $pass);
    	$stmt = $pdo->prepare("INSERT INTO posts (title,content) VALUES (:title,:content)");
    	$stmt->bindParam(':title',$mytitle,PDO::PARAM_STR);
    	$stmt->bindParam(':content',$mycontent,PDO::PARAM_STR);
    	$stmt->execute();

	    echo "<p>投稿完了しました！</p>";

	    $pdo = null;
    } else {
        echo "<p class='caution'>入力内容に誤りがあります！</p>";
        include("form.php");
    }
} catch(PDOException $e){
	exit('error'.$e->getMessage());
}

include("footer.php");
?>