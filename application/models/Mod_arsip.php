<?php defined('BASEPATH') or exit('No direct script access allowed');
class Mod_arsip extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function getAllFiles()
	{
		$query = $this->db->get('arsip');
		return $query->result();
	}
	public function insertfile($file)
	{
		return $this->db->insert('arsip', $file);
	}

	public function download($id)
	{
		$query = $this->db->get_where('arsip', array('id' => $id));
		return $query->row_array();
	}

	public function delete_file($id)
	{
		return $this->db->delete('arsip', array('id' => $id));
	}

	//

	public function read()
	{
		$arsip = $this->db->order_by('id', 'DESC');
		$arsip = $this->db->get('arsip');
		return $arsip->result();
	}



	public function count_arsip()
	{
		$query = $this->db->query ("SELECT * FROM arsip");
		$arsip = $query->num_rows();
		return $arsip;
	}

	public function gettahun()
	{
		$query = $this->db->query("SELECT YEAR(tanggal) AS tahun FROM 
			arsip GROUP BY YEAR(tanggal) ORDER BY YEAR (tanggal) 
			ASC");
		return $query>result();
	}
}
