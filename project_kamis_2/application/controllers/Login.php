<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login/v_login');
    }
    public function prosesLogin()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $cek_user = $this->db->query("SELECT * FROM tbl_user WHERE username = '$username' and password = '$password'");
        if ($cek_user->num_rows() != 0) {
            $row = $cek_user->row();
            if ($row->hak_akses == 'admin') {
                $data = array(
                    'id_user' => $row->id_user,
                    'username' => $row->username,
                    'hak_akses' => $row->hak_akses
                );
                $this->session->set_userdata($data);
                redirect('produk');
            } elseif ($row->hak_akses == 'admin_toko') {
                $data = array(
                    'id_user' => $row->id_user,
                    'username' => $row->username,
                    'hak_akses' => $row->hak_akses
                );
                $this->session->set_userdata($data);
                redirect('produk');
            } else {
                $data = array(
                    'id_user' => $row->id_user,
                    'username' => $row->username,
                    'hak_akses' => $row->hak_akses
                );
                $this->session->set_userdata($data);
                redirect('produk');
            }
        } else {
            $this->session->set_flashdata('pesan');
            redirect('login');
        }
    }
    public function logout()
    {
        $this->sesssion->sess_destroy();
        redirect('login');
    }
}
