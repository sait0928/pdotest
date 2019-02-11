<?php
$page_title = "管理画面";
include("header.php");

if($_POST['pass'] == "XXXX") {
	include("form.php");
} else {
	echo "<p>パスワードが違います！</p>";
}
?>

<?php
include("footer.php");
?>