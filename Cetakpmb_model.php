<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetakpmb_model extends CI_Model{
    private $table = 'pembukuan';
    private $id = 'id';
    function get_all()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }
}
?>