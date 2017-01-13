<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this -> load -> model('M_configur');
    }    
	public function index(){
            $this ->dataPeriode();
	}
        /* Periode */
        public function dataPeriode(){
            $this -> data['title'] = 'data periode';
            $this -> data['isi']  = 'configur/configur_v';
            $this -> data['periode'] = $this -> M_configur -> getDataPeriode();
            $this -> load -> view('layout/include',$this -> data);
	}
        public function addPeriode(){
            if(isset($_POST['done'])){
                $this -> M_configur -> tambahPeriode();
                $this -> session -> set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Tambah periode berhasil</h4>
                                                        </div>');
                redirect('data-periode-siswa');
            }else{
            $this -> data['title'] = 'tambah periode';
            $this -> data['isi']  = 'configur/addP';
            $this -> load -> view('layout/include',$this -> data);
            }
        }
        public function editPeriode(){
            if(isset($_POST['done'])){
                $this -> M_configur -> editPeriode();
                $this -> session -> set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Rubah periode berhasil</h4>
                                                        </div>');
                redirect('data-periode-siswa');
            }else{
            $id = $this -> uri -> segment(2);
            $this -> data['result'] = $this -> M_configur -> detailPeriode($id) -> row();     
            $this -> data['title']  = 'edit periode';
            $this -> data['isi']    = 'configur/editP';
            $this -> load -> view('layout/include',$this -> data);
            }
        }
        public function hapusPeriode(){
            $this -> M_configur -> deletePeriode();
            $this -> session -> set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h4><i class="icon fa fa-check"></i> Hapus user berhasil</h4>
                                                    </div>');
            redirect('data-periode-siswa');
        }
        /* End Periode */
        /* Kriteria */
        public function dataKriteria(){
            $this -> data['title'] = 'data kriteria';
            $this -> data['isi']  = 'configur/kriteria_v';
            $this -> data['kriteria'] = $this -> M_configur -> getDataKriteria();
            $this -> load -> view('layout/include',$this -> data);
	}
        public function addKriteria(){
            if(isset($_POST['done'])){
                $this -> M_configur -> tambahKriteria();
                $this -> session -> set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Tambah kriteria berhasil</h4>
                                                        </div>');
                redirect('data-kriteria');
            }else{
            $this -> data['title'] = 'tambah kriteria';
            $this -> data['isi']  = 'configur/addK';
            $this -> load -> view('layout/include',$this -> data);
            }
        }
        public function editKriteria(){
            if(isset($_POST['done'])){
                $this -> M_configur -> editKriteria();
                $this -> session -> set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Rubah kriteria berhasil</h4>
                                                        </div>');
                redirect('data-kriteria');
            }else{
            $id = $this -> uri -> segment(2);
            $this -> data['result'] = $this -> M_configur -> detailKriteria($id) -> row();     
            $this -> data['title']  = 'edit kriteria';
            $this -> data['isi']    = 'configur/editK';
            $this -> load -> view('layout/include',$this -> data);
            }
        }
        public function hapusKriteria(){
            $this -> M_configur -> deleteKriteria();
            $this -> session -> set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h4><i class="icon fa fa-check"></i> Hapus kriteria berhasil</h4>
                                                    </div>');
            redirect('data-kriteria');
        }
        /* End Kriteria */
        /* Bobot */
        public function dataBobot(){
            $this -> data['title'] = 'data bobot';
            $this -> data['isi']  = 'configur/bobot_v';
            $this -> data['kriteria'] = $this -> M_configur -> getDataBobot();
            $this -> load -> view('layout/include',$this -> data);
	}
        public function addBobot(){
            if(isset($_POST['done'])){
                $this -> M_configur -> tambahBobot();
                $this -> session -> set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Tambah bobot berhasil</h4>
                                                        </div>');
                redirect('data-bobot');
            }else{
            $this -> data['title'] = 'tambah bobot';
            $this -> data['isi']  = 'configur/addB';
            $this -> load -> view('layout/include',$this -> data);
            }
        }
        public function editBobot(){
            if(isset($_POST['done'])){
                $this -> M_configur -> editBobot();
                $this -> session -> set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Rubah bobot berhasil</h4>
                                                        </div>');
                redirect('data-bobot');
            }else{
            $id = $this -> uri -> segment(2);
            $this -> data['result'] = $this -> M_configur -> detailBobot($id) -> row();     
            $this -> data['title']  = 'edit bobot';
            $this -> data['isi']    = 'configur/editB';
            $this -> load -> view('layout/include',$this -> data);
            }
        }
        public function hapusBobot(){
            $this -> M_configur -> deleteBobot();
            $this -> session -> set_flashdata('done',   '<div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h4><i class="icon fa fa-check"></i> Hapus bobot berhasil</h4>
                                                    </div>');
            redirect('data-bobot');
        }
        /* End Bobot */
        
        
        
        
        
        
        
        
        
        
        
}
