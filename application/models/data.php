<?php

class Data extends CI_Model{
	function ambil_data(){
		return $this->db->get('biodata');
	}
}

