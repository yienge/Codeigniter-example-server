<div class="left_content">
<div class="title"><span class="title_icon"><img src="/images/book_store/bullet1.gif" alt="" title="" /></span><label id="pageName">Books</label></div>
<div class="title"> - 總共館藏:<?php echo $total_rows; ?></div>
<?php foreach ($query->result() as $row) { ?>
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
                    <p class="stock">
                    <?php if ($row->number != 0)
                            echo '尚有存貨';
                          else
                            echo '已無存貨';
                    ?>
                    </p>
                    <a href="/index.php/book/details/<?php echo $row->id;?>" class="more">- more details -</a>
                    <div class="clear"></div>
                    </div>
                    <div class="box_bottom"></div>
                </div>
            <div class="clear"></div>
            </div>
<?php } ?>
            <div class="pagination">
			<?php echo $pagination;?>
            </div>
			<div class="clear"></div>
</div>
