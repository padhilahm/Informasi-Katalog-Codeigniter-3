<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data['tampil'] = $this->m_admin->tampil();
		$this->load->view('partial/header');
		$this->load->view('partial/navbar');
		$this->load->view('partial/sidebar');
		$this->load->view('v_utama', $data);
		$this->load->view('partial/footer');
	}

	public function katalog($id_post)
	{
		$data = array(
			'ip_address' => $this->input->ip_address(), 
			'id_post' => $id_post
		);
		$this->m_admin->kunjungan($data);

		$data['tampil'] = $this->m_admin->tampil($id_post);
		$this->load->view('partial/header');
		$this->load->view('partial/navbar');
		$this->load->view('partial/sidebar');
		$this->load->view('v_katalog', $data);
		$this->load->view('partial/footer');
	}

	public function cari()
	{
		$key = $this->input->get('key');
		$data['tampil'] = $this->m_admin->cari($key);
		$this->load->view('partial/header');
		$this->load->view('partial/navbar');
		$this->load->view('partial/sidebar');
		$this->load->view('v_utama', $data);
		$this->load->view('partial/footer');
	}

}

/* End of file Utama.php */
/* Location: ./application/controllers/Utama.php */