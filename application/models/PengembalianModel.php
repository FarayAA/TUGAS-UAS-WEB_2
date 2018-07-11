<?php

class PengembalianModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
//mengambil semua data
	public function getAll(){
		return $this->db->get('tb_pengembalian')->result();
	}
//mengambil 1 data
	public function getOne($id){
		$this->db->where('id_peminjaman',$id);
		$hasil = $this->db->get('tb_pengembalian');
		if($hasil->num_rows()>0){
			return $hasil->row();
		}
		return null;
	}

	public function save($values){
		return $this->db->insert('tb_pengembalian',$values);
	}


	public function change($values){
		$this->db->where('id_peminjaman',$id);
		return $this->db->update('tb_pengembalian',$values);
	}

	public function remove($values){
		$this->db->where('id_peminjaman',$id);
		return $this->db->delete('tb_pengembalian');
	}

}