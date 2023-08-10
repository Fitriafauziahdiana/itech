<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_multimedia extends CI_Model {

	public function add($data){
		$this->db->insert('multimedia', $data);
		return true;
	}	

	public function update($data){
		$this->db->update('multimedia', $data);
	}

	public function read(){
		$multimedia = $this->db->order_by('id', 'DESC');
		$multimedia = $this->db->get('multimedia');
		return $multimedia->result();
	}

	public function view($id){
		return $this->db->get_where('multimedia', array('id' => $id));
	}

	public function detail($id){
		return $this->db->get_where('multimedia', array('id' => $id));
	}

	public function delete($id){
		return $this->db->delete('multimedia', array('id' => $id));
	}	

	public function count_multimedia()
	{
		$query = $this->db->query("SELECT * FROM multimedia");
        $multimedia = $query->num_rows();
        return $multimedia;
	}

}