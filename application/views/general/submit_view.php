<html>
<head>
	<title>Submit an Article.</title>
</head>
<body>
<?php 
	//echo form_open('main/article_submit'); 
	//echo form_hidden('entry_id', $this->uri->segment(3));
?>
<form action="/index.php/main/article_submit" method="post" accept-charset="utf-8">
<p>title:<input type='text' name='title' /></p>
<p>content:</br><textarea name='content' rows='5'></textarea></p>
<p>category:
<select name="category">
	<option value="Computer">Computer</option>
	<option value="Social">Social</option>
	<option value="Architecture">Architecture</option>
</select>
</p>
<p>file1:<input type='text' name='file1' /></p>
<p>file2:<input type='text' name='file2' /></p>
<p>file3:<input type='text' name='file3' /></p>
<p><input type='submit' value='Submit' /></p>
</form>

</body>
</html>

