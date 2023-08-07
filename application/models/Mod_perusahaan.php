<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_perusahaan extends CI_Model {

	public function update($data){
		$this->db->update('tb_perusahaan', $data);
		return true;
	}

	public function detail($id){
		return $this->db->get_where('tb_perusahaan', array('id' => $id));
	}	

	public function get_perusahaan(){
		$perusahaan = $this->db->get('tb_perusahaan');
		return $perusahaan->result();
	}	

}