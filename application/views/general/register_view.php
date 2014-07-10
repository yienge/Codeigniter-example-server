<html>
<head>
    <title>Register a account.</title>
</head>
<body>
<?php 
    //echo form_open('main/article_submit'); 
    //echo form_hidden('entry_id', $this->uri->segment(3));
?>
<?php echo validation_errors(); ?>
<form action="/index.php/form/index" method="post" accept-charset="utf-8">
<?php echo form_error('user_name'); ?>
<p>user_name: <input type='text' name='user_name' value="<?php echo set_value('user_name'); ?>" size="50"/></p>
<?php echo form_error('password'); ?>
<p>password: <input type='password' name='password' value="" size="50"/></p>
<?php echo form_error('email'); ?>
<p>email: <input type='text' name='email' value="<?php echo set_value('email'); ?>" size="50"/></p>
<?php echo form_error('name'); ?>
<p>real_name: <input type='text' name='name' value="<?php echo set_value('name'); ?>" size="50"/></p>
<?php echo form_error('birth'); ?>
<p>birth: <input type='text' name='birth' value="<?php echo set_value('birth'); ?>" size="10"/></p>
<p>blood_type:
<select name="blood_type">
    <option value="0">A</option>
    <option value="1">B</option>
    <option value="2">O</option>
    <option value="3">AB</option>
</select>
</p>
<p>sex:
<select name="sex">
    <option value="0">Male</option>
    <option value="1">Female</option>
</select>
<p><input type='submit' value='Submit' /></p>
</form>
</body>
</html>
