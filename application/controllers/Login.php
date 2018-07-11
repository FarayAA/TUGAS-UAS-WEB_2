<?php

class Login extends CI_Controller{

	public function index(){
		if($this->session->userdata('isLogin')){
			redirect('beranda');
		}
		else{
			$this->load->view('login_form');
		}
		
	}

	public function cek(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('UserModel');

		$result = $this->UserModel->user_login($username, $password);

		if (count($result) > 0) {

			$userData = array(
							"nama" => $result[0]->nama,
							"id_user" => $result[0]->id_user,
							"isLogin" => true
						);
			
			$this->session->set_userdata($userData);

			redirect('beranda');
		}
		else{
			redirect('login');
		}

	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect ('login');
	}

}


//http://localhost/16TIA2-rentalmobil/index.php/Login
//http://localhost/16TIA2-rentalmobil/index.php/Login/index