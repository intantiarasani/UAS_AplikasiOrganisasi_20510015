<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cetakagt_model');
    }

    function index()
    {
        $data['anggota'] = $this->Cetakagt_model->get_all();
        $this->load->view('anggota', $data);
    }

    function cetak_agt()
    {
        $data['anggota'] = $this->Cetakagt_model->get_all();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4','potrait');
        $this->filename = "cetakagt";
        $this->pdf->load_view('cetakagt',$data);
    }
}
?>