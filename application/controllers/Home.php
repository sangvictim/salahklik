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
		$data['menu'] = $this->Master->menu();
		$data['konten'] = $this->M_artikel->all();

		$this->load->view('index', $data);
	}
}
