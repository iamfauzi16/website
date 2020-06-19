<?php

class Daftar extends CI_Controller {

	public function index() {

		$data['judul'] = 'Penggunaan Website Ini Simak ya!';
		$this->load->view('template/header' ,$data);
		$this->load->view('daftar/daftar');
		$this->load->view('template/footer');
	}

}