<?php

if (!defined('BASEPATH')) exit('Tidak boleh akses langsung bro!!!');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index() {
        $this->load->view('login');
    }

    public function form() {
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|sha1');
            $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $fpengguna = $this->M_login->dataPengguna($username);
                $id = $fpengguna->id;
                $level = $fpengguna->level;
                $cek = $this->M_login->ambilPengguna($username, $password, '1');
                if ($cek <> 0) {
                    $this->session->set_userdata('isLogin', TRUE);
                    $this->session->set_userdata('username', $username);
                    $this->session->set_userdata('password', $password);
                    $this->session->set_userdata('id', $id);
                    $this->session->set_userdata('level', $level);
                    redirect('halaman-utama');
                } else {
                    $this -> session -> set_flashdata('pesan',  '<div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Username atau Password yang anda masukkan salah !!!</h4>
                                                        </div>');
                    redirect('login');
                }
            }
        } else {
            redirect('login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('isLogin');
        $this -> session -> set_flashdata('pesan',  '<div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Terima kasih, Anda telah melakukan logout.</h4>
                                                        </div>');
        redirect('login');
    }

}

?>