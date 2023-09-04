<?php
	class File1_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function getAllFiles(){
			$query = $this->db->get('file1');
			return $query->result(); 
		}
 
		public function insertfile($file){
			return $this->db->insert('file1', $file);
		}
 
		public function download($id){
			$query = $this->db->get_where('file1',array('id'=>$id));
			return $query->row_array();
		}

        public function delete_file($id){
            return $this->db->delete('file1', array('id' => $id));
        }
	}
?>