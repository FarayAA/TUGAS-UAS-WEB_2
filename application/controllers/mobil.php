<?php

class mobil extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if(!$this->session->userdata('isLogin')){
			redirect('login');
		}
		$this->load->model('MobilModel');
	}

	public function index(){
		$data['menu'] = "mobil";
		$data['halaman'] = "mobil";
		$data['mobil'] = $this->MobilModel->getAll();
		$this->load->view('template',$data);
	}

	public function hapus($id=null){
		if($id!=null){
			if($this->MobilModel->remove($id)){
				$this->showNotif('success','Data berhasil dihapus');
				redirect('mobil');
			}
		}
		$this->showNotif('danger','Data gagal dihapus');
		redirect('mobil');
	}

	private function showNotif($type, $pesan){
		$dataFlash['notif']=true;
		$dataFlash['type']=$type;
		$dataFlash['pesan']=$pesan;
		$this->session->set_flashdata($dataFlash);
	}

	public function tambah(){
		$data['menu'] = "mobil";
		$data['halaman'] = "form-mobil";
		$this->load->view('template',$data);
	}

	public function ubah($id=null){
		if($id!=null){
			$data['menu'] = "mobil";
			$data['halaman'] = "form-mobil";
			$data['value'] = $this->MobilModel->getOne($id);
			$this->load->view('template',$data);
		}
		else{
			redirect('mobil');
		}
	}

	public function simpan($id=null){
		$values['merek'] 		= $this->input->post('merek');
		$values['no_polisi'] 	= $this->input->post('no_polisi');
		$values['warna'] 		= $this->input->post('warna');
		$values['tahun'] 		= $this->input->post('tahun');

 		if($id==null){
			if($this->MobilModel->save($values)){
				$this->showNotif('success','Data Berhasil Disimpan');
				redirect('mobil');
			}
	
		else{
				$this->showNotif('danger','Data Gagal Disimpan');
				redirect('mobil/tambah');
		}
	}
		else{
			if($this->MobilModel->change($id, $values)){
				$this->showNotif('success','Data Berhasil Diubah');
				redirect('mobil');
			}
			else{
				$this->showNotif('danger','Data Gagal Diubah');
				redirect('mobil/ubah'.$id);
		}
		}
	}

}