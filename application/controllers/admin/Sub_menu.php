<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_menu extends CI_Controller {

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

	public function add()
	{
		$data = array(
			'id_parent'  => $this->input->post('id_parent'),
			'menu_order' => '1',
			'nama_menu'  => $this->input->post('nama_menu'),
			'link'       => str_replace(' ', '-', $this->input->post('nama_menu'))
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
			'parent' => $this->M_menu->where('id_parent', '0')->all(),
			'edit_menu' => $this->M_menu->find($id),
			);
		$this->load->view('admin/header', $header);
		$this->load->view('admin/menu/edit_sub', $header);
		$this->load->view('admin/footer');
	}

}
