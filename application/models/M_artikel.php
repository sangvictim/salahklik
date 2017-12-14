<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends MY_Model {

	protected $table = 'konten';


	public function data($number, $offset)
	{
		return $this->db->get('konten', $number, $offset)->result();
	}

	public function jml_data()
	{
		return $this->db->get('konten')->num_rows();
	}

	public function get_where($permalink)
	{
		$this->db->select('k.*, usr.nama as nama_penulis');
		$this->db->join('user as usr', 'usr.id = k.penulis');
		$this->db->where('k.permalink', $permalink);
		return $this->db->get('konten as k')->row();
	}

}