<div class="crumb_nav">
        <a href="/index.php/book/index">home</a> &gt;&gt; 
        <a href="/index.php/book/books"><label id="pageName">Books</label></a> &gt;&gt; 
        Category &gt;&gt; 
        <a href="/index.php/book/category/<?php $result = $query->result(); echo $result[0]->category;?>/1"><?php $result = $query->result(); echo $result[0]->category;?></a>
    </div>

<div class="crumb_nav">
<?php for ($i=0; $i<sizeof($navigation_path); $i++) { ?>
        
        <a href="/index.php/book/<?php echo $navigation_link[$i]; ?>"><?php echo $navigation_path[$i]; ?></a>

        <?php if ($i != sizeof($navigation_path)) 
                echo " &gt;&gt;"; ?>

<?php } ?>
</div>
