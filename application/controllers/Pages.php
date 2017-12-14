<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function by($permalink)
	{
		$jml_data = $this->Master->jml_by($permalink);

		$config['base_url'] = base_url().'pages/by/'.$permalink.'/';
		$config['total_rows'] = $jml_data;
		$config['per_page'] = 3;
		$form = $this->uri->segment(4);
		$this->pagination->initialize($config);

		$data = array(
			'konten_by' => $this->Master->data_by($permalink, $config['per_page'], $form),
			'menu' => $this->Master->getMenu(0,"")
			);
		
		$this->load->view('client/header', $data);
		$this->load->view('client/show', $data);
		$this->load->view('client/footer');
	}
}

