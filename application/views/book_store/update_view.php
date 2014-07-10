<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require_once(APPPATH.'views/book_store/head.php'); ?>
<body>
<div id="fb-root"></div>
<div id="wrap">

  <div class="header">
    <div class="logo"><a href="/index.php/main/book_store"><img src="/application/views/book_store/images/logo.gif" alt="" title="" border="0" /></a></div>     
    <div id="menu">
            <ul id="navigator">
            <li id="index"><a href="/index.php/book/index">home</a></li>
            <li id="about"><a href="/index.php/book/about">about us</a></li>
            <li id="books"><a href="/index.php/book/books">books</a></li>
            <li id="special"><a href="/index.php/book/special_books">specials books</a></li>
            <li id="account"><a href="/index.php/book/account">my accout</a></li>
            <li id="register"><a href="/index.php/book/register">register</a></li>
            <li id="contact"><a href="/index.php/book/contact">contact</a></li>
            <li id="logout"><a href="/index.php/book/logout">logout</a></li>
            <li id="add" class="selected"><a href="/index.php/book/add">add book</a></li>
            <li id="edit"><a href="/index.php/book/edit">edit book</a></li>
            <li id="dummy"><a href="/index.php/book/edit">dummy link</a></li>
            </ul>
    </div>
  </div>

  <div class="center_content">
    <?php require_once(APPPATH.'views/book_store/update.php'); ?>
    <?php require_once(APPPATH.'views/book_store/right_content.php'); ?>
  </div><!--end of center content-->
  <div class="clear"></div>
  <?php require_once(APPPATH.'views/book_store/footer.php'); ?>
</div>

  <?php require_once(APPPATH.'views/book_store/js.php'); ?>
</body>
</html>
