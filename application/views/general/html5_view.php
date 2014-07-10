<!DOCTYPE html>
<html lang="en">
<head>
<title>Test Page</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/css/html5_style.css" />
<script type="text/javascript" src="/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/js/jquery.toastmessage.js"></script>
<script type="text/javascript" src="/js/jq_test_ajax.js"></script>
<!--
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
<script type="text/javascript" src="/js/jq_test.js"></script> 
-->
<nav>
<ul>
<li id="test"><a href="#">home</a></li>
<li><a href="#">blog</a></li>
<li><a href="#">gallery</a></li>
<li><a href="#">about</a></li>
</ul>
</nav>

</head>

<body>


<div id="msg"></div>
<div class="input">
  <select id="gender">
    <option>Male</option>
    <option>Female</option>
  </select>
<br />
  <input type="text" id="name" />
<br />
  <input type="button" value="Click Me" id="btn" />
  <img src="/images/ico.jpg" style="display:none" id="loading" />
</div>

<br />
<br />
<div id=""></div>
  <input type="file" id="upload_file" />
<br />
  <input type="button" value="upload" id="upload" />
  <img src="/images/ico.jpg" style="display:none" id="loading" />
</div>
<br />
<br />

<div class="center_content">
	<div class="left_content">
<article>
  <header>
    <time datetime="2009-10-22" pubdate>Oct. 22, 2012</time>
    <hgroup>
      <h1>
        <a href="#" rel="bookmark" title="link to this post">Post1</a>
      </h1>
      <h2>The comment of h1</h2>
    </hgroup>
  </header>
  <p>plz use the html outliner to check</p>
</article>

<article>
  <header>
    <time datetime="2009-10-22" pubdate>Oct. 22, 2012</time>
    <hgroup>
      <h1>
        <a href="#" rel="bookmark" title="link to this post">Post2</a>
      </h1>
      <h2>The comment of h1</h2>
    </hgroup>
  </header>
  <p>plz use the html outliner to check 2</p>
</article>

<article>
  <header>
    <time datetime="2009-10-22" pubdate>Oct. 22, 2012</time>
    <hgroup>
      <h1>
        <a href="#" rel="bookmark" title="link to this post">Post3</a>
      </h1>
      <h2>The comment of h1</h2>
    </hgroup>
  </header>
  <p>plz use the html outliner to check</p>
<article>

	</div>
	<div class="right_content">

<form>
<div><input id="test" type="text" name="test" placeholder="Search bookmarks and history" size="50"> 預設輸入佔位字，幾乎都有支援，手機沒支援而已</div>
<div><input name="mail" type="email" size="50" autofocus> email輸入欄位，且opera有支援自動檢查email格式之功能！FF竟然有支援自動對焦！</div>
<div><input name="url"  type="url" size="50"> url輸入欄位，且opera有支援自動檢查email格式之功能！</div>
<div><input id="search" name="search" type="search" size="50"> search輸入欄位，雖然只能用在safari和chrome上XDD，不過搜尋框會變成圓角</div>
<div><input name="spin_value" type="number" min="0" max="10" step="2" value="6" size="50"> spinbox選數字，似乎只有iPhone支援</div>
<div><input name="slider_value" type="range" min="0" max="10" step="2" value="6" size="50"> slider選數字</div>
<div><input type="submit" value="search">
</form>

<br />
<br />
<input type="button" id="sticky_toast" value="Sticky toast"/>
<input type="button" id="nonsticky_toast" value="nonSticky toast"/>

	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>
</div>

<footer>
<nav class="left_nav">
  <p>Navigator:</p>
  <ul>
    <li><a href="#">home</a></li>
    <li><a href="#">blog</a></li>
    <li><a href="#">gallery</a></li>
    <li><a href="#">about</a></li>
  </ul>
</nav>

<nav class="right_nav">
  <p>Channel:</p>
  <ul>
    <li><a href="#">channel1</a></li>
    <li><a href="#">channel2</a></li>
    <li><a href="#">channel3</a></li>
    <li><a href="#">channel4</a></li>
  </ul>
</nav>
</footer>
<!--
<script type="text/javascript" src="/js/practice.js"></script>
-->
</body>
</html>
