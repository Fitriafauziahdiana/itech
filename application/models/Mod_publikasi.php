<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_publikasi extends CI_Model {

	public function add($data){
		$this->db->insert('publikasi', $data);
		return true;
	}	

	public function update($data){
		$this->db->update('publikasi', $data);
	}

	public function read(){
		$publikasi = $this->db->order_by('id', 'DESC');
		$publikasi = $this->db->get('publikasi');
		return $publikasi->result();
	}

	public function detail($id){
		return $this->db->get_where('publikasi', array('id' => $id));
	}

	public function delete($id){
		return $this->db->delete('publikasi', array('id' => $id));
	}	

	public function count_publikasi()
	{
		$query = $this->db->query("SELECT * FROM publikasi");
        $publikasi = $query->num_rows();
        return $publikasi;
	}

}
