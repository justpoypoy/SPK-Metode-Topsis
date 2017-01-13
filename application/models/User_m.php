<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	
	public function getData()
	{
            return $this->db->query("SELECT * FROM tb_user WHERE status = '1'")->result();
	}
        public function tambah()
        {
            $data = array(  'nama'      => $this->input->post('nama'),
                            'username'  => $this->input->post('user'),
                            'password'  => sha1($this->input->post('pass')),
                            'email'     => $this->input->post('email'),
                            'level'     => $this->input->post('level'),
                            'status'    => $this->input->post('status'),
                                );
            $this->db->insert('tb_user',$data);
        }
        public function edit()
        {
              $data = array('nama'      => $this->input->post('nama'),
                            'username'  => $this->input->post('user'),
                            //'password'  => $this->input->post('pass'),
                            'email'     => $this->input->post('email'),
                            'level'     => $this->input->post('level'),
                            'status'    => $this->input->post('status'),
                                );
            $this->db->where('id',$this->input->post('id_'));
            $this->db->update('tb_user',$data);
        }
         public function detail($id){
            $data = array('id' => $id);
            return $this->db->get_where('tb_user',$data);
        }
         public function delete()
        {
            $data = array('status' => 2);
            $this->db->where('id',$this->uri->segment(3));
            $this->db->update('tb_user',$data);
        }
}
