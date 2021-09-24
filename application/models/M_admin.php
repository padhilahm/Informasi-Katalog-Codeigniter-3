<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	function tambah($data)
	{
		$query = $this->db->insert('tbl_post', $data);
		return $query;
	}

	function tampil($id_post = '')
	{
		// $query = $this->db->get('tbl_post');
		if ($id_post != '') {
			$query = $this->db->query("SELECT tbl_post.id_post, tbl_post.`judul_post`, tbl_post.`isi_post`, tbl_post.`gambar_post`, COUNT(tbl_kunjungan.`id_kunjungan`) AS kunjungan FROM tbl_post LEFT JOIN tbl_kunjungan ON tbl_post.`id_post` = tbl_kunjungan.`id_post`
				WHERE tbl_post.id_post = '$id_post'
			GROUP BY tbl_post.id_post ORDER BY tbl_post.id_post DESC");
		}else{
			$query = $this->db->query("SELECT tbl_post.id_post, tbl_post.`judul_post`, tbl_post.`isi_post`, tbl_post.`gambar_post`, COUNT(tbl_kunjungan.`id_kunjungan`) AS kunjungan FROM tbl_post LEFT JOIN tbl_kunjungan ON tbl_post.`id_post` = tbl_kunjungan.`id_post`
			GROUP BY tbl_post.id_post ORDER BY tbl_post.id_post DESC");
		}
		
		return $query->result();
	}

	function edit($data, $id_post)
	{
		// $this->db->where('id_post', $id_post);
		$query = $this->db->update('tbl_post', $data, "id_post = $id_post");
		return $query;
	}

	function hapus($id_post)
	{
		$this->db->where('id_post', $id_post);
		$query = $this->db->delete('tbl_post');
		return $query;
	}

	function kunjungan($data)
	{
		$query = $this->db->insert('tbl_kunjungan', $data);
		return $query;
	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */