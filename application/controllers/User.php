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
	//untuk memanggil sesion level 
	public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
    }

	// Log in user
	public function login(){

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('user_login');
			$this->load->view('templates/footer');
		} else {
			
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			// Login user
			$id_user = $this->user_model->login($username, $password);

			if($id_user){
				// Buat session
				$user_data = array(
					'id_user' => $id_user,
					'username' => $username,
					'logged_in' => true,
					'fk_level_id' => $this->user_model->get_user_level($id_user),
				);

				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('user_loggedin', 'Anda sudah login');

				redirect('user/dashboard');
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
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');
		$id_user = $this->session->userdata('id_user');

		// Dapatkan detail dari User
		$data['user'] = $this->user_model->get_user_details( $id_user );

	
	// Load view
	$this->load->view('templates/header', $data, FALSE);
	$this->load->view('templates/footer', $data, FALSE);
	}
// Dashboard
    public function dashboard(){

        if(!$this->session->userdata('logged_in')){
            redirect('user/login');
        }

        $username = $this->session->userdata('username');

        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details( $username );

 		$userData = $this->get_userdata();
        if ($userData['fk_level_id'] === '1'){
            $this->load->view('templates/header');
            $this->load->view('v_user1', $data);
            $this->load->view('templates/footer');
        } else if ($userData['fk_level_id'] === '2'){
            $this->load->view('templates/header');
            $this->load->view('v_user2', $data);
            $this->load->view('templates/footer');
        } else if ($userData['fk_level_id'] === '3') {
            $this->load->view('templates/header');
            $this->load->view('v_dashboard', $data);
            $this->load->view('templates/footer');
        }
    }


}
