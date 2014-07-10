<div class="title"><span class="title_icon"><img src="/images/book_store/bullet1.gif" alt="" title="" /></span><label id="pageName">Home</label></div>
<br />
<br />
    <div id="gallery">

    <?php
    foreach ($slides as $row) {
        # class="show" will define the starting point of slideshows
        if ($row->id == 0)
            echo '<a href="#" class="show">';
        else
            echo '<a href="#" class="">';
    ?>
            <img src="/images/<?php echo $row->img_path;?>" alt="<?php echo $row->alt;?>" width="800" height="450" title="" rel="<?php echo $row->rel;?>"/>
        </a>
    <?php
    }
    ?>

    <div class="caption"><div class="content"></div></div>
</div>
