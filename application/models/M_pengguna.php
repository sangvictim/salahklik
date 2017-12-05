<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends MY_Model {

	protected $table = 'user';

	public function updateuser($data, $id)
	{
		$this->db->set('nama', $data['nama']);
		$this->db->set('alamat', $data['alamat']);
		$this->db->set('notelp', $data['notelp']);
		$this->db->set('role', $data['role']);
		$this->db->set('username', $data['username']);
		if ($data['password'] != '') {
			$this->db->set('password', $data['password']);
		}
		

		$this->db->where('id', $id);
		$this->db->update('user');

	}

	public function adduser($data)
	{
		$this->db->set('nama', $data['nama']);
		$this->db->set('alamat', $data['alamat']);
		$this->db->set('notelp', $data['notelp']);
		$this->db->set('role', $data['role']);
		$this->db->set('username', $data['username']);
		$this->db->set('password', md5($data['password']));

		$this->db->insert('user');
	}
}