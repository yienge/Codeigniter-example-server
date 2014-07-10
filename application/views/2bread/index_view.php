<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TemplateWorld - 2 Breed</title>
<link href="/application/views/2bread/styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="/images/icon.ico" />
</head>

<body>
<div id="topContentWrap">
 <div id="topContent">

<?php require_once(APPPATH.'views/2bread/logo.php'); ?>

  <div id="aboutPanel">
   <div id="home"><a href="#">主頁</a></div>
   <h2>Who We Are</h2>
   <h3>Some Description </h3>
   <p>Plz give me some introductions. <a href="#">some link</a> still introduction bala bala bala bala bala bala bala bala bala bala bala bala bala bala bala bala </p>
   <div class="read"><a href="#">reed more</a></div>
  </div>

  <div id="eventPanel">
   <div id="about"><a href="#">關於</br>我們</a></div>
   <h2>Latest Events</h2>
   <h3>Some Descriptions </h3>
   <ul>
     <?php
			foreach ($query->result() as $row) {
			   echo '<li>';
			   echo '<h2>'.$row->title.'</h2>';
			   echo '<p>'.$row->content.'</p>';
			   echo '<a>Read more</a>';
			   echo '</li>';
           } 
    ?>
   </ul>
  </div>

  <div id="rightPanel">
   <div id="menu">
    <ul>
     <li><a href="#">客戶啥的</a></li>
     <li><a href="#">最新消息</a></li>
     <li><a href="#">線上支援</a></li>
     <li><a href="#">解答</a></li>
     <li><a href="#">論壇</a></li>
     <li><a href="#">未來方向</a></li>
     <li><a href="#">計畫</a></li>
     <li><a href="#" class="bottom">聯絡我們</a></li>
    </ul>
   </div>
   <div id="addBlock"></div>
   <h2>Hot Topics</h2>
   <div id="additionalLinks">
    <ul>
     <?php
			 foreach ($query->result() as $row) {
		       echo '<li><a href="#">'.$row->title.'</a></li>';
		   }
			   require_once(APPPATH.'views/general/test_view.php');
	?>
    </ul>
   </div>
   <div id="iconLinks">
    <a href="#" class="ideas">liberot dictum </a>
    <div class="blank"></div>
    <a href="#" class="signup">liberot dictum </a>
    <div class="blank"></div>
    <a href="#" class="blog">liberot dictum </a>
   </div>
   <div id="newsLetter">
    <h3>Newsletter Signup</h3>
    <input name="news" type="text" value="- Enter Your Email ID -" onfocus="if(this.value=='- Enter Your Email ID -')this.value=''" onblur="if(this.value=='')this.value='- Enter Your Email ID -'"/>
    <div class="blank"></div>
    <a href="#">Submit</a>
   </div>
  </div>
 </div>
</div>

<?php require_once(APPPATH.'views/2bread/middle.php'); ?>
<?php require_once(APPPATH.'views/2bread/footer.php'); ?>

</body>
</html>
