<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Services extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_helper','Mod_services']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "Integraltechnology",
			'services' => $this->Mod_services->read(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('services/read');
		$this->load->view('tmp_site/footer');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'detail' => $this->Mod_services->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('services/update');
		$this->load->view('tmp_site/footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "Integraltechnology",
			'detail' => $this->Mod_services->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('services/detail');
		$this->load->view('tmp_site/footer');
	}

	public function add()
	{
		if(isset($_POST['submit'])){
			$jumlah_peserta	= $this->input->post('jumlah_peserta');
			$nama_kegiatan  	= $this->input->post('nama_kegiatan');
			$tgl_kegiatan 		= $this->input->post('tgl_kegiatan');
			$berkas 		= $_FILES['berkas']['name'];
			$bk 		= $_FILES['bk']['name'];

			$config['upload_path'] 		= './media/services/';
			$config['allowed_types'] 	= 'doc|docx|pdf';
			$config['max_size']  		= 20000;
			$config['max_width']  		= 10240;
			$config['max_height']  		= 7680;
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('berkas')){
				 echo "<script> alert('Maaf, File Gagal Di Upload.') </script>"; die(redirect('services','refresh'));
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				echo "success";
			}


			if ( ! $this->upload->do_upload('bk')){
				 echo "<script> alert('Maaf, File Gagal Di Upload.') </script>"; die(redirect('services','refresh'));
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				echo "success";
			}

			$data = array(
				'jumlah_peserta' 	=> $jumlah_peserta,
				'nama_kegiatan' 	=> $nama_kegiatan,
				'tgl_kegiatan' 	=> $tgl_kegiatan,
				'berkas'		=> $berkas,
				'bk'			=> $bk
			);

			$this->Mod_services->add($data);
			redirect('Services');
		}
	}

	public function update_services()
	{
		if(isset($_POST['submit'])){
			$id 			= $this->input->post('id');
			$jumlah_peserta	= $this->input->post('jumlah_peserta');
			$nama_kegiatan  	= $this->input->post('nama_kegiatan');
			$tgl_kegiatan 		= $this->input->post('tgl_kegiatan');
			$berkas 		= $this->input->post('berkas');
			$bk		= $this->input->post('bk');

			$data = array(
				'id'			=> $id,
				'jumlah_peserta' 	=> $jumlah_peserta,
				'nama_kegiatan' 	=> $nama_kegiatan,
				'tgl_kegiatan' 	=> $tgl_kegiatan,
				'berkas'		=> $berkas,
				'bk'			=> $bk
			);
			$this->db->where('id', $id);
			$this->Mod_services->update($data);
			redirect('Services');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_services->delete($id, 'services');
		redirect('Services');
	}


	public function pdf()
	{
		$this->load->view('pdf_services');
		$data['services'] = $this->Mod_services->read();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-services.pdf";
		$this->pdf->load_view('pdf_services', $data);


	}


}
