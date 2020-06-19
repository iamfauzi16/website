<?php

class Daftar_m extends CI_Model {
	public function getAllDaftar() {
		return $this->db->get('tb_daftar_user')->result_array();   // Produces: SELECT * FROM mytable
	}
}