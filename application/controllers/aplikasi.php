<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aplikasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_aplikasi','Mod_master']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
			'aplikasi' => $this->Mod_aplikasi->read_aplikasi(),
			
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('aplikasi/read');
		$this->load->view('tmp_site/footer');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'view' => $this->Mod_aplikasi->view($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('aplikasi/update');
		$this->load->view('tmp_site/footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'view' => $this->Mod_aplikasi->view($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('aplikasi/detail');
		$this->load->view('tmp_site/footer');
	}

	public function add()
	{
		if(isset($_POST['submit'])){
			$tanggal 	= $this->input->post('tanggal');
			$nama_aplikasi		= $this->input->post('nama_aplikasi');
			$deskripsi	= $this->input->post('deskripsi');
			$link_aplikasi 	= $this->input->post('link_aplikasi');

			

			$data = array(
				'tanggal' => $tanggal,
				'nama_aplikasi' => $nama_aplikasi,
				'deskripsi' => $deskripsi,
				'link_aplikasi' => $link_aplikasi,
			);

			$this->Mod_aplikasi->add_aplikasi($data);
			redirect('Aplikasi');
		}
	}

	public function update_aplikasi()
	{
		if(isset($_POST['submit'])){
			$id 		= $this->input->post('id');
			$tanggal 	= $this->input->post('tanggal');
			$nama_aplikasi		= $this->input->post('nama_aplikasi');
			$deskripsi	= $this->input->post('deskripsi');
			$link_aplikasi 	= $this->input->post('link_aplikasi');

			$data = array(
				'id' 		=> $id,
				'tanggal' 	=> $tanggal,
				'nama_aplikasi' 	=> $nama_aplikasi,
				'deskripsi' 	=> $deskripsi,
				'link_aplikasi' 	=> $link_aplikasi
			);
			$this->db->where('id', $id);
			$this->Mod_aplikasi->update_aplikasi($data);
			redirect('Aplikasi');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_aplikasi->delete_aplikasi($id, 'aplikasi');
		redirect('Aplikasi');
	}

	public function pdf()
	{
		$this->load->view('pdf_aplikasi');
		$data['aplikasi'] = $this->Mod_aplikasi->read_aplikasi();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-aplikasi.pdf";
		$this->pdf->load_view('pdf_aplikasi', $data);


	}
	
}
