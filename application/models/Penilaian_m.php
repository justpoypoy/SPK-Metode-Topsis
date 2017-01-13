<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian_m extends CI_Model {
	
        public function tambah(){
            $date = date_create();
            $data = array(  'nama_murid'    => strtolower($this -> input -> post('nama')),
                            'nilai_c1'      => $this -> input -> post('c1'),
                            'nilai_c2'      => $this -> input -> post('c2'),
                            'nilai_c3'      => $this -> input -> post('c3'),
                            'nilai_c4'      => strtolower($this -> input -> post('c4')),
                            'nilai_c5'      => strtolower($this -> input -> post('c5')),
                            'tanggal_create'=> date_timestamp_get($date)
                                );
            return $this -> db -> insert('tb_nilai',$data);
        }
        public function konversi_nilai(){
            $nm = $this->input->post('nama');
            $result = array();
            foreach ($nm AS $key => $val) {
                $result[] = array(
                    "id_siswa"      => $_POST['nama'][$key],
                    "id_periode"    => $_POST['periode'][$key],
                    "tanggal_create"=> $_POST['tgl'][$key],
                    "nilai_c1"      => nilai_satu($_POST['na'][$key]),
                    "nilai_c2"      => nilai_dua($_POST['nb'][$key]),
                    "nilai_c3"      => nilai_tiga($_POST['nc'][$key]),
                    "nilai_c4"      => nilai_empat($_POST['nd'][$key]),
                    "nilai_c5"      => nilai_lima($_POST['ne'][$key]),
                );
                $this -> db -> update_batch('tb_nilai_convert', $result,'id_siswa');
            }
            
            
            /*$nama   = $this -> input -> post('nama');
            $satu   = $this -> input -> post('c1');
            $dua    = $this -> input -> post('c2');
            $tiga   = $this -> input -> post('c3');
            $empat  = $this -> input -> post('c4');
            $lima   = $this -> input -> post('c5');
            $date = date_create();
            $data = array(  'nama_murid'    => $nama,
                            'nilai_c1'      => nilai_satu($satu),
                            'nilai_c2'      => nilai_dua($dua),
                            'nilai_c3'      => nilai_tiga($tiga),
                            'nilai_c4'      => nilai_empat($empat),
                            'nilai_c5'      => nilai_lima($lima),
                            'tanggal_create'=> date_timestamp_get($date)
                                );
            return $this -> db -> insert('tb_nilai_convert',$data);*/
        }
        
        public function get_konversi_nilai($tgl){
            return $this -> db -> query('SELECT id_siswa,id_periode,nilai_c1,nilai_c2,nilai_c3,nilai_c4,nilai_c5,tanggal_create FROM tb_nilai_convert WHERE tanggal_create IN (SELECT DISTINCT(tanggal_create) FROM tb_nilai_convert WHERE tanggal_create = '.$tgl.')') -> result();;
            //return $this -> db -> get() 
        }
         public function get_datanilai_power($id){
            $this -> db -> select('id_siswa');
            $this -> db -> select('id_periode');
            $this -> db -> select('nilai_c1');
            $this -> db -> select('nilai_c2');
            $this -> db -> select('nilai_c3');
            $this -> db -> select('nilai_c4');
            $this -> db -> select('nilai_c5');
            $this -> db -> from('tb_nilai_power');
            $this -> db -> where('id_periode',$id);
            return $this -> db -> get() -> result();
        }
        public function get_nilai_power(){
            $this -> db -> select('id_periode');
            $this -> db -> select('nilai_c1');
            $this -> db -> select('nilai_c2');
            $this -> db -> select('nilai_c3');
            $this -> db -> select('nilai_c4');
            $this -> db -> select('nilai_c5');
            $this -> db -> from('tb_nilai_power');
            $this -> db -> order_by('id','ASC');
            return $this -> db -> get() -> result();
        }
}
