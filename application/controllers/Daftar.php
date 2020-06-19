<?php

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_m');
	}



	public function index() {

		$data['daftar'] = $this->Daftar_m->getAllDaftar();
		
		$data['judul'] = 'Penggunaan Website Ini Simak ya!';
		$this->load->view('template/header' , $data);
		$this->load->view('daftar/daftar', $data);
		$this->load->view('home/index', $data);
		$this->load->view('template/footer');
	}

}