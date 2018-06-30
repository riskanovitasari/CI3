<?php defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function register($enc_password){
        // Array data user 
        $data = array(
            'nama' => $this->input->post('nama'),
            'kode_pos' => $this->input->post('kode_pos'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
           	'date_register' => date('Y-m-d'),
            'fk_level_id' => $this->input->post('manager')
        );

        // Insert user
        return $this->db->insert('users', $data);
    }

     function get_user_level($id_user)
    {
       // Dapatkan data user berdasar $user_id
        $this->db->select('fk_id_level');
        $this->db->where('id_user', $id_user);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0)->fk_id_level;
        } else {
            return false;
        }
    }

    function get_user_details($username)
    {
        $this->db->join('level', 'level.id_level = users.fk_id_level', 'left');
        $this->db->where('username', $username);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row();
        } else {
            return false;
        }
     }

    // Proses login user
    public function login($username, $password){
        // Validasi
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');


        if($result->num_rows() == 1){
            return $result->row(0)->id_user;
        } else {
            return false;
        }
    }
}