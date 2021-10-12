<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');

	}

	public function index()
	{
		if ($this->session->login != null) {
			redirect('admin','refresh');
		}

		$this->load->view('partial/header');
		$this->load->view('partial/navbar-login');
		$this->load->view('partial/sidebar');
		$this->load->view('v_login');
		$this->load->view('partial/footer');
	}

	public function proses()
	{
		if (isset($_POST['masuk'])) {
			$email = $this->input->post('email2');
			$password = $this->input->post('password2');

			$cek = $this->m_login->login($email, $password);

			if ($cek) {
				$this->session->set_userdata('login', $cek->username);
				redirect('admin','refresh');
				// echo $cek->username;
			}else{
				redirect('login?gagal','refresh');
			}

		}else{
			echo "Terjadi kesalahan";
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */