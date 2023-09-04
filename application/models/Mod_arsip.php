<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class Mod_arsip extends CI_Model {

	public function add($data){
		$this->db->insert('arsip', $data);
		return true;
	}	

	public function update($data){
		$this->db->update('arsip', $data);
	}

	public function read(){
		$arsip = $this->db->order_by('id', 'DESC');
		$arsip = $this->db->get('arsip');
		return $arsip->result();
	}

	public function detail($id){
		return $this->db->get_where('arsip', array('id' => $id));
	}

	public function delete($id){
		return $this->db->delete('arsip', array('id' => $id));
	}

	public function count_arsip()
	{
		$query = $this->db->query("SELECT * FROM arsip");
        $arsip = $query->num_rows();
        return $arsip;
	}
}