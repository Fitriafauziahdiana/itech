<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Arsip extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_arsip']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
			'arsip' => $this->Mod_arsip->read(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('arsip/read');
		$this->load->view('tmp_site/footer');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'detail' => $this->Mod_arsip->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('arsip/update');
		$this->load->view('tmp_site/footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'detail' => $this->Mod_arsip->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('arsip/detail');
		$this->load->view('tmp_site/footer');
	}

	public function add()
	{
		if(isset($_POST['submit'])){
			$nama_kegiatan  	= $this->input->post('nama_kegiatan');
			$tgl_kegiatan 		= $this->input->post('tgl_kegiatan');

			$data = array(
				'nama_kegiatan' 	=> $nama_kegiatan,
				'tgl_kegiatan' 	=> $tgl_kegiatan
			);

			$this->Mod_arsip->add($data);
			redirect('arsip');
		}
	}

	public function update_arsip()
	{
		if(isset($_POST['submit'])){
			$id 			= $this->input->post('id');
			$nama_kegiatan  	= $this->input->post('nama_kegiatan');
			$tgl_kegiatan 		= $this->input->post('tgl_kegiatan');


			$data = array(
				'id'			=> $id,
				'nama_kegiatan' 	=> $nama_kegiatan,
				'tgl_kegiatan' 	=> $tgl_kegiatan
			);
			$this->db->where('id', $id);
			$this->Mod_arsip->update($data);
			redirect('arsip');
		}
	}
	

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_arsip->delete($id, 'arsip');
		redirect('arsip');
	}

	

	public function pdf()
	{
		$this->load->view('pdf_arsip');
		$data['arsip'] = $this->Mod_arsip->read();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-arsip.pdf";
		$this->pdf->load_view('pdf_arsip', $data);


	}

	
}
