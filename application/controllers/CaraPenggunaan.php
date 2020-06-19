<?php

class CaraPenggunaan extends CI_Controller {

	public function index() {

		$data['judul'] = 'Penggunaan Website Ini Simak ya!';
		$this->load->view('template/header' ,$data);
		$this->load->view('penggunaan/penggunaan');
		$this->load->view('template/footer');
	}

}