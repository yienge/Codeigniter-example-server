<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Book Store</title>
<link rel="stylesheet" type="text/css" href="/application/views/book_store/style.css" />

</head>
<body>
<div id="wrap">

<?php require_once(APPPATH.'views/book_store/header.php'); ?>

       <div class="center_content">
       <?php require_once(APPPATH.'views/book_store/cart.php'); ?>
       <?php require_once(APPPATH.'views/book_store/right_content.php'); ?>
       </div><!--end of center content-->
       <div class="clear"></div>

<?php require_once(APPPATH.'views/book_store/footer.php'); ?>
</div>
</body>
</html>
