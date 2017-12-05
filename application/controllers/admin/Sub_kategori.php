<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_sub_kategori');
		$this->load->model('M_kategori');
		$sesi = $this->session->userdata('sesilogin');
		$getrole = $this->Master->datalogin($sesi);
		if ($sesi == '') {
			redirect('login', 'refresh');
		}
		if ($getrole->role != 1) {
			redirect('admin/home', 'refresh');
		}
	}

	public function index()
	{
		
		$sesi = $this->session->userdata('sesilogin');
		$header = array(
			'title' => 'Kategori',
			'nama' => $this->Master->datalogin($sesi),
			'kategori' => $this->M_kategori->all(),
			'sub_kategori' => $this->M_sub_kategori->getjoin()
			);
		$this->load->view('admin/header', $header);
		$this->load->view('admin/sub_kategori/index', $header);
		$this->load->view('admin/footer');
		
	}

	public function add()
	{
		$this->M_sub_kategori->insert($this->input->post());
		redirect('admin/sub_kategori', 'refresh');
	}

	public function edit($id)
	{
		$sesi = $this->session->userdata('sesilogin');
		$header = array(
			'title' => 'Kategori',
			'nama' => $this->Master->datalogin($sesi),
			'kategori' => $this->M_kategori->all(),
			'edit_sub_kategori' => $this->M_sub_kategori->find($id),
			);
		$this->load->view('admin/header', $header);
		$this->load->view('admin/sub_kategori/edit', $header);
		$this->load->view('admin/footer');
	}

	public function update($id)
	{
		$data = $this->input->post();
		$this->M_sub_kategori->update($data, $id);
		redirect('admin/sub_kategori', 'refresh');
	}

	public function delete($id)
	{
		$this->M_sub_kategori->delete($id);
		redirect('admin/kategori', 'refresh');
	}
}
