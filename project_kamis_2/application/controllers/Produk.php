<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function index()
    {
        $data['produk'] = $this->db->query("SELECT * FROM tbl_produk")->result();
        $this->load->view('admin/v_header');
        $this->load->view('produk/produk');
        $this->load->view('admin/v_footer');
    }
}
