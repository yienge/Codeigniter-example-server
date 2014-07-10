<div class="left_content">
<div class="title"><span class="title_icon"><img src="/application/views/book_store/images/bullet1.gif" alt="" title="" /></span>Books</div>
<?php foreach ($query->result() as $row) { ?>
            <div class="feat_prod_box">
                <div class="prod_img"><a href="/index.php/book/details/<?php echo $row->id;?>"><img src="/images/books/<?php echo $row->img;?>" height="110px" width="80px" alt="" title="" border="0" /></a></div>
                <div class="prod_det_box">
                    <div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><?php echo $row->name;?></div>
                    <p class="details"><?php echo $row->detail;?></p>
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
