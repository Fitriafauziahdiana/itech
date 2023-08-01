<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_surat extends CI_Model {

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
