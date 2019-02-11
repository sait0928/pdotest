<?php
$page_title = "認証画面";
include("header.php");
?>

<h2><span>管理画面ログイン</span></h2>
<p>パスワードを入力してください</p>
<form action="post.php" method="POST">
	<input type="text" name="pass">
	<input type="submit" value="認証">
</form>

<?php
include("footer.php");
?>