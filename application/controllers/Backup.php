<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Backup extends CI_Controller {

	function __construct(){
		parent::__construct();

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('backup/read');
		$this->load->view('tmp_site/footer');
	}

	function backup_db()
	{
		$this->load->dbutil();
		$backup = $this->dbutil->backup();

		$this->load->helper('file');
		write_file('/', $backup);

		$this->load->helper('download');
		force_download('db_arsip.sql', $backup);
	}

}