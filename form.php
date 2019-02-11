<h2><span>記事を投稿する</span></h2>
<p class="caution">空欄、またはスペースのみの場合は<br/>投稿ができません</p>
<form action='post2.php' method='POST' name='contribute' onsubmit='return check()'>
    <p>タイトル</p>
	<input type='text' name='title'><br/>
	<p>本文</p>
	<textarea name='content'></textarea><br/>
	<input type='submit' value='投稿'>
</form>

<script>
    function check() {
        var a = document.contribute.title.value;
        var b = document.contribute.content.value;
        if (a=='' || b=='') {
            return false;
        } else if (!a.match(/\S/g) || !b.match(/\S/g)) {
            return false;
        }
    }
</script>