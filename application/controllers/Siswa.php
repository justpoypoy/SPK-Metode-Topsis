<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this -> load -> model(array('M_siswa','Penilaian_m'));
    }    
	public function index(){
            $this -> data['title'] = 'data siswa';
            $this -> data['isi']  = 'siswa/siswa_v';
            $this -> data['data'] = $this -> M_siswa -> getData();
            $this -> load -> view('layout/include',$this -> data);
	}
        public function cekNik(){
            $nik = $_POST['nik'];
            $hasil = $this -> M_siswa -> cek_nik($nik);
            if($hasil -> unik != 0){
                echo "1"; 
            }else{
                echo "2";
            }
        }
        public function addSiswa(){
            if(isset($_POST['submit'])){
                $this -> M_siswa -> tambah();
                $this -> session -> set_flashdata('pesan',   '<div class="alert alert-success alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                            <h4><i class="icon fa fa-check"></i> Tambah user berhasil</h4>
                                                            </div>');
                redirect('data-siswa');
            }else{
            $this -> data['title'] = 'tambah siswa';
            $this -> data['isi']  = 'siswa/add';
            $this -> data['user'] = $this -> M_siswa -> getData();
            $this -> load -> view('layout/include',$this -> data);
            }
        }
        public function editSiswa(){
            if(isset($_POST['submit'])){
                $this -> M_siswa -> edit();
                $this -> session -> set_flashdata('pesan',  '<div class="alert alert-success alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                            <h4><i class="icon fa fa-check"></i> Rubah user berhasil</h4>
                                                            </div>');
                    redirect('data-siswa');
            }else{
            $id = $this -> uri -> segment(2);
            $this -> data['edit']   = $this -> M_siswa -> detail($id) -> row();     
            $this -> data['title'] = 'edit siswa';
            $this -> data['isi']  = 'siswa/edit';
            $this -> load -> view('layout/include',$this -> data);
            }
        }
        public function deleteSiswa(){
            $this -> M_siswa -> delete();
            $this -> session -> set_flashdata('pesan',   '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Hapus user berhasil</h4>
                                                        </div>');
                redirect('data-siswa');
        }
        
        
        public function nilaiSiswa(){
            $this -> data['data']   = $this -> M_siswa -> getData();     
            $this -> data['periode'] = $this -> M_siswa -> dataPeriode();
            $this -> data['title'] = 'data nilai siswa';
            $this -> data['isi']  = 'siswa/nilai_v';
            $this -> load -> view('layout/include',$this -> data);
        }
        public function pilihSiswa(){
            if(isset($_POST['pilih'])){
                //print_r($_POST);die;
                $period = $this->input->post('periode');
                $idsiswa = $this->input->post('nik');
                if($period == "-- Pilih Periode --"){
                    $this -> session -> set_flashdata('pesan',  '<div class="alert alert-danger alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                <h4><i class="icon fa fa-hand-stop-o"></i> Harap pilih periode dahulu ...</h4>
                                                                </div>');
                    redirect('data-nilai-siswa');
                }elseif($idsiswa == ""){
                    $this -> session -> set_flashdata('pesan',  '<div class="alert alert-danger alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                <h4><i class="icon fa fa-hand-stop-o"></i> Harap checkbox diisi dahulu ...</h4>
                                                                </div>');
                    redirect('data-nilai-siswa');
                }else{
                    $insertData = array();
                    if(!empty($idsiswa)) {
                        foreach($idsiswa as $nik) {
                              $tempArray = array(
                                'id_periode'    => $period,
                                'id_siswa'      => $nik,
                                'tanggal_create'=> time()
                              );
                              array_push($insertData, $tempArray);
                        }
                        $this->db->insert_batch('tb_nilai', $insertData);
                        $this->db->insert_batch('tb_nilai_convert', $insertData);
                        $this->db->insert_batch('tb_nilai_power', $insertData);
                        redirect('tambah-nilai-siswa');
                    }
                }
            }else{
                redirect('data-siswa');
            }
        }
        public function addNilaiSiswa(){
            if(isset($_POST['submit'])){
                $this -> M_siswa -> addNilai();
                $this -> Penilaian_m -> konversi_nilai();
                $this -> hitung_power();
                redirect('data-siswa');
            }else{
                $this -> data['title'] = 'tambah nilai siswa';
                $this -> data['siswa'] = $this -> M_siswa -> getPenilaianSiswa();
                $this -> data['isi']  = 'siswa/add_nilai';
                $this -> load -> view('layout/include',$this -> data);
            }
        }
        public function hitung_power(){
            $tgl = $this -> input -> post('tgl');
            $hasil = $this -> Penilaian_m -> get_konversi_nilai($tgl[0]);
                foreach ($hasil as $val){
                    $ids = $val -> id_siswa;
                    $idp = $val -> id_periode;
                    $tgl = $val -> tanggal_create;
                    $a = pow($val -> nilai_c1,2);
                    $b = pow($val -> nilai_c2,2);
                    $c = pow($val -> nilai_c3,2);
                    $d = pow($val -> nilai_c4,2);
                    $e = pow($val -> nilai_c5,2);
                $data = array(  'nilai_c1' => $a,
                                'nilai_c2' => $b,
                                'nilai_c3' => $c,
                                'nilai_c4' => $d,
                                'nilai_c5' => $e,
                        );
                $this -> db -> where('id_siswa',$ids);
                $this -> db -> update('tb_nilai_power',$data);
            }
       }
       public function matrik_ternormalisasi(){
           if(isset($_POST['submit'])){
            $id = $this -> input -> post('periode');
            $np = $this -> Penilaian_m -> get_nilai_power();
            $total_a = 0;$total_b = 0;$total_c = 0;$total_d = 0;$total_e = 0;
                foreach ($np as $val) {
                    $itung_a = $val->nilai_c1; $total_a = $itung_a + $total_a;
                    $itung_b = $val->nilai_c2; $total_b = $itung_b + $total_b;
                    $itung_c = $val->nilai_c3; $total_c = $itung_c + $total_c;
                    $itung_d = $val->nilai_c4; $total_d = $itung_d + $total_d;
                    $itung_e = $val->nilai_c5; $total_e = $itung_e + $total_e;
                }
                $fcsqrt_a   = sqrt($total_a); 
                $fcsqrt_b   = sqrt($total_b); 
                $fcsqrt_c   = sqrt($total_c); 
                $fcsqrt_d   = sqrt($total_d); 
                $fcsqrt_e   = sqrt($total_e); 
            $this -> data['title'] = 'data Matrix , Solusi &AMP; Jarak';
            $this -> data['a']  = $fcsqrt_a;
            $this -> data['b']  = $fcsqrt_b;
            $this -> data['c']  = $fcsqrt_c;
            $this -> data['d']  = $fcsqrt_d;
            $this -> data['e']  = $fcsqrt_e;
            $this -> data['hasil'] = $this -> Penilaian_m -> get_datanilai_power($id);
            $this -> data['isi']  = 'matrix/normalisasi';
            $this -> load -> view('layout/include',$this -> data);
           }else{
               $this -> session -> set_flashdata('pesan',  '<div class="alert alert-danger alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                <h4><i class="icon fa fa-hand-stop-o"></i> Harap pilih periode dahulu ...</h4>
                                                                </div>');
                redirect('seleksi-penilaian');
           }
       }
        
        public function deleteNilai(){
            $this -> M_siswa -> deleteNilai();
            $this -> session -> set_flashdata('pesan',  '<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Pembatalan penilaian berhasil</h4>
                                                        </div>');
            redirect('data-nilai-siswa');
        }
        public function lihatNilaiSiswa(){
            $prd = $this -> input -> post('periode');
            if(isset($_POST['pilih'])){
                if($prd != '-- Pilih Periode --'){
                    $this -> data['title'] = 'lihat data nilai siswa';
                    $this -> data['editnilai'] = $this -> M_siswa -> detailNilai($prd);
                    $this -> data['periode'] = $this -> M_siswa -> dataPeriode();
                    $this -> data['period'] = $prd;
                    $this -> data['isi']   = 'siswa/lihat_nilai';
                    $this -> load -> view('layout/include',$this -> data);
                }else{
                    $this -> session -> set_flashdata('pesan',  '<div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-hand-stop-o"></i> Harap pilih periode dahulu ...</h4>
                                                        </div>');
                    redirect('lihat-nilai-siswa');
                }
            }else{
                $this -> data['title'] = 'lihat data nilai siswa';
                $this -> data['periode'] = $this -> M_siswa -> dataPeriode();
                $this -> data['isi']   = 'siswa/lihat_nilai';
                $this -> load -> view('layout/include',$this -> data);
            }
        }
}
