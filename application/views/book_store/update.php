<div class="left_content">
            <?php 
                $result = $book_data->result(); 
                $book = $result[0];
            ?>
            <div class="title"><span class="title_icon"><img src="/application/views/book_store/images/bullet1.gif" alt="" title="" /></span>Update books</div>
            <div class="feat_prod_box_details">
            <p class="details">
                Update books.
            </p>
                <div class="contact_form">
                <div class="form_subtitle">Update books</div>
                 <form name="update" action="/index.php/form/update_book" method="post">     
                    <?php echo "<p><font color='red'>".validation_errors()."</font></p>"; ?>

                    <div class="form_row">
                    <label class="contact"><strong>book name:</strong></label>
                    <input type="text" class="contact_input" name="name" value="<?php echo $book->name; ?>" size="50"/>
                    </div> 

                    <div class="form_row">
                    <label class="contact"><strong>price:</strong></label>
                    <input type="text" class="contact_input" name="price" value="<?php echo $book->price; ?>" size="50"/>
                    </div> 

                    <div class="form_row">
                    <label class="contact"><strong>category:</strong></label>
                    <select name="category">
                        <option value="science">Science</option>
                        <option value="computer">Computer</option>
                        <option value="social">Social</option>
                        <option value="arts">Arts</option>
                    </select>
                    </div>

                    <div class="form_row">
                    <label class="contact"><strong>number:</strong></label>
                    <input type="text" class="contact_input" name="number" value="<?php echo $book->number; ?>" size="50"/>
                    </div>

                    <div class="form_row">
                    <label class="contact"><strong>status:</strong></label>
                    <select name="category">
                        <option value="science">none</option>
                        <option value="promo">Promo</option>
                        <option value="new">New</option>
                    </select>

                    <div class="form_row">
                    <label class="contact"><strong>detail:</strong></label>
                    <textarea name="detail" class="contact_textarea"><?php echo $book->detail; ?></textarea>
                    </div>

                    <div class="form_row">
                    <label class="contact"><strong>more detail:</strong></label>
                    <textarea name="more" class="contact_textarea"><?php echo $book->more; ?></textarea>
                    </div>

                    <div class="form_row">
                    <label class="contact"><strong>img:</strong></label>
                    <input type="text" class="contact_input" name="img" value="<?php echo $book->img; ?>" size="50"/>
                    </div>
                    </div>

                    <div class="form_row">
                    <input type="hidden" class="contact_input" name="editor" value="<?php echo $user_name;?>" size="50"/>
                    </div>  

                    <div class="form_row">
                    <input type="submit" class="register" value="update" />
                    </div>
                 </form>
               </div>
            </div>
</div>
