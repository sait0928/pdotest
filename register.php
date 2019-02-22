<?php
$page_title = "登録";
include("header.php");
?>

<form action="register2.php" method="POST">
	<ul>
		<li><input type="text" name="name" placeholder="User_Name"></li>
		<li><input type="text" name="email" placeholder="E_Mail"></li>
		<li><input type="text" name="password" placeholder="Password"></li>
		<li><input type="submit" value="ユーザー登録"></li>
	</ul>
</form>

<?php
include("footer.php");
?>