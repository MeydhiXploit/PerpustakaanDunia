<?php
    class Blog_model extends CI_Model{
        public function getBlog(){
            return $this->db->get('tbl_buku');
        }
    }