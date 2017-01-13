<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

    public function getData(){
        $this -> db -> select('id_siswa');
        $this -> db -> select('nik');
        $this -> db -> select('nm_siswa');
        $this -> db -> select('alamat');
        $this -> db -> select('tgl_lahir');
        $this -> db -> select('tempat_lahir');
        $this -> db -> select('nama_ayah');
        $this -> db -> select('nama_ibu');
        $this -> db -> select('pekerjaan_ayah');
        $this -> db -> from('tb_siswa');
        return $this -> db ->get() -> result();
    }
    public function cek_nik($nik){
        return $this -> db -> query("SELECT COUNT(nik) AS unik FROM tb_siswa WHERE nik = '".$nik."'") -> row();
    }
        public function tambah(){
            $data = array(  'nik'               => $this -> input -> post('nik'),
                            'nm_siswa'          => $this -> input -> post('nama'),
                            'alamat'            => $this -> input -> post('alamat'),
                            'tgl_lahir'         => $this -> input -> post('tgl'),
                            'tempat_lahir'      => $this -> input -> post('tempat'),
                            'nama_ayah'         => $this -> input -> post('ayah'),
                            'nama_ibu'          => $this -> input -> post('ibu'),
                            'pekerjaan_ayah'    => $this -> input -> post('pekerjaan'),
                                );
            $this -> db -> insert('tb_siswa',$data);
        }
        public function edit(){
              $data = array('nik'               => $this -> input -> post('nik'),
                            'nm_siswa'          => $this -> input -> post('nama'),
                            'alamat'            => $this -> input -> post('alamat'),
                            'tgl_lahir'         => $this -> input -> post('tgl'),
                            'tempat_lahir'      => $this -> input -> post('tempat'),
                            'nama_ayah'         => $this -> input -> post('ayah'),
                            'nama_ibu'          => $this -> input -> post('ibu'),
                            'pekerjaan_ayah'    => $this -> input -> post('pekerjaan'),
                                );
            $this -> db -> where('nik',$this -> input -> post('nik'));
            $this -> db -> update('tb_siswa',$data);
        }
         public function detail($id){
            $data = array('nik' => $id);
            return $this -> db -> get_where('tb_siswa',$data);
        }
        public function delete(){
            $this -> db -> where('nik',$this -> uri -> segment(2));
            $this -> db -> delete('tb_siswa');
        }
        public function dataPeriode(){
            $this -> db -> select('id_periode');
            $this -> db -> select('nama_periode');
            $this -> db -> from('tb_periode');
            $this -> db -> order_by('id_periode', 'ASC');
            return $this -> db -> get() -> result();
        }
        public function getPenilaianSiswa(){
            $this -> db -> select('id');
            $this -> db -> select('id_siswa');
            $this -> db -> select('id_periode');
            $this -> db -> select('tanggal_create');
            $this -> db -> from('tb_nilai');
            $this -> db -> where('nilai_c1', 0);
            $this -> db -> where('nilai_c2', 0);
            $this -> db -> where('nilai_c3', 0);
            $this -> db -> where('nilai_c4', 0);
            $this -> db -> where('nilai_c5', 0);
            $this -> db -> order_by('tanggal_create','ASC');
            return $this -> db -> get();
        }
        public function addNilai(){
            $nm = $this->input->post('nama');
            $result = array();
            foreach ($nm AS $key => $val) {
                $result[] = array(
                    "id_siswa"      => $_POST['nama'][$key],
                    "id_periode"    => $_POST['periode'][$key],
                    "tanggal_create"=> $_POST['tgl'][$key],
                    "nilai_c1"      => $_POST['na'][$key],
                    "nilai_c2"      => $_POST['nb'][$key],
                    "nilai_c3"      => $_POST['nc'][$key],
                    "nilai_c4"      => $_POST['nd'][$key],
                    "nilai_c5"      => $_POST['ne'][$key],
                );
                $this -> db -> update_batch('tb_nilai', $result, 'id_siswa');
            }
        }
        public function deleteNilai(){
            $this -> db -> where('tanggal_create',$this -> uri -> segment(2));
            $this -> db -> delete('tb_nilai');
        }
        public function getHasilPenilaianSiswa(){
            $this -> db -> select('id');
            $this -> db -> select('id_periode');
            $this -> db -> from('tb_nilai');
            return $this -> db -> get() -> result();
        }
        public function detailNilai($prd){
            $this -> db -> select('id');
            $this -> db -> select('id_siswa');
            $this -> db -> select('id_periode');
            $this -> db -> select('nilai_c1');
            $this -> db -> select('nilai_c2');
            $this -> db -> select('nilai_c3');
            $this -> db -> select('nilai_c4');
            $this -> db -> select('nilai_c5');
            $this -> db -> from('tb_nilai');
            $this -> db -> where('id_periode', $prd);
            return $this -> db -> get() -> result();
        }
}
