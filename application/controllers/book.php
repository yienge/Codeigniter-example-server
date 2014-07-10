<?php
/*
 *  issues: 1. all echo need to be changed into redirect
 */

class Book extends CI_Controller
{
    private $data = array();
    private $books_per_page = 10;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->model('book_model');

        $this->data['promo_books']    = $this->book_model->get_promo_books();
        $this->data['user_name']      = $this->input->cookie('yienge_U');
    }

    public function index()
    {
        // used to benchmark the page
        //$this->output->enable_profiler(TRUE);
        $this->data['feat_books'] = $this->book_model->get_hot_books();
        $this->data['new_books']  = $this->book_model->get_new_books();
        $this->data['slides']     = $this->book_model->get_slideshow();

        $this->load->view('book_store/index_view', $this->data);
    }

    public function about()
    {
        $this->data['about_us'] = $this->book_model->get_about_us();

        $this->load->view('book_store/about_view', $this->data);
    }

    public function books($page = 1)
    {
        $total = $this->book_model->get_total_book_count();
        $this->data['total_rows'] = $total;

        $page_query = 'select * from books where id between '.(($page - 1) * $this->books_per_page + 1).' and '. ($page * $this->books_per_page).' order by date desc';
        $this->data['query'] = $this->db->query($page_query);

        $config['base_url'] = 'http://localhost/book/books/';
        $config['total_rows'] = $total;
        $this->create_pagination($config);

        $this->load->view('book_store/books_image_view', $this->data);
    }

    public function special_books($page = 1)
    {
        $total = $this->book_model->get_total_book_count();
        $this->data['total_rows'] = $total;

        $page_query = 'select * from books where id between '.(($page - 1) * $this->books_per_page + 1).' and '. ($page * $this->books_per_page).' order by date desc';
        $this->data['query'] = $this->db->query($page_query);

        $config['base_url'] = 'http://localhost/index.php/book/special_books/';
        $config['total_rows'] = $total;
        $this->create_pagination($config);

        $this->load->view('book_store/special_books_view', $this->data);
    }

    public function account()
    {
        $this->load->view('book_store/account_view', $this->data);
    }

    public function register()
    {
        $this->load->view('book_store/register_view', $this->data);
    }

    public function register_success()
    {
        $this->load->view('book_store/registersuccess_view', $this->data);
    }

    public function details($book_num)
    {
        $this->data['query'] = $this->db->query('select * from books where id='.$book_num);
        $result = $this->data['query']->result();
        $category = $result[0]->category;
        $this->data['related_books'] = $this->db->query('select * from books where category="'.$category.'" and id!='.$book_num.' order by date desc limit 9');
        $this->load->view('book_store/details_view',$this->data);
    }

    public function contact()
    {
        $this->load->view('book_store/contact_view', $this->data);
    }

    public function cart()
    {
        $this->data['user_name'] = $this->input->cookie('yienge_U');
        $this->load->view('book_store/cart_view');
    }

    public function category($category = 'science', $forth = 1)
    {
        $this->data['category_books'] = $this->book_model->get_category_books($category);
        $this->load->view('book_store/category_view', $this->data);
    }

    public function roadmap()
    {
        $this->load->view('book_store/roadmap_view');
    }

    public function slideshow()
    {
        $this->data['slides'] = $this->book_model->get_slideshow();
        $this->load->view('book_store/slideshow_view', $this->data);
    }

    public function edit()
    {
        $this->data['book_data'] = $this->db->query('select id,name,category from books;');
        $this->load->view('book_store/edit_view', $this->data);
    }

    public function add()
    {
        $this->load->view('book_store/add_view', $this->data);
    }

    public function add_success()
    {
        $this->load->view('book_store/addbook_success_view', $this->data);
    }

    public function delete($book_num)
    {
        if ($this->input->cookie('yienge_U') != '') {
            $this->data['result'] = $this->db->query('delete from books where id='.$book_num);
            echo 'Delete success';
        } else
            echo 'Plz login first';
    }

    public function update($book_num)
    {
        $this->data['book_data'] = $this->db->query('select * from books where id='.$book_num);
        $this->load->view('book_store/update_view', $this->data);
    }

    public function logout()
    {
        if ($this->input->cookie('yienge_U') != '') {
            $cookie = array(
                'name'   => 'U',
                'value'  => '',
                'expire' => '-86500',
                'prefix' => 'yienge_',
            );
            $this->input->set_cookie($cookie);
            redirect('http://localhost/book/index','refresh');
        } else {
            echo 'Plz login first.';
        }
    }

    public function RSS()
    {
        $this->data['hot_books'] = $this->book_model->get_hot_books();
        $this->load->view('book_store/RSS_view', $this->data);
    }

    public function create_pagination($params) {
        $this->load->library('pagination');
        $config['base_url']         = $params['base_url'];
        $config['total_rows']       = $params['total_rows'];
        $config['per_page']         = $this->books_per_page;
        $config['num_links']        = 4;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $this->data['pagination'] = $this->pagination->create_links();
    }
}
?>
