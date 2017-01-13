<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_configur extends CI_Model {

        /* Periode */
	public function getDataPeriode(){
            $this -> db -> select('id_periode');
            $this -> db -> select('nama_periode');
            $this -> db -> from('tb_periode');
            $this -> db -> order_by('id_periode', 'ASC');
            return $this -> db -> get() -> result();
	}
        public function tambahPeriode(){
            $data = array('nama_periode'    => $this->input->post('nama'));
            $this->db->insert('tb_periode',$data);
        }
        public function editPeriode(){
            $data = array('nama_periode'    => $this->input->post('nama'));
            $this->db->where('id_periode',$this->input->post('id_'));
            $this->db->update('tb_periode',$data);
        }
         public function detailPeriode($id){
            $data = array('id_periode' => $id);
            return $this->db->get_where('tb_periode',$data);
        }
         public function deletePeriode(){
            $this->db->where('id_periode',$this->uri->segment(2));
            $this->db->delete('tb_periode');
        }
        /* End Periode */
        
        /* Kriteria */
        public function getDataKriteria(){
            $this -> db -> select('id_kriteria');
            $this -> db -> select('kriteria_penilaian');
            $this -> db -> select('kriteria');
            $this -> db -> from('tb_kriteria');
            $this -> db -> order_by('id_kriteria', 'ASC');
            return $this -> db -> get() -> result();
	}
        public function tambahKriteria(){
            $data = array('kriteria_penilaian'    => $this->input->post('kripe'), 'kriteria' => $this -> input -> post('krit'));
            $this->db->insert('tb_kriteria',$data);
        }
        public function editKriteria(){
            $data = array('kriteria_penilaian'    => $this->input->post('kripe'), 'kriteria' => $this -> input -> post('krit'));
            $this->db->where('id_kriteria',$this->input->post('id_'));
            $this->db->update('tb_kriteria',$data);
        }
         public function detailKriteria($id){
            $data = array('id_kriteria' => $id);
            return $this->db->get_where('tb_kriteria',$data);
        }
         public function deleteKriteria(){
            $this->db->where('id_kriteria',$this->uri->segment(2));
            $this->db->delete('tb_kriteria');
        }
        /* End Kriteria */
        
        /* Bobot */
        public function getDataBobot(){
            $this -> db -> select('id_bobot');
            $this -> db -> select('kriteria_penilaian');
            $this -> db -> select('bobot');
            $this -> db -> from('tb_bobot');
            $this -> db -> order_by('id_bobot', 'ASC');
            return $this -> db -> get() -> result();
	}
        public function tambahBobot(){
            $data = array('kriteria_penilaian'    => $this->input->post('kripe'), 'bobot' => $this -> input -> post('bobot'));
            $this->db->insert('tb_bobot',$data);
        }
        public function editBobot(){
            $data = array('kriteria_penilaian'    => $this->input->post('kripe'), 'bobot' => $this -> input -> post('bobot'));
            $this->db->where('id_bobot',$this->input->post('id_'));
            $this->db->update('tb_bobot',$data);
        }
         public function detailBobot($id){
            $data = array('id_bobot' => $id);
            return $this->db->get_where('tb_bobot',$data);
        }
         public function deleteBobot(){
            $this->db->where('id_bobot',$this->uri->segment(2));
            $this->db->delete('tb_bobot');
        }
        /* End Bobot */
}
