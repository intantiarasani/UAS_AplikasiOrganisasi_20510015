<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('org_model');
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

	public function datapengurus(){
		$data['organisasi'] = $this->org_model->getAllOrg();
		$this->load->view('tmp/navbar');
		$this->load->view('tmp/sidebar');
		$this->load->view('org_list.php', $data);
		$this->load->view('tmp/footer');
	}

	public function addnew(){
		$this->load->view('tmp/navbar');
		$this->load->view('tmp/sidebar');
		$this->load->view('addform');
		$this->load->view('tmp/footer');
	}

	public function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->org_model->edit_data($where,'organisasi')->result();
		$this->load->view('tmp/navbar');
		$this->load->view('tmp/sidebar');
		$this->load->view('edit.php',$data);
		$this->load->view('tmp/footer');
		
	}

	public function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$divisi = $this->input->post('divisi');
	$email = $this->input->post('email');
	$angkatan = $this->input->post('angkatan');
 
	$data = array(
		'nama' => $nama,
		'divisi' => $divisi,
		'email' => $email,
		'angkatan' => $angkatan
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->org_model->update_data($where,$data,'organisasi');
	redirect('Organisasi/Dashboard/datapengurus');
	}

	public function delete($id){
		$query=$this->org_model->deleteOrg($id);

		if ($query) {
			redirect('Organisasi/Dashboard/datapengurus');
		}
	}

	public function insert(){
		$org['nama']=$this->input->post('nama');
		$org['divisi']=$this->input->post('divisi');
		$org['email']=$this->input->post('email');
		$org['angkatan']=$this->input->post('angkatan');

		$query=$this->org_model->insertorg($org);
		if ($query) {
			redirect('Organisasi/Dashboard/datapengurus');
		}

	}
}

?>