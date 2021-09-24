<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function login($email, $password)
	{
		$this->db->where('username', $email);
		$this->db->where('password', $password);
		$this->db->from('tbl_akun');
		$query = $this->db->get();
		return $query->row();
	}

	

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */