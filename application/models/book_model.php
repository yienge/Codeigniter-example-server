<?php
class Book_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_about_us() {
        $this->db
            ->select('content')
            ->from('site_content')
            ->where('title', 'about_us');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_slideshow() {
        $this->db
            ->select('*')
            ->from('slideshow');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_total_book_count() {
        $rs = $this->db->query('select count(*) as total from books order by date desc limit 10');
        $count = $rs->result_array();
        return $count['0']['total'];
    }

    public function get_promo_books() {
        $this->db
            ->select('*')
            ->from('books')
            ->where('status', 'promo');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_hot_books() {
         $this->db
            ->select('*')
            ->from('books')
            ->where('status', 'promo')
            ->order_by('pageview', 'desc')
            ->limit(10);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_new_books() {
          $this->db
            ->select('*')
            ->from('books')
            ->where("TO_DAYS(NOW()) - TO_DAYS(date) <= 7", null, FALSE)
            ->order_by('date', 'desc')
            ->limit(10);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_category_books($category) {
          $this->db
            ->select('*')
            ->from('books')
            ->where('category', $category)
            ->order_by('date', 'desc')
            ->limit(20);
        $query = $this->db->get();
        return $query->result();
    }

}
