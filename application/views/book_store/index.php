        <div class="left_content">
            <div class="title"><span class="title_icon"><img src="/images/book_store/bullet1.gif" alt="" title="" /></span>Featured Books</div>

<?php foreach ($feat_books as $row) { ?>
            <div class="feat_prod_box">
                <div class="prod_img">
                    <a href="/index.php/book/details/<?php echo $row->id;?>">
                            <?php if ($row->img!="")
                                    echo '<img src="/images/books/'.$row->img.'" height="130px" width="100px" alt="" title="" border="0" />';
                                  else
                                    echo '<img src="/images/no_image.png" height="130px" width="100px" alt="" title="" border="0" />';
                            ?>
                    </a>
                </div>
                <div class="prod_det_box">
                    <div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><?php echo $row->name;?></div>
                    <p class="details"><?php echo $row->detail;?></p>
                    <a href="/index.php/book/details/<?php echo $row->id;?>" class="more tooltip" title="點進去可以看更多書籍相關訊息喔！<br /> 測試第二行，用圖片語法可放圖片。">- more details -</a>
                    <div class="clear"></div>
                    </div>
                    <div class="box_bottom"></div>
                </div>
                  <div class="clear"></div>
            </div>
<?php } ?>

            <div class="title"><span class="title_icon"><img src="/images/book_store/bullet2.gif" alt="" title="" /></span>New Books</div>

            <div class="new_products">
<?php foreach ($new_books as $row) { ?>
                    <div class="new_prod_box">
                        <a href="/index.php/book/details/<?php echo $row->id;?>"><?php echo $row->name;?></a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="/images/book_store/new_icon.gif" alt="" title="" /></span>
                        <a href="/index.php/book/details/<?php echo $row->id;?>">
                            <?php if ($row->img!="")
                                    echo '<img src="/images/books/'.$row->img.'" height="110px" width="80px" alt="" title="" border="0" />';
                                  else
                                    echo '<img src="/images/no_image.png" height="110px" width="80px" alt="" title="" border="0" />';
                            ?>
                        </a>
                        </div>
                    </div>
<?php } ?>
            </div>

            <div class="clear"></div>
        </div><!--end of left content-->
