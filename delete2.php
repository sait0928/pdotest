<?php
$page_title = "記事削除";
include("header.php");
$id = strstr($_SERVER['REQUEST_URI'], 'id=');

include("pdo.php");
try {
    
    if($_POST['pass'] == "XXXX") {
	    $pdo = new PDO($dsn, $user, $pass);
        $sql = 'DELETE FROM posts WHERE '.$id;
        $stmt = $pdo -> query($sql);
        $stmt -> execute();
        
        echo "<p>削除完了しました。</p>";
    } else {
	    echo "<p>パスワードが違います！</p>";
    }
    
    $pdo = null;
} catch (PDOException $e) {
    exit ($e -> getMessage());
}

include("footer.php");
?>