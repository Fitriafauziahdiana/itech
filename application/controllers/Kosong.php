<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kosong extends CI_Controller {

	public function index()
	{
		$this->load->view('404');
	}

}
