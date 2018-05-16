<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Blog extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('blog');
		return $query->result();
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id_blog='.$id);
		return $query->result();
	}

	function Get_default($id){
		$data = array();
  		$options = array('id_blog' => $id);
  		$Q = $this->db->get_where('blog',$options,1);
    		if ($Q->num_rows() > 0){
      			$data = $Q->row_array();
   			}
  		$Q->free_result();
 		return $data;
	}
		
	public function get_all_artikel( $limit = FALSE, $offset = FALSE )
 	{
 	// Jika variable $limit ada pada parameter maka kita limit query-nya
 		if ( $limit ) {
 			$this->db->limit($limit, $offset);
 		}
 			// Urutkan berdasar tanggal
 		$this->db->order_by('blog.tanggal', 'DESC');

	 	$query = $this->db->get('blog');	
 		// Return dalam bentuk object
 		return $query->result();
 	}


	public function upload(){
		$config['upload_path'] = './gambar/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('gambar_blog')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
			'id_blog' => $this->input->post('null'),
			'judul_blog' => $this->input->post('judul_blog'),
			'isi_blog' => $this->input->post('isi_blog'),
			'gambar_blog' => $upload['file']['file_name'],
			'tggl_blog' => $this->input->post('tggl_blog'),	
			'author_blog' => $this->input->post('author_blog'),
			'email_author' => $this->input->post('email_author'),
			'alamat_blog' => $this->input->post('alamat_blog'),		
		);
		
		$this->db->insert('blog', $data);
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$judul_blog = $this->db->escape($post['judul_blog']);
		$isi_blog = $this->db->escape($post['isi_blog']);
		$tggl_blog = $this->db->escape($post['tggl_blog']);
		$author_blog = $this->db->escape($post['author_blog']);
		$email_author = $this->db->escape($post['email_author']);
		$alamat_blog = $this->db->escape($post['alamat_blog']);

		$sql = $this->db->query("UPDATE blog SET judul_atk = $judul_atk, isi_atk = $isi_atk, tggl_atk = $tggl_atk,author_atk = $author_atk, email_atk = $email_atk, alamat_atk = $alamat_atk WHERE id_atk = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("DELETE from blog WHERE id_blog = ".intval($id));
	}	

}