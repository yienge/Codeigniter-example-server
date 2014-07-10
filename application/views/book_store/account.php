        <div class="left_content">
            <div class="title"><span class="title_icon"><img src="/images/book_store/bullet1.gif" alt="" title="" /></span><label id="pageName">My Account</label>
            </div>

            <div class="feat_prod_box_details">
              <p class="details tooltip" title="你好，請登入帳號以進行服務喔！">Plz login to access more services. :)</p>
              <div class="contact_form">
                <div class="form_subtitle">login into your account</div>
                <form name="register" action="/index.php/form/login" method="post">
					<?php echo "<p><font color='red'>".validation_errors()."</font></p>"; ?>
                    <div class="form_row">
                      <label class="contact"><strong>Username:</strong></label>
                      <input type="text" class="contact_input" name="user_name" value="<?php echo set_value('user_name'); ?>" size="50"/>
                    </div>  

                    <div class="form_row">
                      <label class="contact"><strong>Password:</strong></label>
                      <input type="password" class="contact_input" name="password" size="50"/>
                    </div>

                    <div class="form_row">
                      <div class="terms">
                        <input type="checkbox" name="terms" />
                        Remember me
                      </div>
                    </div> 

                    <div class="form_row">
                      <input type="submit" class="register" value="login" />
                    </div>

                </form>         
              </div>  
            </div>  
		    <div class="clear"></div>
            <div class="demo">
                <br />
                <br />

                <button>jQuery UI Test button</button>

                <br />
                <br />

                <input value="A submit button" type="submit">

                <br />
                <br />

                <a href="#">jQuery UI Test anchor</a>

                <br />
                <br />

                <p>Date: <input id="datepicker" type="text"></p>

                <br />
                <br />

                <div id="tabs">
                    <ul>
                      <li><a href="#tabs-1">頁面一</a></li>
                      <li><a href="#tabs-2">頁面二</a></li>
                      <li><a href="#tabs-3">頁面三</a></li>
                    </ul>
                    <div id="tabs-1">
                        <p>jquery plugin 網站的說明範例就是使用兩層tab頁面來進行內容的集中，可讓有限版面內放置更多內容，諸如：新聞頁面，教學檔案頁面</p>
                    </div>
                    <div id="tabs-2">
                        <p>Yahoo首頁也大量使用tab頁面去進行內容的重疊放置，並加入定時上稿功能，以達到動態變更首頁的功能。</p>
                    </div>
                    <div id="tabs-3">
                        <p>現在還是測試</p>
                    </div>
                </div>

                <br />
                <br />

                <div id="accordion">
                <h3><a href="#">Section 1</a></h3>
                <div>
                    <p>聽說是風琴一</p>
                </div>
                <h3><a href="#">Section 2</a></h3>
                <div>
                    <p>聽說是風琴二</p>
                </div>
                <h3><a href="#">Section 3</a></h3>
                <div>
                    <p>聽說是風琴三</p>
                    <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                    </ul>
                </div>
                <h3><a href="#">Section 4</a></h3>
                <div>
                    <p>聽說是風琴四</p>
                </div>
                </div>

            </div> <!-- end of div.demo -->

         </div><!--end of left content-->
