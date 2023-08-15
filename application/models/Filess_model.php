<?php
	class Filess_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function getAllFiless(){
			$query = $this->db->get('filess');
			return $query->result(); 
		}
 
		public function insertfile($file){
			return $this->db->insert('filess', $file);
		}
 
		public function download($id){
			$query = $this->db->get_where('filess',array('id'=>$id));
			return $query->row_array();
		}

        public function delete_file($id){
            return $this->db->delete('filess', array('id' => $id));
        }
    
	}
?>