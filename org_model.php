<?php
class org_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// PENNGURUS

	public function insertorg($org){
		return $this->db->insert('organisasi',$org);
	}

	public function getAllOrg(){
		$query = $this->db->get('organisasi');
		return $query->result();
	}

	public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function deleteOrg($id){
		$this->db->where('organisasi.id', $id);
		return $this->db->delete('organisasi');
	}
}