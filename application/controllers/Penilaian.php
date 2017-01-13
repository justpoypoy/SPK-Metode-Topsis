<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this -> load -> model(array('Penilaian_m','M_configur'));
    }    
	public function index(){
            $this -> data['title'] = 'tambah nilai murid';
            $this -> data['isi']  = 'penilaian/add';
            $this -> load -> view('layout/include',$this -> data);
	}
        public function seleksi(){
            $this -> data['title'] = 'hasil seleksi';
            $this -> data['periode'] = $this -> M_configur -> getDataPeriode();
            $this -> data['isi']  = 'penilaian/seleksi';
            $this -> load -> view('layout/include',$this -> data);
        }
        public function tambah_data(){
            if(isset($_POST['submit'])){
                
                $nama = $this -> input -> post('nama');
                $this -> Penilaian_m -> tambah();
                $this -> Penilaian_m -> konversi_nilai();
                $this -> hitung_power();
                $this -> session -> set_flashdata('pesan','<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i>Tambah nilai murid '.ucfirst($nama).' berhasil.</h4>
                                                        </div>');
                redirect('penilaian-murid');
            }else{
                $this -> session -> set_flashdata('pesan','<div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i>Tambah nilai murid '.ucfirst($nama).' gagal!!!.</h4>
                                                        </div>');
                redirect('penilaian-murid');
            }
        }
        
        public function hitung_power(){
           $date = date_create();
           $hasil = $this -> Penilaian_m -> get_konversi_nilai();
                foreach ($hasil as $val){
                    $ids = $val -> id_siswa;
                    $idp = $val -> id_periode;
                    $a = pow($val -> nilai_c1,2);
                    $b = pow($val -> nilai_c2,2);
                    $c = pow($val -> nilai_c3,2);
                    $d = pow($val -> nilai_c4,2);
                    $e = pow($val -> nilai_c5,2);
                }
                $data = array('id_siswa' => $ids,'id_periode' => $idp,'nilai_c1' => $a,'nilai_c2' => $b,'nilai_c3' => $c,'nilai_c4' => $d,'nilai_c5' => $e,'tanggal_create'=> date_timestamp_get($date));
                $this -> Penilaian_m -> konversi_nilai_power($data);
       }
       
       public function hitung_matrik_ternormalisasi(){
            $this -> data['title'] = 'data matrix ternormalisasi';
            $this -> data['hasil'] = $this -> Penilaian_m -> get_nilai_power();
            $this -> data['isi']  = 'matrix/normalisasi';
            $this -> load -> view('layout/include',$this -> data);
       }
       public function cetak_seleksi(){
            $this -> data['title'] = 'laporan seleksi';
            $this -> data['periode'] = $this -> M_configur -> getDataPeriode();
            $this -> data['isi']  = 'penilaian/cetak_seleksi';
            $this -> load -> view('layout/include',$this -> data);
        }
       public function cetak(){
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
            //$this -> data['isi']  = 'matrix/cetak';
            //$this -> load -> view('layout/include',$this -> data);
            $this -> load -> view('matrix/print_seleksi',$this -> data);
           }else{
               $this -> session -> set_flashdata('pesan',  '<div class="alert alert-danger alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                <h4><i class="icon fa fa-hand-stop-o"></i> Harap pilih periode dahulu ...</h4>
                                                                </div>');
                redirect('cetak-seleksi');
           }
       }
}
