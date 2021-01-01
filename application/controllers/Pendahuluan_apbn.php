<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendahuluan_apbn extends MY_Controller {

	private $class = "pendahuluan_apbn";
	private $anggaran = 1;

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function list($id_sertifikasi){
		$data['class'] = $this->class;
		$data['id_sertifikasi'] = $id_sertifikasi;
		$data['pendahuluan'] = $this->pendahuluan_model->get_all('' ,$id_sertifikasi);

		$this->template->load('admin/template/template', 'admin/pendahuluan/list', $data);
	}

	public function add($id_sertifikasi){
		$data['id_sertifikasi'] = $id_sertifikasi;
		$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
		$data['varietass'] = $this->master_model->get_varietas();

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;

			$this->template->load('admin/template/template', 'admin/pendahuluan/add', $data);
		}else{			
			$this->pendahuluan_model->add($id_sertifikasi, $this->anggaran);
			redirect("pendahuluan_apbn/list/$id_sertifikasi");		
		}
			
	}

	public function edit($id, $id_sertifikasi){
		$data['id'] = $id;
		$data['id_sertifikasi'] = $id_sertifikasi;
		$data['class'] = $this->class;
		$data['pendahuluan'] = $this->pendahuluan_model->get_all($id ,$id_sertifikasi);
		$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
		$data['varietass'] = $this->master_model->get_varietas();

		//jenis varietas
		$data['jenis_buah'] = $this->master_model->get_jenis_varietas2($data['pendahuluan']['jenis_buah']);
		$data['jenis_sayur'] = $this->master_model->get_jenis_varietas2($data['pendahuluan']['jenis_sayur']);
		$data['jenis_tanaman_obat'] = $this->master_model->get_jenis_varietas2($data['pendahuluan']['jenis_tanaman_obat']);

		//varietas
		$data['varietas_buah'] = $this->master_model->get_varietas2($data['pendahuluan']['id_varietas_buah']);
		$data['varietas_sayur'] = $this->master_model->get_varietas2($data['pendahuluan']['id_varietas_sayur']);
		$data['varietas_tanaman_obat'] = $this->master_model->get_varietas2($data['pendahuluan']['id_varietas_tanaman_obat']);

		if($this->form_validation->run() === FALSE){	
			$data['pendahuluan'] = $this->pendahuluan_model->get_all($id ,$id_sertifikasi);

			$this->template->load('admin/template/template', 'admin/pendahuluan/edit', $data);
		}else{			
			$this->pendahuluan_model->edit($id);
			redirect("pendahuluan_apbn/list/$id_sertifikasi");		
		}
			
	}

	public function delete($id, $id_sertifikasi){
		$this->pendahuluan_benih_model->delete($id);
		redirect("pendahuluan_apbn/list/$id_sertifikasi");			
	}

	public function print($id_komoditi, $id_bulan){
		$data['id_komoditi'] = $id_komoditi;
		$data['id_bulan'] = $id_bulan;
		$data['class'] = $this->class;
		$data['stok_pangan'] = $this->pendahuluan_model->get_all('',$data['id_komoditi'], $data['id_bulan']);

		$this->load->view('admin/pendahuluan/print', $data);
	}
	
}
