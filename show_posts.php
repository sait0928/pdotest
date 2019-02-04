<?php
header("Content-type: text/html; charset=utf-8");

$dsn = 'mysql:host=localhost;dbname=pdo_sample;charset=utf8';
$user = 'root';
$password = 'root';

try {
	$dbh = new PDO($dsn, $user, $password);
	echo "success";

	$sql = 'SELECT * FROM posts';
	$statement = $dbh -> query($sql);

	//record件数
	$row_count = $statement->rowCount();

	//接続切断
	$dbh = null;

} catch (PDOException $e) {
	exit('error'.$e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="ja-jp">
<head>
	<title>show_posts</title>
	<meta charset="utf-8">
</head>
<body>

	<h1>show_posts</h1>

	<p>record:<?php echo $row_count; ?></p>

	<table border='1'>
		<tr>
			<td>id</td>
			<td>title</td>
			<td>content</td>
		</tr>

		<?php
		foreach($statement as $row) {
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['title'] ?></td>
			<td><?php echo $row['content'] ?></td>
		</tr>
		<?php	
		}
		?>

	</table>

</body>
</html>