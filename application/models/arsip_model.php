<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class arsip_model extends CI_Model {


    function getdata(){
        $query = $this->db->query("SELECT * FROM arsip ORDER BY nama_kegiatan ASC");
        return $query->result();
    }
}