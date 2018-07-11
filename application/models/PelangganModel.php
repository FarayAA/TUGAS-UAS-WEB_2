<?php

class PelangganModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
//mengambil semua data
	public function getAll(){
		return $this->db->get('tb_customer')->result();
	}
//mengambil 1 data
	public function getOne($id){
		$this->db->where('id_customer',$id);
		$hasil = $this->db->get('tb_customer');
		if($hasil->num_rows()>0){
			return $hasil->row();
		}
		return null;
	}

	public function save($values){
		return $this->db->insert('tb_customer',$values);
	}


	public function change($id, $values){
		$this->db->where('id_customer',$id);
		return $this->db->update('tb_customer',$values);
	}

	public function remove($id){
		$this->db->where('id_customer',$id);
		return $this->db->delete('tb_customer');
	}

}