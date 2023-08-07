<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_bigdata extends CI_Model {

    // Model untuk Big Data

	public function add_bigdata($data){
		$this->db->insert('bigdata', $data);
		return true;
	}

	public function update_bigdata($data){
		$this->db->update('bigdata', $data);
		return true;
	}

	public function read_bigdata(){
		$bigdata = $this->db->order_by('id', 'DESC');
		$bigdata = $this->db->get('bigdata');
		return $bigdata->result();
	}

	public function views($id){
		return $this->db->get_where('bigdata', array('id' => $id));
	}

	public function delete_bigdata($id){
		return $this->db->delete('bigdata', array('id' => $id));
	}
}