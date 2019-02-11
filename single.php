<?php
$page_title="Simple Blog > Single Page";
include("header.php");

$id = strstr($_SERVER['REQUEST_URI'], 'id=');

include("pdo.php");

try {
	$pdo = new PDO($dsn, $user, $pass);
	$sql = 'SELECT * FROM posts WHERE '.$id;
	$stmt = $pdo->query($sql);
	$stmt->execute();
	if($row = $stmt->fetch()) {
		$title = $row['title'];
		$content = $row['content'];
	}
	$pdo = null;
} catch(PDOException $e) {
	exit('error'.$e-getMessage());
}
?>

<h3><span><?php echo $title; ?></span></h3>
<p><?php echo $content; ?></p>
<p><a href="delete.php?<?php echo $id; ?>">[記事を削除する]</a></p>

<?php
include("footer.php");
?>