<div class="left_content">
            <div class="title"><span class="title_icon"><img src="/application/views/book_store/images/bullet1.gif" alt="" title="" /></span>Add new books</div>
            <div class="feat_prod_box_details">
            <p class="details">
                Add more books.
            </p>
                <div class="contact_form">
                <div class="form_subtitle">add books</div>
                 <form name="add" action="/index.php/form/add_book" method="post">     
                    <?php echo "<p><font color='red'>".validation_errors()."</font></p>"; ?>
                    <div class="form_row">
                    <label class="contact"><strong>book name:</strong></label>
                    <input type="text" class="contact_input" name="name" value="<?php echo set_value('name'); ?>" size="50"/>
                    </div>  
                    <div class="form_row">
                    <label class="contact"><strong>price:</strong></label>
                    <input type="text" class="contact_input" name="price" size="50"/>
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
                    <input type="text" class="contact_input" name="number" value="<?php echo set_value('number'); ?>" size="50"/>
                    </div>
                    <div class="form_row">
                    <label class="contact"><strong>status:</strong></label>
                    <select name="category">
                        <option value="science">none</option>
                        <option value="promo">Promo</option>
                        <option value="new">New</option>
                    </select>
                    </div>
                    <div class="form_row">
                    <label class="contact"><strong>img:</strong></label>
                    <input type="text" class="contact_input" name="img" value="<?php echo set_value('img'); ?>" size="50"/>
                    </div>
                    <div class="form_row">
                    <input type="hidden" class="contact_input" name="editor" value="<?php echo $user_name;?>" size="50"/>
                    </div>  
                    <div class="form_row">
                    <label class="contact"><strong>detail:</strong></label>
                    <textarea name="detail" class="contact_textarea" ></textarea>
                    </div>
                    <div class="form_row">
                    <label class="contact"><strong>more detail:</strong></label>
                    <textarea name="more" class="contact_textarea" ></textarea>
                    </div>

                    <div class="form_row">
                    <input type="submit" class="register" value="add" />
                    </div>
                 </form>
               </div>
            </div>
</div>
