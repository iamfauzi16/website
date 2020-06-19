<?php

class Kunjungi extends CI_Controller {

	public function index() {

		$data['judul'] = 'Penggunaan Website Ini Simak ya!';
		$this->load->view('template/header' ,$data);
		$this->load->view('kunjungi/kunjungi');
		$this->load->view('template/footer');
	}

}