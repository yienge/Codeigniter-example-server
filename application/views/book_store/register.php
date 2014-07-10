        <div class="left_content">
            <div class="title"><span class="title_icon"><img src="/images/book_store/bullet1.gif" alt="" title="" /></span><label id="pageName">Register</label></div>
            <div class="feat_prod_box_details">
            <p class="details">
                Welcome to the register page, plz register to get more discount.
            </p>
                <div class="contact_form">
                <div class="form_subtitle">create new account</div>
                 <form name="register" action="/index.php/form/register" method="post">
                    <?php echo "<p><font color='red'>".validation_errors()."</font></p>"; ?>
                    <div class="form_row">
                    <label class="contact"><strong>Username:</strong></label>
                    <input type="text" class="contact_input" name="user_name" value="<?php echo set_value('user_name'); ?>" size="10"/>
                    <img class="tooltip" title="帳號為您所指定的名稱。" src="/images/information.gif" height="20px" width="20px" />
                    </div>
                    <div class="form_row">
                    <label class="contact"><strong>Password:</strong></label>
                    <input type="password" class="contact_input" name="password" size="50"/>
                    <img class="tooltip" title="密碼至少要八個字元。" src="/images/information.gif" height="20px" width="20px" />
                    </div>
                    <div class="form_row">
                    <label class="contact"><strong>Email:</strong></label>
                    <input type="text" class="contact_input" name="email" value="<?php echo set_value('email'); ?>" size="50"/>
                    <img src="/images/information.gif" height="20px" width="20px" />
                    </div>
                    <div class="form_row">
                    <label class="contact"><strong>Birthday:</strong></label>
                    <input id="datepicker" type="text" class="contact_input" name="birth" value="<?php echo set_value('birth'); ?>" size="50"/>
                    <img src="/images/information.gif" height="20px" width="20px" />
                    </div>
                    <div class="form_row">
                    <label class="contact"><strong>Real Name:</strong></label>
                    <input type="text" class="contact_input" name="name" value="<?php echo set_value('name'); ?>" size="50"/>
                    <img class="tooltip" title="請使用真名註冊，非常感謝。" src="/images/information.gif" height="20px" width="20px" />
                    </div>
                    <div class="form_row">
                    <label class="contact"><strong>Blood Type:</strong></label>
                    <select name="blood_type">
                        <option value="0">A</option>
                        <option value="1">B</option>
                        <option value="2">O</option>
                        <option value="3">AB</option>
                    </select>
                    </div>
                    <div class="form_row">
                    <label class="contact"><strong>Gender:</strong></label>
                    <select name="sex">
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                    </select>
                    </div>
                    <div class="form_row">
                    <input type="submit" class="register" value="register" />
                    </div>
                  </form>
                </div>
          </div>
        <div class="clear"></div>
        </div><!--end of left content-->
