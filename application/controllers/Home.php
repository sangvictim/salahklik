<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_artikel');
	}

	public function index()
	{

		$jml_data = $this->M_artikel->jml_data();

		$config['base_url'] = base_url().'home/index/';
		$config['total_rows'] = $jml_data;
		$config['per_page'] = 3;
		$form = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['menu'] = $this->Master->getMenu(0,"");
		$data['konten'] = $this->M_artikel->data($config['per_page'], $form);
		$this->load->view('client/header', $data);
		$this->load->view('client/home', $data);
		$this->load->view('client/footer');
	}

}
