<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_register extends CI_Model {

	public function add($data){
		$this->db->insert('users', $data);
		return true;
	}	

}
