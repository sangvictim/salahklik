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

	function getMenu($parent,$hasil){
        $w = $this->db->query("SELECT * from menu where id_parent='".$parent."' order by menu_order");
        foreach($w->result() as $h)
        {
			$cek_parent=$this->db->query("SELECT * from menu WHERE id_parent=".$h->id."");
   			if(($cek_parent->num_rows())>0)
   			{
				$hasil .= '<li class="dropdown"><a href="'.base_url('/').'" class="dropdown-toggle" data-toggle="dropdown">'.$h->nama_menu.' &nbsp;<b class="caret"></b></a> ';
			}elseif ($h->id_parent == 0 ){
				$hasil.='<li><a href="'.base_url('/').'">'.$h->nama_menu.'</a></li>';
			}
        	else
        	{
				$hasil.='<li><a href="'.base_url().'pages/by/'.$h->link.'.html">'.$h->nama_menu.'</a></li>';
			}
			$hasil .='<ul class="dropdown-menu">';
			$hasil = $this->getMenu($h->id,$hasil);
			$hasil .='</ul>';		
			$hasil .= "</li></li>";
        }
         
         return str_replace('<ul class="dropdown-menu"></ul>','',$hasil);
     }

     public function where_by($permalink)
     {
     	$findId = $this->db->query("SELECT id FROM menu WHERE link= '".$permalink."'")->result();

     	foreach ($findId as $fi) {
     		$getKonten_ByMenu = $this->db->query("SELECT * FROM konten WHERE sub_kategori= $fi->id")->result();
     	}

     	return $getKonten_ByMenu;
     }

     public function jml_by($permalink)
	{
		$findId = $this->db->query("SELECT id FROM menu WHERE link= '".$permalink."'")->result();

     	foreach ($findId as $fi) {
     		$getKonten_ByMenu = $this->db->query("SELECT * FROM konten WHERE sub_kategori= $fi->id")->num_rows();
     	}

     	return $getKonten_ByMenu;
	}

	public function data_by($permalink, $number, $offset)
	{
		$findId = $this->db->query("SELECT id FROM menu WHERE link= '".$permalink."'")->result();

     	foreach ($findId as $fi) {
     		$data = $this->db->where('sub_kategori', $fi->id);
     		$data = $this->db->get('konten', $number, $offset)->result();
     	}

     	return $data;
	}
}
?>