<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatablesctr extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('List_Blog');
	}

	public function index()
	{
		// Dapatkan data artikel dari model
		$artikel['data'] = $this->List_Blog->get_artikels();
		$this->load->view('templates/header');
		$this->load->view('datatabelview', $artikel);
	}

	public function get_json()
	{
		$artikel['data'] = $this->List_Blog->get_artikels();
		
		// Tampilkan dalam bentuk format
		echo json_encode($artikel);
	}

	public function view_json()
	{
		$this->load->view('templates/header');
		$this->load->view('datatablesview/dt_json');
	}

}
