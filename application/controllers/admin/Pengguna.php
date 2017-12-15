<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengguna');
	}

	public function index()
	{
		
		$sesi = $this->session->userdata('sesilogin');
		if ($sesi == '') {
			redirect('login', 'refresh');
		}else{
			$getrole = $this->Master->datalogin($sesi);
			if ($getrole->role == 1) {
				$header = array(
					'title' => 'Pengguna',
					'nama'  => $this->Master->datalogin($sesi),
				);
				$data = array(
					'user' => $this->M_pengguna->select('id, nama, alamat, notelp, role, username')->all(),
					);
				$this->load->view('admin/header', $header);
				$this->load->view('admin/pengguna/index', $data);
				$this->load->view('admin/footer');
			}else{
				redirect('admin/home', 'refresh');
			}
			
		}
	}

	public function create()
	{
		$sesi = $this->session->userdata('sesilogin');
		if ($sesi == '') {
			redirect('login', 'refresh');
		}else{
			$getrole = $this->Master->datalogin($sesi);
			if ($getrole->role == 1) {
				$header = array(
					'title' => 'Add Pengguna',
					'nama'  => $this->Master->datalogin($sesi),
					'role'  => $this->Master->getrole($sesi),
				);
				$this->load->view('admin/header', $header);
				$this->load->view('admin/pengguna/create',$header);
				$this->load->view('admin/footer');
			}else{
				redirect('admin/home', 'refresh');
			}
			
		}
	}

	public function add()
	{
		$data = array(
			'nama'     => $this->input->post('nama'),
			'alamat'   => $this->input->post('alamat'),
			'notelp'   => $this->input->post('notelp'),
			'role'     => $this->input->post('role'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			);
		$this->M_pengguna->adduser($data);
		redirect('admin/pengguna', 'refresh');
	}

	public function edit($id)
	{
		$sesi = $this->session->userdata('sesilogin');
		if ($sesi == '') {
			redirect('login', 'refresh');
		}else{
			$getrole = $this->Master->datalogin($sesi);
			if ($getrole->role == 1) {
				$header = array(
					'title' => 'Edit Pengguna',
					'nama'  => $this->Master->datalogin($sesi),
				);
				$data = array(
					'user' => $this->M_pengguna->find($id),
					'role' => $this->Master->getrole($sesi),
					);
				$this->load->view('admin/header', $header);
				$this->load->view('admin/pengguna/edit', $data);
				$this->load->view('admin/footer');
			}else{
				redirect('admin/home', 'refresh');
			}
			
		}
	}

	public function update($id)
	{
		$data = array(
			'nama'     => $this->input->post('nama'),
			'alamat'   => $this->input->post('alamat'),
			'notelp'   => $this->input->post('notelp'),
			'role'     => $this->input->post('role'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			);
		$this->M_pengguna->updateuser($data, $id);
		redirect('admin/pengguna', 'refresh');
	}

	public function delete($id)
	{
		if ($id == 1) {
			redirect('admin/pengguna', 'refresh');
		}else{
			$this->M_pengguna->delete($id);
			redirect('admin/pengguna', 'refresh');
		}
		
	}
}
