<?php
#header
$page_title = "Simple Blog";
include("header.php");

#pdo
include("pdo.php");

try {
	$pdo = new PDO($dsn, $user, $pass);
	$sql = 'SELECT * FROM posts ORDER BY id DESC';
	$stmt = $pdo->query($sql);
	$stmt->execute();
	$pdo = null;
} catch(PDOException $e){
	exit('error'.$e->getMessage());
}
?>

<h2><span>Simple Blog</span></h2>

<?php
foreach($stmt as $row) {
?>

<ul>
	<li>
		<p><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></p>
	</li>
</ul>

<?php	
}
?>

<?php
#footer
include("footer.php");
?>