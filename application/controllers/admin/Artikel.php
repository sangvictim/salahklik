<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_artikel');
		$this->load->model('M_sub_kategori');
		$this->load->library('upload');
		$sesi = $this->session->userdata('sesilogin');
		$getrole = $this->Master->datalogin($sesi);
		if ($sesi == '') {
			redirect('login', 'refresh');
		}
	}

	public function index()
	{
		
		$sesi = $this->session->userdata('sesilogin');
		$header = array(
			'title' => 'Posting Artikel',
			'nama' => $this->Master->datalogin($sesi),
			'artikel' => $this->M_artikel->all()
			);
		$this->load->view('admin/header', $header);
		$this->load->view('admin/artikel/index', $header);
		$this->load->view('admin/footer');
		
	}

	public function create()
	{
		$sesi = $this->session->userdata('sesilogin');
		$header = array(
			'title' => 'Posting Artikel',
			'nama' => $this->Master->datalogin($sesi),
			'sub_kategori' => $this->M_sub_kategori->all(),
			);
		$this->load->view('admin/header', $header);
		$this->load->view('admin/artikel/create', $header);
		$this->load->view('admin/footer');
	}

	public function edit($id)
	{
		$sesi = $this->session->userdata('sesilogin');
		$header = array(
			'title'        => 'Edit Artikel',
			'nama'         => $this->Master->datalogin($sesi),
			'sub_kat'      => $this->M_sub_kategori->all(),
			'edit_artikel' => $this->M_artikel->find($id),
			);
		$this->load->view('admin/header', $header);
		$this->load->view('admin/artikel/edit', $header);
		$this->load->view('admin/footer');
	}

	public function simpan()
	{
		$data_session = $this->session->userdata('sesilogin');
		$id   = $data_session['id'];
		$url = $this->do_upload();
		$data = array(
			'judul'        => $this->input->post('judul'),
			'permalink'    => str_replace(' ', '-', $this->input->post('judul')),
			'sub_kategori' => $this->input->post('sub_kategori'),
			'deskripsi'    => $this->input->post('deskripsi'),
			'penulis'      => $id,
			'gambar' => $url
			);
		$this->M_artikel->insert($data);
		$this->session->set_flashdata('sip', 'data berhasil disimpan!');
		redirect(base_url('admin/artikel.html'));
	}

	public function update($id)
	{
		$type = explode('.', $_FILES['gambar']['name']);
        $type = $type[count($type) -1];
        $url = "./assets/upload/"."salah_klik_".uniqid(rand()).'.'.$type;


        	if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
        		if (move_uploaded_file($_FILES['gambar']['tmp_name'], $url)) {
        			$data = array(
						'judul'        => $this->input->post('judul'),
						'permalink'    => str_replace(' ', '-', $this->input->post('judul')),
						'sub_kategori' => $this->input->post('sub_kategori'),
						'deskripsi'    => $this->input->post('deskripsi'),
						'penulis'      => $id,
						'gambar' => $url
						);
					$this->M_artikel->update($data, $id);
					$this->session->set_flashdata('sip', 'data & gambar berhasil disimpan!');
					redirect(base_url('admin/artikel.html'));
        		}
        	}else{
        		$data = array(
						'judul'        => $this->input->post('judul'),
						'permalink'    => str_replace(' ', '-', $this->input->post('judul')),
						'sub_kategori' => $this->input->post('sub_kategori'),
						'deskripsi'    => $this->input->post('deskripsi'),
						'penulis'      => $id
						);
					$this->M_artikel->update($data, $id);
					$this->session->set_flashdata('sip', 'data berhasil disimpan!');
					redirect(base_url('admin/artikel.html'));
        	}
	}

	public function do_upload()
    {
        $type = explode('.', $_FILES['gambar']['name']);
        $type = $type[count($type) -1];
        $url = "./assets/upload/"."salah_klik_".uniqid(rand()).'.'.$type;

        if (in_array($type, array('jpeg','jpg','png'))) {
        	if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
        		if (move_uploaded_file($_FILES['gambar']['tmp_name'], $url)) {
        			return $url;
        		}
        	}
        }else{
        	$this->session->set_flashdata('gagal', 'format gambar tidak suport');
			redirect(base_url('admin/artikel.html'));
        }
        return "";
    }

    public function delete($id)
    {
    	$url = "assets/upload/";
    	$data = $this->M_artikel->find($id);

    	unlink($url.$data->gambar);

    	$this->M_artikel->delete($id);
    	$this->session->set_flashdata('sip', 'data berhasil dihapus!');
		redirect(base_url('admin/artikel.html'));
    }
}
