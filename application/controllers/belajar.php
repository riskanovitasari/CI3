<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('data');
	}
 
	function user(){
		$data['biodata'] = $this->data->ambil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('v_user.php',$data);
	}
 
}