<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Bigdata extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_bigdata','Mod_helper','Mod_master']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
			'bigdata' => $this->Mod_bigdata->read_bigdata(),
			'jeniskegiatan' => $this->Mod_master->get_jeniskegiatan(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('bigdata/read');
		$this->load->view('tmp_site/footer');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'views' => $this->Mod_bigdata->views($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('bigdata/update');
		$this->load->view('tmp_site/footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'views' => $this->Mod_bigdata->views($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('bigdata/detail');
		$this->load->view('tmp_site/footer');
	}

	public function add()
	{
		if(isset($_POST['submit'])){
			$jeniskegiatan 	= $this->input->post('jeniskegiatan');
			$tanggal 	= $this->input->post('tanggal');
			$namakegiatan 		= $this->input->post('namakegiatan');
			$bidangpenyelenggara	= $this->input->post('bidangpenyelenggara');
			$jumlahpeserta	= $this->input->post('jumlahpeserta');//
			$linksertifikat 	= $this->input->post('linksertifikat');
			$berkas		= $_FILES['berkas']['name'];

			$config['upload_path'] 		= './media/bigdata/';
			$config['allowed_types'] 	= 'jpeg|jpg|png|pdf|doc|docx';
			$config['max_size']  		= 2000;
			$config['max_width']  		= 1024;
			$config['max_height']  		= 768;

			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('berkas')){
				 echo "<script> alert('Maaf, File Gagal Di Upload.') </script>"; die(redirect('bigdata','refresh'));
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				echo "success";
			}

			$data = array(
				'jeniskegiatan' 	=> $jeniskegiatan,
				'tanggal' 		=> $tanggal,
				'namakegiatan' 		=> $namakegiatan,
				'bidangpenyelenggara' 		=> $bidangpenyelenggara,
				'jumlahpeserta'		=> $jumlahpeserta,
				'linksertifikat' 		=> $linksertifikat,
				'berkas' 		=> $berkas
			);

			$this->Mod_bigdata->add_bigdata($data);
			redirect('Bigdata');
		}
	}

	public function update_bigdata()
	{
		if(isset($_POST['submit'])){
			$id 		= $this->input->post('id');
			$jeniskegiatan 	= $this->input->post('jeniskegiatan');
			$tanggal 	= $this->input->post('tanggal');
			$namakegiatan 		= $this->input->post('namakegiatan');
			$bidangpenyelenggara	= $this->input->post('bidangpenyelenggara');
			$jumlahpeserta	= $this->input->post('jumlahpeserta');
			$linksertifikat 	= $this->input->post('linksertifikat');
			$berkas		= $this->input->post('berkas');


			$data = array(
				'id'			=> $id,
				'jeniskegiatan' 	=> $jeniskegiatan,
				'tanggal' 		=> $tanggal,
				'namakegiatan' 		=> $namakegiatan,
				'bidangpenyelenggara' 		=> $bidangpenyelenggara,
				'jumlahpeserta'		=> $jumlahpeserta,
				'linksertifikat' 		=> $linksertifikat,
				'berkas' 		=> $berkas
			);

			$this->db->where('id', $id);
			$this->Mod_bigdata->update_bigdata($data);
			redirect('Bigdata');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_bigdata->delete_bigdata($id, 'bigdata');
		redirect('Bigdata');
	}

	public function pdf()
	{
		$this->load->view('pdf_bigdata');
		$data['bigdata'] = $this->Mod_bigdata->read_bigdata();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-bigdata.pdf";
		$this->pdf->load_view('pdf_bigdata', $data);


	}

}