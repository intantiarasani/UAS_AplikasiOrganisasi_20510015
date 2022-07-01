<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cetakpmb_model');
    }

    function index()
    {
        $data['pembukuan'] = $this->Cetakpmb_model->get_all();
        $this->load->view('cetakpmb', $data);
    }

    function cetak_surat()
    {
        $data['pembukuan'] = $this->Cetakpmb_model->get_all();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4','potrait');
        $this->filename = "cetakpmb";
        $this->pdf->load_view('cetakpmb',$data);
    }
}
?>