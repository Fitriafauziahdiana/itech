<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Bigdata extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_surat','Mod_helper','Mod_master']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
			'bigdata' => $this->Mod_surat->read_bigdata(),
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
			'views' => $this->Mod_surat->views($id)->row_array(),
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
			'views' => $this->Mod_surat->views($id)->row_array(),
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
			$berkas1		= $_FILES['berkas1']['name'];
			$berkas2		= $_FILES['berkas2']['name'];

			$config['upload_path'] 		= './media/bigdata1/';
			$config['allowed_types'] 	= 'gif|jpg|png|pdf|doc|docx|xls|xlsx|rar|zip|tar';
			$config['max_size']  		= 2000;
			$config['max_width']  		= 1024;
			$config['max_height']  		= 768;

			$config['upload_path'] 		= './media/bigdata2/';
			$config['allowed_types'] 	= 'gif|jpg|png|pdf|doc|docx|xls|xlsx|rar|zip|tar';
			$config['max_size']  		= 2000;
			$config['max_width']  		= 1024;
			$config['max_height']  		= 768;
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('berkas1', 'berkas2')){
				 echo "<script> alert('Maaf, File Gagal Di Upload.') </script>"; die(redirect('aplikasi','refresh'));
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
				'berkas1' 		=> $berkas1,
				'berkas2' 		=> $berkas2,
			);

			$this->Mod_surat->add_bigdata($data);
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
			$berkas1		= $this->input->post('berkas1');
			$berkas2		= $this->input->post('berkas2');

			$data = array(
				'id'			=> $id,
				'jeniskegiatan' 	=> $jeniskegiatan,
				'tanggal' 		=> $tanggal,
				'namakegiatan' 		=> $namakegiatan,
				'bidangpenyelenggara' 		=> $bidangpenyelenggara,
				'jumlahpeserta'		=> $jumlahpeserta,
				'linksertifikat' 		=> $linksertifikat,
				'berkas1' 		=> $berkas1,
				'berkas2' 		=> $berkas2,
			);

			$this->db->where('id', $id);
			$this->Mod_surat->update_bigdata($data);
			redirect('Bigdata');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_surat->delete_bigdata($id, 'bigdata');
		redirect('Bigdata');
	}

}