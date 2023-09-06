<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }

        $this->load->model(['Mod_aplikasi', 'Mod_services','Mod_publikasi', 'Mod_multimedia', 'Mod_arsip']);
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
			'aplikasi' => $this->Mod_aplikasi->count_aplikasi(),
			'bigdata' => $this->Mod_aplikasi->count_aplikasi(),
			'services' => $this->Mod_services->count_services(),
			'publikasi' => $this->Mod_publikasi->count_publikasi(),
			'multimedia' => $this->Mod_multimedia->count_multimedia(),
			'arsip' => $this->Mod_arsip->count_arsip(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('backend/index');
		$this->load->view('tmp_site/footer');
	}

	public function user()
	{
		echo "Halaman User";
	}

}