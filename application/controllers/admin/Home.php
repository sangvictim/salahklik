<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$sesi = $this->session->userdata('sesilogin');
		if ($sesi == '') {
			redirect('login', 'refresh');
		}else{
			$header = array(
				'title' => 'Home',
				'nama' => $this->Master->datalogin($sesi),
				);
			$this->load->view('admin/header', $header);
			$this->load->view('admin/home/index');
			$this->load->view('admin/footer');
		}
	}
}
