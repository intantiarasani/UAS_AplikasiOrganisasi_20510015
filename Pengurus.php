<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_COntroller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cetakprs_model');
    }

    function index()
    {
        $data['organisasi'] = $this->Cetakprs_model->get_all();
        $this->load->view('cetakprs', $data);
    }

    function cetak_organisasi()
    {
        $data['organisasi'] = $this->Cetakprs_model->get_all();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4','potrait');
        $this->filename = "cetakprs";
        $this->pdf->load_view('cetakprs',$data);
    }
}
?>