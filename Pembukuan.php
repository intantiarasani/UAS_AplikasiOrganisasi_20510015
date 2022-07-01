<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembukuan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('pmb_model');
		$this->load->database();
        //load model admin
        $this->load->model('admin');
        //cek session dan level user
        if($this->admin->is_role() != "admin"){
        redirect("login");	
		}
	}

	public function index(){
		$this->load->view('tmp/navbar');
		$this->load->view('tmp/sidebar');
		$this->load->view('home');
		$this->load->view('tmp/footer');
	}	

	public function logout(){
        $this->session->sess_destroy();
        redirect('login');
  	}

	// TABLE PENGURUS

	public function datapmb(){
		$data['pembukuan'] = $this->pmb_model->getAllpmb();
		$this->load->view('tmp_pmb/navbar');
		$this->load->view('tmp_pmb/sidebar');
		$this->load->view('pmb/pmb_list.php', $data);
		$this->load->view('tmp_pmb/footer');
	}

	public function addnew(){
		$this->load->view('tmp/navbar');
		$this->load->view('tmp/sidebar');
		$this->load->view('pmb/addform1');
		$this->load->view('tmp/footer');
	}

	public function edit($id){
	$where = array('id' => $id);
	$data['pembukuan'] = $this->pmb_model->edit_data($where,'pembukuan')->result();
		$this->load->view('tmp/navbar');
		$this->load->view('tmp/sidebar');
		$this->load->view('pmb/edit_pmb',$data);
		$this->load->view('tmp/footer');
		
	}

	public function update(){
	$id = $this->input->post('id');
	$pengirim = $this->input->post('pengirim');
	$penerima = $this->input->post('penerima');
	$tanggal_surat = $this->input->post('tanggal_surat');
	$jenis_surat = $this->input->post('jenis_surat');
 
	$data = array(
		'pengirim' => $pengirim,
		'penerima' => $penerima,
		'tanggal_surat' => $tanggal_surat,
		'jenis_surat' => $jenis_surat
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->pmb_model->update_data($where,$data,'pembukuan');
	redirect('Organisasi/Pembukuan/datapmb');
	}

	public function delete($id){
		$query=$this->pmb_model->deletepmb($id);

		if ($query) {
			redirect('Organisasi/Pembukuan/datapmb');
		}
	}

	public function insert(){
		$pmb['pengirim']=$this->input->post('pengirim');
		$pmb['penerima']=$this->input->post('penerima');
		$pmb['tanggal_surat']=$this->input->post('tanggal_surat');
		$pmb['jenis_surat']=$this->input->post('jenis_surat');

		$query=$this->pmb_model->insertpmb($pmb);
		if ($query) {
			redirect('Organisasi/Pembukuan/datapmb');
		}

	}
}

?>