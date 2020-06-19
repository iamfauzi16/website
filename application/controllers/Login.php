<?php

class Login extends CI_Controller {

	public function index() {

		$data['judul'] = 'Penggunaan Website Ini Simak ya!';
		$this->load->view('template/header' ,$data);
		$this->load->view('login/login');
		$this->load->view('template/footer');
	}

}