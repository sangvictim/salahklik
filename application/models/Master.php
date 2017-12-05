<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Model {

	public function datalogin($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		return $this->db->get()->row();
	}

	public function getrole($value='')
	{
		return $this->db->get('role')->result();
	}

	public function menu()
	{
		$x= "";
		$query = $this->db->query('SELECT
			k.id as id_k,
			k.nama_kategori,
			sk.id_kategori,
			sk.nama_sub_kategori
			FROM `sub_kategori` as sk
			LEFT JOIN kategori as k
			ON sk.id_kategori = k.id
			');

		foreach ($query->result_array() as $qry) {
			$x .="<li class=''>
                    <a href='javascript:;' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                      ".$qry['nama_kategori']."
                    </a>
                    <ul class='dropdown-menu pull-right'>
                      <li>
                      	<a href='javascript:;''>menu</a>
                      </li>
                    </ul>
                  </li>";
		}
		return $x;

	}
}
?>