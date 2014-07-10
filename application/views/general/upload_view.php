<html>
<head>
<title>Upload Form</title>
<script type="text/javascript" src="/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/js/jquery.form.js"></script>
<script type="text/javascript" src="/js/jquery_upload.js"></script>
</head>
<body>

<?php echo $error;?>

<form id="imageform" action="/index.php/upload/do_upload" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <input type="file" id="photoimg" name="photoimg" size="20" />
</form>

<div id="preview">
</div>

<?php 

    //echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.'); 
    //echo sha1('hey baby, what a good day. gogoogo');
    date_default_timezone_set('Asia/Taipei');
    echo 'time: '.time();
    echo '<br><br>';
    echo 'date: '.date('Y-m-d');
    echo '<br><br>';
    echo 'date: '.date('l');
    echo '<br><br>';
    echo 'date: '.date('Y F jS');
    echo '<br><br>';
    echo 'date: '.date('z');
    echo '<br><br>';
    echo 'date: '.date('Y年m月j日 h點i分s秒');
    echo '<br><br>';
    echo 'now: '.NOW();
    echo '<br><br>';
    echo 'strtotime: '.strtotime('now');
    echo '<br><br>';
    echo 'strtotime: '.strtotime('+1 day');
    echo '<br><br>';
    echo 'strtotime: '.strtotime('-1 week');
    echo '<br><br>';

    $str = '+886 988-215629';
    echo 'Before replace: '.$str;
    echo '<br><br>';
    echo 'After replace: '.str_replace('+886', '0', $str);
    echo '<br><br>';
    echo 'User IP address: '.$this->input->ip_address();
    echo '<br><br>';
    echo 'User Agent: '.$this->input->user_agent();
    echo '<br><br>';
    $headers = $this->input->request_headers();
    echo 'Headers: ';
    print_r($headers);

?>

</body>
</html>
