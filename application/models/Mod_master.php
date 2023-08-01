<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_master extends CI_Model {

	public function add_mapel($data){
		$this->db->insert('tb_pelajaran',$data);
		return true;
	}

	public function add_jeniskegiatan($data){
		$this->db->insert('tb_jeniskegiatan',$data);
		return true;
	}	

	public function get_mapel(){
		$mapel = $this->db->order_by('id', 'DESC');
		$mapel = $this->db->get('tb_pelajaran');
		return $mapel->result();
	}

	public function get_jeniskegiatan(){
		$jeniskegiatan = $this->db->order_by('id', 'DESC');
		$jeniskegiatan = $this->db->get('tb_jeniskegiatan');
		return $jeniskegiatan->result();
	}

	public function delete_mapel($id){
		return $this->db->delete('tb_pelajaran', array('id' => $id));
	}

	public function delete_jeniskegiatan($id){
		return $this->db->delete('tb_jeniskegiatan', array('id' => $id));
	}

	public function add_jurusan($data){
		$this->db->insert('tb_jurusan',$data);
		return true;
	}	

	public function get_jurusan(){
		$jurusan = $this->db->order_by('id', 'DESC');
		$jurusan = $this->db->get('tb_jurusan');
		return $jurusan->result();
	}

	public function delete_jurusan($id){
		return $this->db->delete('tb_jurusan', array('id' => $id));
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
