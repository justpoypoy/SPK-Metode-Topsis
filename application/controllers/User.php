<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_m');
    }    
	public function index()
	{
            $this->data['title'] = 'data pengguna';
            $this->data['isi']  = 'user/user_v';
            $this->data['user'] = $this->User_m->getData();
            $this->load->view('layout/include',$this->data);
	}
        public function addUser(){
            if(isset($_POST['done'])){
                $this->User_m->tambah();
                $this->session->set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Tambah user berhasil</h4>
                                                        </div>');
                redirect('User');
            }else{
            $this->data['title'] = 'tambah user';
            $this->data['isi']  = 'user/add';
            $this->data['user'] = $this->User_m->getData();
            $this->load->view('layout/include',$this->data);
            }
        }
        public function editUser(){
            if(isset($_POST['done'])){
                $this->User_m->edit();
                $this->session->set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Rubah user berhasil</h4>
                                                        </div>');
                redirect('User');
            }else{
            $id = $this->uri->segment(3);
            $this->data['result']   = $this->User_m->detail($id)->row();     
            $this->data['title'] = 'edit pegawai';
            $this->data['isi']  = 'user/edit';
            $this->data['user'] = $this->User_m->getData();
            $this->load->view('layout/include',$this->data);
            }
        }
        public function delete(){
            $this->User_m->delete();
            $this->session->set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h4><i class="icon fa fa-check"></i> Hapus user berhasil</h4>
                                                    </div>');
                redirect('User');
        }
}
