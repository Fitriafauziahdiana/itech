<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_master','Mod_register']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function pelajaran()
	{
		$data = array(
			'title' => "Integraltechnology",
			'mapel' => $this->Mod_master->get_mapel(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/pelajaran');
		$this->load->view('tmp_site/footer');
	}

	public function jurusan()
	{
		$data = array(
			'title' => "Integraltechnology",
			'jurusan' => $this->Mod_master->get_jurusan(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/jurusan');
		$this->load->view('tmp_site/footer');
	}

	public function users()
	{
		$data = array(
			'title' => "Integraltechnology",
			'users' => $this->Mod_master->get_users(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/users');
		$this->load->view('tmp_site/footer');
	}

	public function jeniskegiatan()
	{
		$data = array(
			'title' => "Integraltechnology",
			'jeniskegiatan' => $this->Mod_master->get_jeniskegiatan(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/jeniskegiatan');
		$this->load->view('tmp_site/footer');
	}
	
	public function add_users()
	{
		if(isset($_POST['submit'])){

			$fullname 	= $this->input->post('full_name');
			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');
			$password2 	= $this->input->post('password2');
			$level 		= $this->input->post('level');

			if($password != $password2){
				 echo "<script> alert('Maaf, Password Tidak Sama.') </script>"; die(redirect('Master/users','refresh'));
			}

			$data = array(
				'full_name' 	=> $fullname,
				'username' 		=> $username,
				'password' 		=> password_hash($password, PASSWORD_DEFAULT)."\n",
				'level' 		=> $level
			);

			$this->Mod_register->add($data);
			redirect('Master/users');
		}
	}

	public function del_users()
	{
		$id = $this->uri->segment(3);
		$this->Mod_master->delete_users($id, 'users');
		redirect('Master/users');
	}


	public function add_jeniskegiatan()
	{
		if(isset($_POST['submit'])){
			$data = array(
				'jeniskegiatan' => $this->input->post('jeniskegiatan'),
			);

			$this->Mod_master->add_jeniskegiatan($data);
			redirect('Master/jeniskegiatan');
		}
	}

	public function del_jeniskegiatan()
	{
		$id = $this->uri->segment(3);
		$this->Mod_master->delete_jeniskegiatan($id, 'tb_jeniskegiatan');
		redirect('Master/jeniskegiatan');
	}

}