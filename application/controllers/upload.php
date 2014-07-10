<?php

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'date'));
    }

    public function index() {
        $this->load->view('general/upload_view', array('error' => ' ' ));
    }

    public function do_upload() {
        $config['upload_path']   = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '0'; // max_size is specified in KB, 0 is not limited.
        $config['max_width']     = '1024';
        $config['max_height']    = '768';

        $this->load->library('upload', $config);
        $field_name = "photoimg";

        if ( ! $this->upload->do_upload($field_name))
        {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            echo "<img src='/images/".$data['upload_data']['file_name']."' class='preview'>";
        }
    }

}
