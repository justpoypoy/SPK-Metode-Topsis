<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array('Form_m','Pegawai_m'));
    }    
	public function index()
	{
            $this->data['title']        = 'form wawancara';
            $this->data['isi']          = 'form/add_form';
            $this->data['akre']         = $this->Form_m->getAkreditasi();
            $this->data['jenjang']      = $this->Form_m->getJenjang();
            $this->data['ipk']          = $this->Form_m->getIpk();
            $this->data['serti']        = $this->Form_m->getSertifikasi();
            $this->data['usia']         = $this->Form_m->getUsia();
            $this->data['pengalaman']   = $this->Form_m->getPengalaman();
            $this->data['org']          = $this->Form_m->getOrganisasi();
            $this->data['toefl']        = $this->Form_m->getToefl();
            $this->data['user']         = $this->Form_m->getData();
            //$this->data['result']       = $this->Pegawai_m->detail()->row();
            $this->load->view('layout/include',$this->data);
	}
        public function add()
        {
            if(isset($_POST['done'])){
                $this->Form_m->tambah();
                $this->session->set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Form untuk pegawai <b>'.$this->session->userdata('nama').'</b> berhasil ditambah</h4>
                                                        </div>');
                $this->session->unset_userdata('nama');
                $this->session->unset_userdata('id_pegawai');
                redirect('Form/dataForm');
            }else{
                echo "error";
            }
        }
        public function dataForm()
        {
            $this->data['title'] = 'data form';
            $this->data['isi']  = 'form/data';
            $this->data['form'] = $this->Form_m->getForm();
            $this->load->view('layout/include',$this->data);
        }
        public function editForm()
        {
            if(isset($_POST['done'])){
                $this->Form_m->edit();
                $this->session->set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Rubah data form berhasil</h4>
                                                        </div>');
                redirect('Form/dataForm');
            }else{
            $id = $this->uri->segment(3);
            $this->data['result']   = $this->Form_m->detail($id)->row();  
            $this->data['akre']         = $this->Form_m->getAkreditasi();
            $this->data['jenjang']      = $this->Form_m->getJenjang();
            $this->data['ipk']          = $this->Form_m->getIpk();
            $this->data['serti']        = $this->Form_m->getSertifikasi();
            $this->data['usia']         = $this->Form_m->getUsia();
            $this->data['pengalaman']   = $this->Form_m->getPengalaman();
            $this->data['org']          = $this->Form_m->getOrganisasi();
            $this->data['toefl']        = $this->Form_m->getToefl();
            $this->data['title'] = 'edit form';
            $this->data['isi']  = 'form/edit_form';
            $this->load->view('layout/include',$this->data);
            }
        }
        public function delete(){
            $this->Form_m->delete();
            $this->session->set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h4><i class="icon fa fa-check"></i> Hapus form berhasil</h4>
                                                    </div>');
                redirect('Form/dataForm');
        }
}
