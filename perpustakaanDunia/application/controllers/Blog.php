<?php
    class Blog extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('Blog_model');
        }
        public function index(){
            $query = $this->Blog_model->getBlog();
            $data['blog'] = $query->result_array();
            $this->load->view('blog',$data);
        }
    }

?>