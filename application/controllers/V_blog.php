<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_blog extends CI_Controller {

	public function index()
	{
		$this->load->model('List_Blog');
		$data['artikel'] = $this->List_Blog->get_artikels();
		$this->load->view('home_view', $data);
		
	}

	public function detail($id)
	{
		$this->load->model('List_Blog');
		$data['detail'] = $this->List_Blog->get_single($id);
		$this->load->view('home_detail', $data);
	}

	public function add()
	{
		$this->load->model('List_Blog');
		$data['tipe'] = "Add";

		$this->load->library('form_validation');
               $this->form_validation->set_rules('judul_blog', 'Title', 'required');
               $this->form_validation->set_rules('id_blog', 'Author', 'required');
               $this->form_validation->set_rules('gambar_blog', 'Content', 'required');
               $this->form_validation->set_rules('tggl_blog', 'Content', 'required');
               $this->form_validation->set_rules('author_blog', 'Content', 'required');
               $this->form_validation->set_rules('email_author', 'Content', 'required');
               $this->form_validation->set_rules('alamat_blog', 'Content', 'required');

        //if ($this->form_validation->run() == FALSE) {
          //  $this->load->view('home_view_form');
        //} else {

		if ($this->input->post('simpan')) {
			$upload = $this->List_Blog->upload();

			if ($upload['result'] == 'success') {
				$this->List_Blog->save($upload);
				redirect('V_blog/');
			}else{
				$data['message'] = $upload['error'];
			}
		}
	//}

		$this->load->view('home_view_form', $data);
	}

	public function edit($id){
		$this->load->model("List_Blog");
		$data['tipe'] = "Edit";
		$data['default'] = $this->List_Blog->get_default($id);

		if(isset($_POST['simpan'])){
			$this->List_Blog->update($_POST, $id);
			redirect("V_blog");
		}

		$this->load->view("home_view_form",$data);
	}

	public function delete($id){
		$this->load->model("List_Blog");
		$this->List_Blog->hapus($id);
		redirect("V_blog/");
	}
	
}