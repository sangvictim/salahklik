<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sub_kategori extends MY_Model {

	protected $table = 'sub_kategori';

	public function getjoin()
	{
		$this->db->select('*');
		$this->db->join('kategori as kt', 'kt.id = skt.id_kategori', 'left');
		return $this->db->get('sub_kategori as skt')->result();
	}

}