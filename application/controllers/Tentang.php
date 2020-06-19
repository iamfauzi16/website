<?php

class Tentang extends CI_Controller {

	public function index() {

		$data['judul'] = 'Tentang kami';
		$this->load->view('template/header' ,$data);
		$this->load->view('tentang/tentang');
		$this->load->view('template/footer');
	}

}