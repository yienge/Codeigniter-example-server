        <div class="right_content">
			<div class="social">
			  <?php if ($user_name != '')
						echo '<div class="greetings"><font color="red">'.$user_name.'</font>，歡迎回來。</div>';?>
              <div class="rss">
              <a href="/index.php/book/RSS"><img src="/images/rss.png" alt="Syndicate icon" title="RSS icon" height="20px" width="20px" border="0"/>
                Click here to syndicate the new books feed.
              </a>
              </div>
			  <div class="g-plusone" data-annotation="inline" data-href="http://www.yahoo.com.tw"></div>
              <div class="fb-like" data-href="http://localhost" data-send="false" data-width="450" data-show-faces="true"></div>
              <div class="padding"></div>
			  <div class="fb-like-box" data-href="https://www.facebook.com/Ne-Yo" data-width="300" data-show-faces="true" data-border-color="red" data-stream="true" data-header="true"></div>
			</div>

            <div class="languages_box">
              <span class="red">Languages:</span>
              <a href="#" class="selected"><img src="/images/book_store/gb.gif" alt="" title="" border="0" /></a>
              <a href="#"><img src="/images/book_store/fr.gif" alt="" title="" border="0" /></a>
              <a href="#"><img src="/images/book_store/de.gif" alt="" title="" border="0" /></a>
            </div>

            <div class="currency">
              <span class="red">Currency: </span>
              <a href="#">GBP</a>
              <a href="#">EUR</a>
              <a href="#" class="selected">USD</a>
            </div>

            <div class="cart">
              <div class="title"><span class="title_icon"><img src="/images/book_store/cart.gif" alt="" title="" /></span>My cart</div>
              <div class="home_cart_content">
              3 x items | <span class="red">TOTAL: 100$</span>
              </div>
              <a href="book_store_cart" class="view_cart">view cart</a>
            </div>
            <div class="title"><span class="title_icon"><img src="/images/book_store/bullet3.gif" alt="" title="" /></span>About Our Store</div>
            <div class="about">
              <p>
              <img src="/images/book_store/about.gif" alt="" title="" class="right" />
                這裡的不要從資料庫中拿比較好，因為是所有頁面共用的，所以建議寫死會好一點，不然每次拿都要戳資料庫。
              </p>
            </div>

            <div class="right_box">
                <div class="title"><span class="title_icon"><img src="/images/book_store/bullet4.gif" alt="" title="" /></span>Promotions</div>
<?php foreach ($promo_books as $row) { ?>
                    <div class="new_prod_box">
                        <a href="/index.php/book/details/<?php echo $row->id;?>"><?php echo $row->name;?></a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="/images/book_store/promo_icon.gif" alt="" title="" /></span>
                        <a href="/index.php/book/details/<?php echo $row->id;?>"><img src="/images/books/<?php echo $row->img;?>" height="110px" width="80px" alt="" title="" border="0" /></a>
                        </div>
                    </div>
<?php } ?>
            </div>

            <div class="right_box">
                <div class="title"><span class="title_icon"><img src="/images/book_store/bullet5.gif" alt="" title="" /></span>Categories</div>
                <ul class="list">
                <li><a href="/index.php/book/category/science/1">Science</a></li>
                <li><a href="/index.php/book/category/computer/1">Computer</a></li>
                <li><a href="/index.php/book/category/social/1">Social</a></li>
                <li><a href="/index.php/book/category/arts/1">Arts</a></li>
                <li><a href="/index.php/book/category/literature/1">Literature</a></li>
                <li><a href="/index.php/book/category/business/1">Business</a></li>
                </ul>
                <div class="title"><span class="title_icon"><img src="/images/book_store/bullet6.gif" alt="" title="" /></span>Partners</div>
                <ul class="list">
                <li><a href="/index.php/book/category/accesories/1">accesories</a></li>
                <li><a href="/index.php/book/category/gifts/1">books gifts</a></li>
                <li><a href="/index.php/book/category/specials/1">specials</a></li>
                <li><a href="/index.php/book/category/holidays/1">hollidays gifts</a></li>
                </ul>
            </div>
        </div><!--end of right content-->
