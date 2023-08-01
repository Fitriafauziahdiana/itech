<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }

        $this->load->model(['Mod_helper','Mod_surat', 'Mod_services','Mod_soal', 'Mod_nilai','Mod_sekolah']);
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
			'aplikasi' => $this->Mod_surat->count_aplikasi(),
			'bigdata' => $this->Mod_surat->count_bigdata(),
			'services' => $this->Mod_services->count_services(),
			'soal' => $this->Mod_soal->count_soal(),
			'nilai' => $this->Mod_nilai->count_nilai(),
			'sekolah' => $this->Mod_sekolah->get_sekolah(),
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