<?php
$page_title = "記事削除";
include("header.php");

$id = strstr($_SERVER['REQUEST_URI'], 'id=');
?>

<h2><span>記事を削除する</span></h2>
<p>パスワードを入力</p>
<form action="delete2.php?<?php echo $id; ?>" method="POST">
	<input type="text" name="pass">
	<input type="submit" value="削除">
</form>
<p class="caution">ボタンを押した時点で実行されます</p>

<?php
include("footer.php");
?>