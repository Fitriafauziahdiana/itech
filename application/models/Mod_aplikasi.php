<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_aplikasi extends CI_Model {

	public function add_aplikasi($data){
		$this->db->insert('aplikasi', $data);
		return true;
	}

	public function update_aplikasi($data){
		$this->db->update('aplikasi', $data);
		return true;
	}

	public function read_aplikasi(){
		$aplikasi = $this->db->order_by('id', 'DESC');
		$aplikasi = $this->db->get('aplikasi');
		return $aplikasi->result();
	}

	public function view($id){
		return $this->db->get_where('aplikasi', array('id' => $id));
	}

	public function delete_aplikasi($id){
		return $this->db->delete('aplikasi', array('id' => $id));
	}




	public function count_aplikasi()
	{
		$query = $this->db->query("SELECT * FROM aplikasi");
        $aplikasi = $query->num_rows();
        return $aplikasi;
	}

	public function count_bigdata()
	{
		$query = $this->db->query("SELECT * FROM bigdata");
        $bigdata = $query->num_rows();
        return $bigdata;
	}

}
