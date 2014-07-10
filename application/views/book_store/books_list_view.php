<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require_once(APPPATH.'views/book_store/head.php'); ?>
<body>
<div id="wrap">

       <div class="header">
            <div class="logo"><a href="/index.php/main/book_store"><img src="/application/views/book_store/images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
			<ul id="navigator">
            <li><a href="/index.php/book/index">home</a></li>
            <li><a href="/index.php/book/about">about us</a></li>
            <li class="selected"><a href="/index.php/book/books">books</a></li>
            <li><a href="/index.php/book/special_books">specials books</a></li>
            <li><a href="/index.php/book/account">my accout</a></li>
            <li><a href="/index.php/book/register">register</a></li>
            <li><a href="/index.php/book/contact">contact</a></li>
            <li><a href="/index.php/book/logout">logout</a></li>
            </ul>
        </div>     
       </div>

       <div class="center_content">
       <?php require_once(APPPATH.'views/book_store/books_image.php'); ?>
       <?php require_once(APPPATH.'views/book_store/right_content.php'); ?>
       </div><!--end of center content-->
       <div class="clear"></div>

<?php require_once(APPPATH.'views/book_store/footer.php'); ?>
</div>
</body>
</html>
