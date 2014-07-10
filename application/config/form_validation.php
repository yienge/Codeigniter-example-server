<?php
$config = array(
				 // used for signup form validation
                 'signup' => array(
                                    array(
                                            'field' => 'user_name',
                                            'label' => 'Username',
                                            'rules' => 'trim|required|min_length[5]|max_length[12]|xss_clean|is_unique[user.user_name]'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'trim|required|min_length[8]|max_lenth[12]|md5'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'trim|required|valid_email|is_unique[user.email]'
                                         ),
                                    array(
                                            'field' => 'name',
                                            'label' => 'Real Name',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'birth',
                                            'label' => 'Birthday',
                                            'rules' => 'trim|required|exact_length[8]|greater_than[19120101]'
                                         ),
                                    array(
                                            'field' => 'blood_type',
                                            'label' => 'Blood Type',
                                            'rules' => 'trim|required|integer'
                                         ),
                                    array(
                                            'field' => 'sex',
                                            'label' => 'Gender',
                                            'rules' => 'trim|required|integer'
                                         ),
                                    ),
				 // used for login form validation
                 'login' => array(
                                    array(
                                            'field' => 'user_name',
                                            'label' => 'Username',
                                            'rules' => 'trim|required|min_length[5]|max_length[12]|xss_clean'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required'
                                         ),
                                 ),
				 // add_book still needed to be fixed
                 'add_book' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Book name',
                                            'rules' => 'trim|required|xss_clean'
                                         ),
                                    array(
                                            'field' => 'price',
                                            'label' => 'Price',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'category',
                                            'label' => 'Category',
                                            'rules' => ''
                                         ),
                                    array(
                                            'field' => 'number',
                                            'label' => 'Number of books',
                                            'rules' => 'required|numeric'
                                         ),
                                    array(
                                            'field' => 'status',
                                            'label' => 'Status',
                                            'rules' => ''
                                         ),
                                    array(
                                            'field' => 'img',
                                            'label' => 'Image',
                                            'rules' => ''
                                         ),
                                    array(
                                            'field' => 'editor',
                                            'label' => 'Plz login',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'detail',
                                            'label' => 'Detail',
                                            'rules' => ''
                                         ),
                                    array(
                                            'field' => 'more',
                                            'label' => 'More detail',
                                            'rules' => ''
                                         ),
                                 )
               );
