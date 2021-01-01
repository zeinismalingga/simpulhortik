<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_mutu_pangan extends MY_Controller {

	private $class = "cek_mutu_pangan";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list(){
		$data['class'] = $this->class;
		$data['cek_mutu'] = $this->cek_mutu_pangan_model->get_all();

		// dd($data['cek_mutu']);	

		$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/list', $data);
	}

	public function add(){

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$data['varietass'] = $this->master_model->get_varietas();
			$data['jenis_varietas'] = $this->master_model->get_jenis_varietas();

			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/add', $data);
		}else{			

			$this->cek_mutu_pangan_model->add();
			redirect("cek_mutu_pangan/list");		
		}
			
	}

	public function edit($id){

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$data['cek_mutu'] = $this->cek_mutu_pangan_model->get_all($id);
			$data['varietass'] = $this->master_model->get_varietas();
			$data['jenis_varietas'] = $this->master_model->get_jenis_varietas();

			// dd($data['cek_mutu']);

			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/edit', $data);
		}else{			
			$this->cek_mutu_pangan_model->edit($id);
			redirect("cek_mutu_pangan/list");	
		}
			
	}

	public function delete($id, $id_bulan){
		$this->cek_mutu_pangan_model->delete($id);
		redirect("cek_mutu_pangan/list");			
	}

	public function print(){
		$data['class'] = $this->class;
		$data['cek_mutu'] = $this->cek_mutu_pangan_model->get_all();

		$this->load->view('admin/cek_mutu_pangan/print', $data);
	}

	public function get_varietas(){
		$id = $this->input->post('id');
		$data = $this->master_model->get_varietas($id);
		echo json_encode($data);
	}
	
}
