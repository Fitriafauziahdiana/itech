<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_services extends CI_Model {

	public function add($data){
		$this->db->insert('Services', $data);
		return true;
	}	

	public function update($data){
		$this->db->update('services', $data);
	}

	public function read(){
		$services = $this->db->order_by('id', 'DESC');
		$services = $this->db->get('services');
		return $services->result();
	}

	public function detail($id){
		return $this->db->get_where('services', array('id' => $id));
	}

	public function delete($id){
		return $this->db->delete('services', array('id' => $id));
	}

	public function count_services()
	{
		$query = $this->db->query("SELECT * FROM services");
        $services = $query->num_rows();
        return $services;
	}

}