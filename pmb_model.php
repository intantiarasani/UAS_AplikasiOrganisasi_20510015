<?php
class pmb_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// PENNGURUS

	public function insertpmb($pmb){
		return $this->db->insert('pembukuan',$pmb);
	}

	public function getAllpmb(){
		$query = $this->db->get('pembukuan');
		return $query->result();
	}

	public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function deletepmb($id){
		$this->db->where('pembukuan.id', $id);
		return $this->db->delete('pembukuan');
	}
}