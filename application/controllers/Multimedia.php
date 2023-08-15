<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Multimedia extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_multimedia','Mod_helper']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
			'multimedia' => $this->Mod_multimedia->read(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('multimedia/read');
		$this->load->view('tmp_site/footer');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'detail' => $this->Mod_multimedia->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('multimedia/update');
		$this->load->view('tmp_site/footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'view' => $this->Mod_multimedia->view($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('multimedia/detail');
		$this->load->view('tmp_site/footer');
	}
	public function add()
	{
		if(isset($_POST['submit'])){
			$tanggal			= $this->input->post('tanggal');
			$namakegiatan	 	= $this->input->post('namakegiatan');
			$linkvideo			= $this->input->post('linkvideo');

			$data = array(
				'tanggal' 		=> $tanggal,
				'namakegiatan' 	=> $namakegiatan,
				'linkvideo' 	=> $linkvideo,

			);

			$this->Mod_multimedia->add($data);
			redirect('Multimedia');
		}
	}

	public function update_multimedia()
	{
		if(isset($_POST['submit'])){
			$id 			= $this->input->post('id');
			$tanggal		= $this->input->post('tanggal');
			$namakegiatan 	= $this->input->post('namakegiatan');
			$linkvideo		= $this->input->post('linkvideo');


			$data = array(
				'id' 			=> $id,
				'tanggal'		=> $tanggal,
				'namakegiatan'	=> $namakegiatan,
				'linkvideo' 	=> $linkvideo,
			
			);

			$this->db->where('id', $id);
			$this->Mod_multimedia->update($data);
			redirect('Multimedia');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_multimedia->delete($id, 'multimedia');
		redirect('Multimedia');
	}

	public function pdf()
	{
		$this->load->view('pdf_multimedia');
		$data['multimedia'] = $this->Mod_multimedia->read();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-multimedia.pdf";
		$this->pdf->load_view('pdf_multimedia', $data);


	}

}
