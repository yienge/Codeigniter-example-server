<div class="left_content">
  <div class="title"><span class="title_icon"><img src="/images/book_store/bullet1.gif" alt="" title="" /></span><label id="pageName">Edit Books</label></div>
  <div class="feat_prod_box_details">
    <a href="/index.php/book/add">新增書籍</a>
    <br />
    <br />
    <table>
    <tr> 
        <td>編號</td> 
        <td>書名</td> 
        <td>種類</td> 
        <td>修改書籍</td> 
        <td>刪除書籍</td>
    </tr>
        <?php foreach ($book_data->result() as $row) { ?>
        <tr> 
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->category;?></td>
            <td><a href="/index.php/book/update/<?php echo $row->id;?>">修改</a></td>
            <td><a href="/index.php/book/delete/<?php echo $row->id;?>">刪除</a></td>
        </tr>
    <?php } ?>
    </table>
  </div>
</div>
