<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_artikel');
	}

	public function detail($permalink)
	{
		$data = array(
			'konten' => $this->M_artikel->get_where($permalink),
			'menu' => $this->Master->getMenu(0,"")
			);
		
		$this->load->view('client/header', $data);
		$this->load->view('client/detail', $data);
		$this->load->view('client/footer');
	}
}

