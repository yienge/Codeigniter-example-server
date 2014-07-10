  <div class="left_content">
    <div class="crumb_nav">
        <a href="/index.php/book/index">home</a> &gt;&gt;
        <a href="/index.php/book/books"><label id="pageName">Books</label></a> &gt;&gt;
        Category &gt;&gt;
        <a href="/index.php/book/category/<?php echo $category_books[0]->category;?>/1"><?php $category_books[0]->category;?></a>
    </div>
    <div class="title"><span class="title_icon"><img src="/images/book_store/bullet1.gif" alt="" title="" /></span>Category books</div>
    <div class="new_products">

    <?php foreach ($category_books as $row) {

      echo '<div class="new_prod_box">';
      echo '<a href="/index.php/book/details/'.$row->id.'">'.$row->name.'</a>';
      echo '<div class="new_prod_bg">';
	  if ($row->status == 'new')
      echo '<span class="new_icon"><img src="/images/book_store/new_icon.gif" alt="" title="" /></span>';
	  else if ($row->status == 'promo')
	  echo '<span class="new_icon"><img src="/images/book_store/promo_icon.gif" alt="" title="" /></span>';
      echo '<a href="/index.php/book/details/'.$row->id.'">';
      if ($row->img!="")
        echo '<img src="/images/books/'.$row->img.'" height="110px" width="90px" alt="" title="" border="0" />';
      else
        echo '<img src="/images/no_image.png" height="110px" width="90px" alt="" title="" border="0" />';

      echo '</a>';
      echo '</div>';
      echo '</div>';
	} ?>

        <div class="pagination">
          <span class="disabled"></span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a>...<a href="#?page=199">10</a><a href="#?page=200">11</a><a href="#?page=2">>></a>
        </div>
    </div>
    <div class="clear"></div>
  </div><!--end of left content-->
