<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_login');
	}


	// Memanggil Halaman Login
	public function index()
	{
		$data = array(
			'title' => "Halaman Login",
		);

		$this->load->view('users/login', $data);
	}


	// Proses Login
	public function signin()
	{
		 $username   = $this->input->post('username');
         $password   = $this->input->post('password');
         $level      = $this->input->post('level');

         $mysession = $this->Mod_login->check($username, $password, $level);
         if(!empty($mysession)){
         	$session = array(
         		'full_name' => $mysession['full_name'],
         		'level' => $mysession['level'],
         		'status' => "login"
         	);

         	$this->session->set_userdata($session);

         	if($mysession['level'] == 'Admin'){
         		redirect('Dashboard'); die();
         	}elseif($password != $password){
				echo "<script> alert('Maaf, Password Tidak Sama.') </script>"; die(redirect('Login','refresh'));
		   }
         }
        else{
        	redirect('Login');
        }
	}

        public function logout() {
        $this->session->sess_destroy();
        redirect('');
    }

}
