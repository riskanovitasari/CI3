<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category_model extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
    }
    public function get_all_categories()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('cat_name');
        $query = $this->db->get('categories');
        return $query->result();
    }
    public function create_category()
    {
        $data = array(
            'cat_name'          => $this->input->post('cat_name'),
            'cat_description'   => $this->input->post('cat_description')
        );
        return $this->db->insert('categories', $data);
    }
    // Dapatkan kategori berdasar ID
    public function get_category_by_id($id)
    {
        $query = $this->db->get_where('categories', array('id' => $id));
        return $query->row();
    }
}