<?php
class Form extends CI_Controller {

    private $promo_query = 'select * from books where status="promo"';

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    function register()
    {
        // use the validation rules in the config/form_validation.php file
        if ($this->form_validation->run('signup') == FALSE)
        {
            $this->load->view('book_store/register_view');
        }
        else
        {
            $this->db->insert('user', $_POST);
            $this->load->view('book_store/registersuccess_view');
        }
    }

    function add_book()
    {
        // use the validation rules in the config/form_validation.php file
        if ($this->form_validation->run('add_book') == FALSE)
        {
            $this->load->view('book_store/add_view');
        }
        else
        {
            $this->db->insert('books', $_POST);
            redirect('http://localhost/book/add_success','refresh');
        }
    }

    function update_book()
    {
        // use the validation rules in the config/form_validation.php file
        if ($this->form_validation->run('add_book') == FALSE)
        {
            $this->load->view('book_store/update_view');
        }
        else
        {
            // $this->db->where('id', $id);
            // $this->db->update('mytable', $data);
            // here should use redirect but not load view
            // echo 'update success';
        }
    }

    function login()
    {
        // use the validation rules in the config/form_validation.php file
        if ($this->form_validation->run('login') == FALSE)
        {
            echo "validation false";
        }
        else
        {
            $query = $this->db->query('select * from user where user_name="'.$_POST['user_name'].'"');
            $row = $query->result();
            $user_name = $row[0]->name;
            if ($row[0]->password == md5($_POST['password']) ) {
                $cookie = array(
                    'name'   => 'U',
                    'value'  => $user_name,
                    'expire' => '86500',
                    'prefix' => 'yienge_',
                );
                $this->input->set_cookie($cookie);
                redirect('http://localhost/book/index','refresh');
            } else {
                echo "Please login first, thx.";
                redirect('http://localhost/book/index','refresh');
            }
        }
    }

    // customized callback_username_check function
    public function username_check($str)
    {
        if ($str == 'test')
        {
            $this->form_validation->set_message('username_check', 'The %s field can not be the word "test"');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}
?>
