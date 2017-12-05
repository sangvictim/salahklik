<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	function login()
	{
		$data_login = $this->M_login->cekuser($this->input->post());
		if ($data_login) {
			foreach ($data_login as $dl) {
				$this->session->set_userdata('sesilogin', $dl->id);
				redirect(base_url('admin/home.html'),'refresh');
			}
		}else{
			$this->session->set_flashdata('gagal', 'Username atau password Salah !');
            redirect(base_url('login.html'));
		}
	}

	function logout()
	{

		$this->session->sess_destroy();
        redirect('login','refresh');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */