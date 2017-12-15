<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends MY_Model {

	protected $table = 'menu';

	public function get_menu()
	{
		$query = $this->db->query("SELECT `id`, `nama_menu`FROM `menu` WHERE `id_parent` != 0 ")->result();
		return $query ;
	}

}