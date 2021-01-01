<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_bulanan_buah extends MY_Controller {

	private $class = "stok_bulanan_buah";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function pilih(){
		$data['bulans'] = $this->master_model->get_bulan();	
		$data['class'] = $this->class;	
		$this->template->load('admin/template/template', 'admin/stok_bulanan_buah/pilih', $data);
	}

	public function list(){
		$data['id_bulan'] = $this->input->get('bulan');

		$data['id_bulan'] = $this->input->get('id_bulan');
		$data['class'] = $this->class;
		$data['stok_buah'] = $this->stok_bulanan_buah_model->get_all('', $data['id_bulan']);

		$this->template->load('admin/template/template', 'admin/stok_bulanan_buah/list', $data);
	}

	public function add($id_bulan){

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$data['id_bulan'] = $id_bulan;
			$data['jenis_varietas'] = $this->master_model->get_jenis_varietas_buah();
			$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
			$data['varietas'] = $this->master_model->get_varietas();

			$this->template->load('admin/template/template', 'admin/stok_bulanan_buah/add', $data);
		}else{			

			$this->stok_bulanan_buah_model->add($id_bulan);
			redirect("stok_bulanan_buah/list?id_bulan=$id_bulan");		
		}
			
	}

	public function edit($id, $id_bulan){

		if($this->form_validation->run() === FALSE){	
			$data['id'] = $id;
			$data['id_bulan'] = $id_bulan;
			$data['class'] = $this->class;
			$data['jenis_varietas'] = $this->master_model->get_jenis_varietas_buah();
			$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
			$data['stok_buah'] = $this->stok_bulanan_buah_model->get_all($id, $id_bulan);


			$this->template->load('admin/template/template', 'admin/stok_bulanan_buah/edit', $data);
		}else{			
			$this->stok_bulanan_buah_model->edit($id);
			redirect("stok_bulanan_buah/list?id_bulan=$id_bulan");		
		}
			
	}

	public function delete($id, $id_bulan){
		$this->stok_bulanan_buah_model->delete($id);
		redirect("stok_bulanan_buah/list?id_komoditi=$id_komoditi&id_bulan=$id_bulan");			
	}

	public function print($id_bulan){

		$data['id_bulan'] = $id_bulan;
		$data['class'] = $this->class;
		$data['stok_buah'] = $this->stok_bulanan_buah_model->get_all('', $data['id_bulan']);

		$this->load->view('admin/stok_bulanan_buah/print', $data);
	}
	
}
