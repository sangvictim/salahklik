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

	public function get_konten($sesi)
	{
		$this->db->select('k.id, k.judul, k.permalink, k.deskripsi, k.created_at,mn.nama_menu, usr.nama  as penulis');
		$this->db->join('user as usr', 'usr.id = k.penulis');
		$this->db->join('menu as mn', 'mn.id = k.sub_kategori');
		if ($sesi != 1) {
			$this->db->where('penulis', $sesi);
		}
		return $this->db->get('konten as k')->result();
	}

	

}