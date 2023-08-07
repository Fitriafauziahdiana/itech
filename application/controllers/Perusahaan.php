<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Perusahaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_perusahaan');

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'detail' => $this->Mod_perusahaan->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/perusahaan');
		$this->load->view('tmp_site/footer');		
	}

	public function update_data()
	{
		$id = $this->input->post('id');
		$data = array(
			'id' => $id,
			'kepala_perusahaan'	 => $this->input->post('kepala_perusahaan'),
			'nama_perusahaan'		 => $this->input->post('nama_perusahaan'),
			'no_telp' 			 => $this->input->post('no_telp'),
			'alamat'			 => $this->input->post('alamat'),
			'website'			 => $this->input->post('website'),
		);

		$this->Mod_perusahaan->update($data);
		redirect('Perusahaan/update/'.'1');
	}

}