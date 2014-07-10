  <div class="header">
    <div class="logo"><a href="/book/index"><img src="/images/book_store/logo.gif" alt="" title="" border="0" /></a></div>     
    <div id="menu">
        <ul id="navigator">
            <li id="Home"><a href="/book/index">Home</a></li>
            <li id="About Us"><a href="/book/about">About Us</a></li>
            <li id="Books"><a href="/book/books">Books</a></li>
            <li id="Special Books"><a href="/book/special_books">Specials Books</a></li>
            <li id="My Account"><a href="/book/account">My Accout</a></li>
            <li id="Register"><a href="/book/register">Register</a></li>
            <li id="Contact Us"><a href="/book/contact">Contact Us</a></li>
            <li id="RSS"><a href="/book/RSS">RSS</a></li>
            <li id="Logout"><a href="/book/logout">Logout</a></li>
            <?php if ($user_name != '') 
                        echo '<li id="Edit Books"><a href="/book/edit">Edit Books</a></li>';
            ?>
        </ul>
    </div>
  </div>
