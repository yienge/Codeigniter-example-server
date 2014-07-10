<?php

class Mail extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'date'));
    }

    public function index() {
        echo 'hihi';
    }

    public function mail() {
        $this->load->library('email');
        $this->email->from('yienge@gmail.com', 'Yienge Lo');
        $this->email->to('yienge@yahoo.com.tw');
        $this->email->subject('Not cool, it is a test');
        $this->email->message('好功能不測嗎 今天天氣真好怕字數太少被擋掉只好多打一點');
        //$this->email->message('<html><head>GoGoGo</head><body><H1>Gogogogo</H1></body></html>');

        $this->email->send();
        echo 'Mail Complete.';
        echo $this->email->print_debugger();
    }

}
