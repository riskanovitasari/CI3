<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
				
		$this->load->library('form_validation');
		$this->load->helper('MY');
		$this->load->model('user_model');
	}

	// Register user
	public function register(){
		$data['page_title'] = 'Pendaftaran User';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('user_register', $data);
			$this->load->view('templates/footer');
		} else {
			// Encrypt password
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			// Set message
		$this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

			redirect('V_blog');
		}
	}

	// Log in user
	public function login(){

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('user_login', $data);
			$this->load->view('templates/footer');
		} else {
			
			$username = $this->input->post('username');
			// Get & encrypt password
			$password = md5($this->input->post('password'));

			// Login user
			$user_id = $this->user_model->login($username, $password);

			if($user_id){
				// Buat session
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true,
					'fk_level_id' => $this->user_model->get_user_level($user_id),
				);

				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('user_loggedin', 'Anda sudah login');

				redirect('V_blog');
			} else {
				// Set message
				$this->session->set_flashdata('login_failed', 'Login invalid');

				redirect('user/login');
			}		
 		}
 	}

	// Log user out
	public function logout(){
// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$user_id = $this->session->userdata('user_id');

		// Dapatkan detail dari User
		$data['user'] = $this->user_model->get_user_details( $user_id );

	}
	// Load view
	$this->load->view('templates/header', $data, FALSE);
	$this->load->view('templates/footer', $data, FALSE);
}
