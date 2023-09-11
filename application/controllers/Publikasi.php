<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_publikasi']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
			'publikasi' => $this->Mod_publikasi->read(),

		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('publikasi/read');
		$this->load->view('tmp_site/footer');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'detail' => $this->Mod_publikasi->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('publikasi/update');
		$this->load->view('tmp_site/footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'view' => $this->Mod_publikasi->view($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('publikasi/detail');
		$this->load->view('tmp_site/footer');
	}
	public function add()
	{
		if(isset($_POST['submit'])){
			$tanggal		= $this->input->post('tanggal');
			$judul_flyer 	= $this->input->post('judul_flyer');
			$nama_kegiatan			= $this->input->post('nama_kegiatan');
			$linkinter			= $this->input->post('linkinter');
			$linkekster			= $this->input->post('linkekster');

			$data = array(
				'tanggal'		=> $tanggal,
				'judul_flyer'	=> $judul_flyer,
				'nama_kegiatan' => $nama_kegiatan,
				'linkinter'		=> $linkinter,
				'linkekster'	=> $linkekster
			);

			$this->Mod_publikasi->add($data);
			redirect('publikasi');
		}
	}

	public function update_publikasi()
	{
		if(isset($_POST['submit'])){
			$id 			= $this->input->post('id');
			$tanggal			= $this->input->post('tanggal');
			$judul_flyer 	= $this->input->post('judul_flyer');
			$nama_kegiatan			= $this->input->post('nama_kegiatan');
			$linkinter			= $this->input->post('linkinter');
			$linkekster			= $this->input->post('linkekster');

			$data = array(
				'id' 			=> $id,
				'judul_flyer'	=> $judul_flyer,
				'nama_kegiatan' 			=> $nama_kegiatan,
				'tanggal'		=> $tanggal,
				'linkinter'		=> $linkinter,
				'linkekster'	=> $linkekster
			);

			$this->db->where('id', $id);
			$this->Mod_publikasi->update($data);
			redirect('publikasi');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_publikasi->delete($id, 'publikasi');
		redirect('publikasi');
	}

	public function pdf()
	{
		$this->load->view('pdf_publikasi');
		$data['publikasi'] = $this->Mod_publikasi->read();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-publikasi.pdf";
		$this->pdf->load_view('pdf_publikasi', $data);


	}
}
