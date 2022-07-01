<?php
class agt_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//ANGGOTA

	public function insertAgt($agt){
		return $this->db->insert('anggota',$agt);
	}

	public function getAllAgt(){
		$query = $this->db->get('anggota');
		return $query->result();
	}

	public function edit_agt($where,$table){		
	return $this->db->get_where($table,$where);
	}

	public function update_agt($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function deleteAgt($id){
		$this->db->where('anggota.id', $id);
		return $this->db->delete('anggota');
	}
}
