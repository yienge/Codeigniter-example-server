<?php header('Content-Type: text/xml'); ?>
<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<rss version="2.0">
<channel>

<title>Book_Store</title>
<link>http://localhost/index.php/book/index</link>
<description>This is where you can buy all the books you want!</description>
<language>zh-tw</language>
<copyright>All Rights Reserved</copyright>
<managingEditor>yienge@gmail.com</managingEditor>

<?php foreach ($hot_books as $row) { ?>
<item>
            <guid isPermaLink="true">http://localhost/index.php/book/details/<?php echo $row->id;?></guid>
            <title><?php echo $row->name;?></title>
            <link>http://localhost/index.php/book/details/<?php echo $row->id;?></link>
            <author>yienge</author>
            <category>
                Hot Books
            </category>
            <comments>http://localhost/index.php/book/details/<?php echo $row->id;?></comments>
            <pubDate><?php echo $row->date;?></pubDate>
            <description>
            <?php echo $row->detail;?> | more description : <?php echo $row->more;?>
            </description>
</item>
<?php } ?>

</channel>
</rss>
