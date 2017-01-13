<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_m extends CI_Model {

	
	public function getAkreditasi()
	{
            return $this->db->get('tb_akreditasi')->result();
	}
        public function getJenjang()
	{
            return $this->db->get('tb_jenjang')->result();
	}
        public function getIpk()
	{
            return $this->db->get('tb_ipk')->result();
	}
        public function getSertifikasi()
	{
            return $this->db->get('tb_sertifikasi')->result();
	}
        public function getUsia()
	{
            return $this->db->get('tb_usia')->result();
	}
        public function getPengalaman()
	{
            return $this->db->get('tb_pengalaman')->result();
	}
        public function getOrganisasi()
	{
            return $this->db->get('tb_organisasi')->result();
	}
        public function getToefl()
	{
            return $this->db->get('tb_toefl')->result();
	}
        public function getData()
	{
            return $this->db->query("SELECT * FROM tb_pegawai WHERE flag_hapus != 1")->row_array();
	}
        public function getForm()
        {
            return $this->db->query("SELECT * FROM tran_nilai WHERE flag_hapus != 1")->result();
        }
        public function detail($id){
            $data = array('id' => $id);
            return $this->db->get_where('tran_nilai',$data);
        }
        public function tambah()
        {
            $data = array(  'id_pegawai'    => $this->input->post('id'),
                            'akreditasi'    => $this->input->post('akreditasi'),
                            'jenjang'       => $this->input->post('jenjang'),
                            'ipk'           => $this->input->post('ipk'),
                            'sertifikasi'   => $this->input->post('serti'),
                            'usia'          => $this->input->post('usia'),
                            'pengalaman'    => $this->input->post('peng'),
                            'organisasi'    => $this->input->post('org'),
                            'b_asing'       => $this->input->post('toefl'),
                                );
            $this->db->insert('tran_nilai',$data);
        }
        public function edit()
        {
            $data = array(  'id_pegawai'    => $this->input->post('id'),
                            'akreditasi'    => $this->input->post('akreditasi'),
                            'jenjang'       => $this->input->post('jenjang'),
                            'ipk'           => $this->input->post('ipk'),
                            'sertifikasi'   => $this->input->post('serti'),
                            'usia'          => $this->input->post('usia'),
                            'pengalaman'    => $this->input->post('peng'),
                            'organisasi'    => $this->input->post('org'),
                            'b_asing'       => $this->input->post('toefl'),
                                );
            $this->db->where('id',$this->input->post('id_'));
            $this->db->update('tran_nilai',$data);
        }
         public function delete()
        {
            $data = array('flag_hapus' => 1);
            $this->db->where('id',$this->uri->segment(3));
            $this->db->update('tran_nilai',$data);
        }
        
}
