<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');
Class model_data_mahasiswa extends CI_Model{

	public function load_mahasiwa(){
		$sql = $this->db->query("SELECT * FROM mahasiswa");
		return $sql->result_array();
	}
	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$nama = $this->db->escape($post['nama']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);
		$sql = $this->db->query("INSERT INTO mahasiswa VALUES (NULL, $nama, $alamat, $email, )");
		if($sql)
		return false;
	}
	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM mahasiswa WHERE id_mahasiswa = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}
	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$nama = $this->db->escape($post['nama']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);
		$sql = $this->db->query("UPDATE mahasiswa SET nama = $nama, alamat = $alamat, email = $email, WHERE id_mahasiswa = ".intval($id));
		return true;
	}
	public function hapus($id){
		$sql = $this->db->query("DELETE from mahasiswa WHERE id_mahasiswa = ".intval($id));
	}	
}