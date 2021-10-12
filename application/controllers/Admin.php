<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->login == null) {
			redirect('login','refresh');
		}

		$this->load->model('m_admin');
	}

	public function index()
	{

		$data2['data'] = $this->m_admin->tampil();

		$this->load->view('partial/header-admin');
		$this->load->view('partial/navbar-admin');
		$this->load->view('partial/sidebar');
		$this->load->view('v_admin', $data2);
		$this->load->view('partial/footer');
	}

	public function tambah()
	{
		if (isset($_POST['tambah'])) {
			$judul = $this->input->post('judul');
			$isi = $this->input->post('deskripsi');

			$config['upload_path'] = './assets/img/upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
			$config['file_name'] = date('Y-m-d-H-i-s')."_".uniqid();
			$this->upload->initialize($config);

			if ($this->upload->do_upload('gambar')){

				$gbr = $this->upload->data();
	            //Compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/img/upload/'.$gbr['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '50%';
        		//$config['width']= 600;
        		//$config['height']= 400;
				$config['new_image']= './assets/img/upload/'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];

				$data = array(
					'judul_post' => $judul,
					'isi_post' => $isi,
					'gambar_post' => $gambar
				);

				$cek = $this->m_admin->tambah($data);

				if ($cek) {
					redirect('admin?sukses','refresh');
				}else{
					redirect('admin?gagal','refresh');
				}
			}

		}
	}

	public function edit()
	{
		if (isset($_POST['edit'])) {
			$id_post = $this->input->post('id_post');
			$judul = $this->input->post('judul');
			$isi = $this->input->post('deskripsi');
			$gambar_post_h = $this->input->post('gambar_post_h');

			$config['upload_path'] = './assets/img/upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
			$config['file_name'] = date('Y-m-d-H-i-s')."_".uniqid();
			$this->upload->initialize($config);

			if ($this->upload->do_upload('gambar')){

				$gbr = $this->upload->data();
	            //Compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/img/upload/'.$gbr['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '50%';
        		//$config['width']= 600;
        		//$config['height']= 400;
				$config['new_image']= './assets/img/upload/'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];

				$data = array(
					'judul_post' => $judul,
					'isi_post' => $isi,
					'gambar_post' => $gambar
				);

				$cek = $this->m_admin->edit($data, $id_post);

				if ($cek) {
					unlink("assets/img/upload/$gambar_post_h");
					redirect('admin?suksesu','refresh');
				}else{
					redirect('admin?gagalu','refresh');
				}
			}else{
				$data = array(
					'judul_post' => $judul,
					'isi_post' => $isi
				);

				$cek = $this->m_admin->edit($data, $id_post);

				if ($cek) {
					redirect('admin?suksesu','refresh');
				}else{
					redirect('admin?gagalu','refresh');
				}

			}

		}
	}

	public function hapus($id_post = '', $gambar = '')
	{
		if ($id_post != '' && $gambar != '') {
			$cek = $this->m_admin->hapus($id_post);

			if ($cek) {
				unlink("assets/img/upload/$gambar");
				redirect('admin?suksesh','refresh');
			}else{
				redirect('admin?gagalh','refresh');
			}
		}
		
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */