<?php

class Home extends CI_Controller {

	public function index() {

		$data['judul'] = 'Selamat Datang di antrian-e RS.Graha Permata ibu';
		$this->load->view('template/header' ,$data);
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}

}