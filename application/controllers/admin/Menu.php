<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_menu');
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
			'title' => 'Menu',
			'nama' => $this->Master->datalogin($sesi),
			'menu' => $this->M_menu->all(),
			'parent' => $this->M_menu->where('id_parent', '0')->all()
			);
		$this->load->view('admin/header', $header);
		$this->load->view('admin/menu/index', $header);
		$this->load->view('admin/footer');
		
	}

	public function add()
	{
		$data = array(
			'id_parent'  => '0',
			'menu_order' => '0',
			'nama_menu'  => $this->input->post('nama_menu'),
			'link'       => ''
			);
		$this->M_menu->insert($data);
		redirect('admin/menu', 'refresh');
	}

	public function edit($id)
	{
		$sesi = $this->session->userdata('sesilogin');
		$header = array(
			'title' => 'Edit Menu',
			'nama' => $this->Master->datalogin($sesi),
			'menu' => $this->M_menu->all(),
			'edit_menu' => $this->M_menu->find($id),
			);
		$this->load->view('admin/header', $header);
		$this->load->view('admin/menu/edit', $header);
		$this->load->view('admin/footer');
	}

	public function update($id)
	{
		$data = $this->input->post();
		$this->M_menu->update($data, $id);
		redirect('admin/menu', 'refresh');
	}

	public function delete($id)
	{
		$this->M_menu->delete($id);
		redirect('admin/menu', 'refresh');
	}
}
