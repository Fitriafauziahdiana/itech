<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_master extends CI_Model {



	public function add_jeniskegiatan($data){
		$this->db->insert('tb_jeniskegiatan',$data);
		return true;
	}	


	public function get_jeniskegiatan(){
		$jeniskegiatan = $this->db->order_by('id', 'DESC');
		$jeniskegiatan = $this->db->get('tb_jeniskegiatan');
		return $jeniskegiatan->result();
	}


	public function delete_jeniskegiatan($id){
		return $this->db->delete('tb_jeniskegiatan', array('id' => $id));
	}



	public function get_users(){
		$users = $this->db->order_by('id', 'DESC');
		$users = $this->db->get('users');
		return $users->result();
	}

	public function delete_users($id){
		return $this->db->delete('users', array('id' => $id));
	}

}
