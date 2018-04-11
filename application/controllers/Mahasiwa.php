<?php
Class Mahasiwa extends CI_Controller{

	public function index(){
		$this->load->model("model_data_mahasiswa");
		$data['list_mahasiswa'] = $this->model_data_mahasiswa->load_mahasiwa();
		$this->load->view("data_mahasiswa",$data);
	}

	public function add(){
		$this->load->model("model_data_mahasiswa");
		$data['tipe'] = "Add";
		if(isset($_POST['tombol_simpan'])){
			//proses simpan dilakukan
			$this->model_data_mahasiswa->simpan($_POST);
			redirect("Mahasiwa");
		}
		$this->load->view("mahasiswa_form",$data);
	}
	
	public function edit($id){
		$this->load->model("model_data_mahasiswa");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_data_mahasiswa->get_default($id);
		if(isset($_POST['tombol_simpan'])){
			$this->model_data_mahasiswa->update($_POST, $id);
			redirect("mahasiwa");
		}
		$this->load->view("mahasiswa_form",$data);
	}
	public function delete($id){
		$this->load->model("model_data_mahasiswa");
		$this->model_data_mahasiswa->hapus($id);
		redirect("mahasiwa");
	}
}