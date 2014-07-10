<html>
<head>
    <title>Login page</title>
</head>
<body>
<?php 
    //echo form_open('main/article_insert'); 
    //echo form_hidden('entry_id', $this->uri->segment(3));
?>
<form action="/index.php/main/login" method="post" accept-charset="utf-8">

<p>user_name: <input type='text' name='user_name' /></p>
<p>password: <input type='password' name='password' /></p>
<p><input type='submit' value='Submit' /></p>

</form>
</body>
</html>
