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
		$file = array(
			'title' => "Integraltechnology",
			'arsip' => $this->Mod_arsip->read(),
		);

		$this->load->view('tmp_site/index', $file);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('arsip/read');
		$this->load->view('tmp_site/footer');
	}

	public function pdf()
	{
		$this->load->view('pdf_arsip');
		$file['arsip'] = $this->Mod_arsip->read();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-arsip.pdf";
		$this->pdf->load_view('pdf_arsip', $file);


	}

	public function insert(){
		//load session library to use flashdata
		$this->load->library('session');
 
	 	//Check if file is not empty
        if(!empty($_FILES['upload']['name'])){
            $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
            $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|xls|xlsx|rar|zip|tar';
            $config['file_name'] = $_FILES['upload']['name'];
 
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
 
            if($this->upload->do_upload('upload')){
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
 
				//set file data to insert to database
				$file['tanggal']	= $this->input->post('tanggal');
				$file['description'] = $this->input->post('description');
				$file['filename'] = $filename;
 
				$query = $this->Mod_arsip->insertfile($file);

                if ( ! $this->upload->do_upload('filename')){
                     echo "<script> alert('File berhasil upload.') </script>"; die(redirect('arsip','refresh'));
                }
                else{
                    $data = array('upload_data' => $this->upload->data());
                    echo "success";
                }   
 
            }else{
              	header('location:'.base_url().$this->Index());
              	$this->session->set_flashdata('Succes','upload file.'); 
            }
        }else{
            header('location:'.base_url().$this->Index());
            $this->session->set_flashdata('Succes','upload file.');
        }
 
	}
 
	public function download($id){
        $this->load->helper('download');
        $fileinfo = $this->Mod_arsip->download($id);
        $file = 'upload/'.$fileinfo['filename'];
        force_download($file, NULL);
	}


    public function del_file()
	{
		$id = $this->uri->segment(3);
		$this->Mod_arsip->delete_file($id, 'arsip');
		redirect('arsip');
	}

}
