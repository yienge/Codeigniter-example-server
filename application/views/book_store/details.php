        <div class="left_content">
			<?php 
				$result = $query->result();
				$book = $result[0];
			?>
            <div class="crumb_nav">
            <a href="/index.php/book/index">Home</a> &gt;&gt; 
            <a href="/index.php/book/books"><label id="pageName">Books</label></a> &gt;&gt; 
            Details &gt;&gt;
            <?php echo $book->name;?>
            </div>

            <div class="title"><span class="title_icon"><img src="/images/book_store/bullet1.gif" alt="" title="" /></span><?php echo $book->name;?></div>

            <div class="feat_prod_box_details">
                <div class="prod_img">
                    <a href="/index.php/main/details/<?php echo $book->id;?>">
                        <?php if ($book->img!="")
                                echo '<img src="/images/books/'.$book->img.'" height="130px" width="100px" alt="" title="" border="0" />';
                              else
                                echo '<img src="/images/no_image.png" height="130px" width="100px" alt="" title="" border="0" />';
                        ?>
                    </a>
                <br /><br />
                <a href="/images/book_store/big_pic.jpg" rel="lightbox"><img src="/images/book_store/zoom.gif" alt="" title="" border="0" /></a>
                </div>
                <div class="prod_det_box">
                    <div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><?php echo $book->name;?></div>
                    <p class="details"><?php echo $book->detail;?></p>
                    <div class="price"><strong>PRICE:</strong> <span class="red"><?php echo $book->price;?> $</span></div>
                    <div class="price"><strong>STOCK NUMBER:</strong> <span class="red"><?php echo $book->number;?></span></div>
                    <div class="price"><strong>COLORS:</strong>
						<span class="colors"><img src="/images/book_store/color1.gif" alt="" title="" border="0" /></span>
						<span class="colors"><img src="/images/book_store/color2.gif" alt="" title="" border="0" /></span>
						<span class="colors"><img src="/images/book_store/color3.gif" alt="" title="" border="0" /></span>                    
					</div>
                    <a href="/index.php/main/details/<?php echo $book->id;?>" class="more"><img src="/images/book_store/order_now.gif" alt="" title="" border="0" /></a>
                    <div class="clear"></div>
                    </div>
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>

            <div class="social_plugin">
                <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Flocalhost%2Fbooks%2Findex&media=http%3A%2F%2Flocalhost%2Fimages%2Fbooks%2F<?php echo $book->img;?>&description=my%20dev%20site" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <div class="fb-like" data-href="http://localhost/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
            </div>

            <div id="tabs">
                <ul>
                  <li><a href="#tabs-1">More details</a></li>
                  <li><a href="#tabs-2">Related books</a></li>
                  <li><a href="#tabs-3">test tab</a></li>
                </ul>
                <div id="tabs-1">
                    <p><?php echo $book->more;?></p>
                </div>
                <div id="tabs-2">
                    <?php foreach ($related_books->result() as $row) { ?>
                    <div class="book_box">
                        <a href="/index.php/main/details/<?php echo $book->id;?>"><label><?php echo $row->name;?></label></a>
                        <div class="new_prod_bg">
                            <a href="/index.php/main/details/<?php echo $book->id;?>">
                            <?php if ($row->img!="")
                                echo '<img src="/images/books/'.$row->img.'" height="100px" width="80px"  alt="" title="" border="0" />';
                              else
                                echo '<img src="/images/no_image.png" height="100px" width="80px" alt="" title="" border="0" />';
                            ?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div> 
                <div id="tabs-3">
                    <p><?php echo $book->detail;?></p>
                </div>
            </div>

			<div class="fb-comments" data-href="http://example.com" data-num-posts="10" data-width="470">
            </div>
			<div class="fb-comments" data-href="http://localhost/index.php/main/book_store_details/<?php echo $book->id;?>" data-num-posts="10" data-width="470">
            </div>

        <div class="clear"></div>
        </div><!--end of left content-->
