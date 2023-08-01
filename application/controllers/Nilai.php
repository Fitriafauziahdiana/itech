<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_nilai','Mod_helper']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
			'nilai' => $this->Mod_nilai->read(),
			'jurusan' => $this->Mod_helper->jurusan(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('nilai/read');
		$this->load->view('tmp_site/footer');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'detail' => $this->Mod_nilai->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('nilai/update');
		$this->load->view('tmp_site/footer');
	}

	public function add()
	{
		if(isset($_POST['submit'])){
			$jurusan		= $this->input->post('jurusan');
			$kelas		 	= $this->input->post('kelas');
			$kode 			= $this->input->post('kode');
			$semester 		= $this->input->post('semester');
			$tahun_ajaran 	= $this->input->post('tahun_ajaran');
			$guru			= $this->input->post('guru');
			$berkas1 		= $_FILES['berkas1']['name'];

			$config['upload_path'] 		= './media/nilai/';
			$config['allowed_types'] 	= 'gif|jpg|png|pdf|doc|docx|xls|xlsx|rar|zip|tar';
			$config['max_size']  		= 2000;
			$config['max_width']  		= 1024;
			$config['max_height']  		= 768;
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('berkas1')){
				 echo "<script> alert('Maaf, File Gagal Di Upload.') </script>"; die(redirect('Nilai','refresh'));
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				echo "success";
			}

			$data = array(
				'jurusan'		=> $jurusan,
				'kelas' 		=> $kelas,
				'kode' 			=> $kode,
				'semester' 		=> $semester,
				'tahun_ajaran' 	=> $tahun_ajaran,
				'guru' 			=> $guru,
				'berkas1'		=> $berkas1
			);

			$this->Mod_nilai->add($data);
			redirect('Nilai');
		}
	}

	public function update_nilai()
	{
		if(isset($_POST['submit'])){
			$id 			= $this->input->post('id');
			$jurusan		= $this->input->post('jurusan');
			$kelas		 	= $this->input->post('kelas');
			$kode 			= $this->input->post('kode');
			$semester 		= $this->input->post('semester');
			$tahun_ajaran 	= $this->input->post('tahun_ajaran');
			$guru			= $this->input->post('guru');
			$berkas1 		= $this->input->post('berkas1');

			$data = array(
				'id' 			=> $id,
				'jurusan'		=> $jurusan,
				'kelas' 		=> $kelas,
				'kode' 			=> $kode,
				'semester' 		=> $semester,
				'tahun_ajaran' 	=> $tahun_ajaran,
				'guru' 			=> $guru,
				'berkas1'		=> $berkas1
			);

			$this->db->where('id', $id);
			$this->Mod_nilai->update($data);
			redirect('Nilai');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_nilai->delete($id, 'nilai');
		redirect('Nilai');
	}

}
