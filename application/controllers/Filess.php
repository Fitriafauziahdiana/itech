<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Filess extends CI_Controller {
 
	function  __construct() {
        parent::__construct();
        //load our helper
        $this->load->helper('url');
        //load our model
        $this->load->model('Filess_model','filess_model');
    }
 
	public function Index(){
		//load session library to use flashdata
		$this->load->library('session');
		//fetch all filess i the database
		$data['filess'] = $this->filess_model->getAllFiless();
		$this->load->view('file_uploads', $data);
	}
 
	public function insert(){
		//load session library to use flashdata
		$this->load->library('session');
 
	 	//Check if file is not empty
        if(!empty($_FILES['upload']['name'])){
            $config['upload_path'] = 'uploads/';
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
				$file['description'] = $this->input->post('description');
				$file['filename'] = $filename;
 
				$query = $this->filess_model->insertfile($file);

                if ( ! $this->upload->do_upload('filename')){
                     echo "<script> alert('File berhasil upload.') </script>"; die(redirect('filess','refresh'));
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
        $fileinfo = $this->filess_model->download($id);
        $file = 'uploads/'.$fileinfo['filename'];
        force_download($file, NULL);
	}


    public function del_file()
	{
		$id = $this->uri->segment(3);
		$this->filess_model->delete_file($id, 'filess');
		redirect('filess');
	}

 
}