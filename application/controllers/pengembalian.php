<?php

class pengembalian extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if(!$this->session->userdata('isLogin')){
			redirect('login');
		}
		$this->load->model('PeminjamanModel');
	}

	public function index(){
		$data['menu'] = "pengembalian";
		$data['halaman'] = "pengembalian";
		$data['pengembalian'] = $this->PeminjamanModel->getAllKembali();
		$this->load->view('template',$data);
	}

}