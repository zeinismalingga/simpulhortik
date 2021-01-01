<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikasi_apbn extends MY_Controller {

	private $anggaran = 1;
	private $class = "sertifikasi_apbn";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_sertifikasi(){
		$data['sertifikasi'] = $this->sertifikasi_model->get_all(NULL, $this->anggaran);
		$data['class'] = $this->class;
		$data['class_tu'] = "tu_apbn";
		// dd($data['sertifikasi']);		
		$this->template->load('admin/template/template', 'admin/sertifikasi/list', $data);
	}

	public function add(){		
		$data['kotas'] = $this->master_model->get_kota();
		$data['kecamatans'] = $this->master_model->get_kecamatan();
		$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
		$data['varietass'] = $this->master_model->get_varietas();
		$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
		$data['jenis_tanaman'] = $this->master_model->get_jenis_tanaman();
		$data['jenis_perbanyakan_benih'] = $this->master_model->get_jenis_perbanyakan_benih();
		$data['hasil_sertifikasi'] = $this->master_model->get_hasil_sertifikasi();

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$this->template->load('admin/template/template', 'admin/sertifikasi/add', $data);
		}else{	
			// if($this->input->post('id_kelas_benih') == 2){
			// 	$kelas_benih = 'D';
			// }elseif($this->input->post('id_kelas_benih') == 3){
			// 	$kelas_benih = 'P';
			// }elseif($this->input->post('id_kelas_benih') == 4){
			// 	$kelas_benih = 'R';
			// }elseif($this->input->post('id_kelas_benih') == 5){
			// 	$kelas_benih = 'S';
			// }

			$sertifikasi = $this->sertifikasi_apbn_model->get_max_id();	

			$nomor = $sertifikasi['nomor'];
			$nomor = sprintf("%02d", $nomor + 1); 
			
			// $kode_varietas = $this->sertifikasi_model->get_varietas2($this->input->post('id_varietas'))['kode'];

			// $kode_varietas1 = substr($kode_varietas, 0,4);
			// $kode_varietas2 = trim(substr($kode_varietas, 4,2));

			// $no_induk = $kode_varietas1 . " ".$kode_varietas2.$kelas_benih . "/PSB. $nomor";

			$no_induk = "";

			$this->sertifikasi_model->add($no_induk, $this->anggaran);

			// get id sertifikasi
			$id_sertifikasi = $this->db->query("SELECT * FROM sertifikasi WHERE id_sertifikasi ORDER BY id_sertifikasi DESC LIMIT 1")->row_array();

			$id_sertifikasi = $id_sertifikasi['id_sertifikasi'];

			$this->sertifikasi_apbn_model->add($id_sertifikasi, $nomor);
			redirect('sertifikasi_apbn/list_sertifikasi');			
		}
	}

	public function edit($id){	
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);
		$data['kotas'] = $this->master_model->get_kota();
		$data['kecamatans'] = $this->master_model->get_kecamatan();
		$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
		$data['varietass'] = $this->master_model->get_varietas();
		$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
		$data['jenis_tanaman'] = $this->master_model->get_jenis_tanaman();
		$data['jenis_perbanyakan_benih'] = $this->master_model->get_jenis_perbanyakan_benih();
		$data['hasil_sertifikasi'] = $this->master_model->get_hasil_sertifikasi();

		$data['varietas_tb'] = $this->master_model->get_varietas2($data['sertifikasi']['id_varietas_tb']); 
		$data['kelas_benih_rencana'] = $this->master_model->get_kelas_benih2($data['sertifikasi']['id_kelas_benih_rencana']); 

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$this->template->load('admin/template/template', 'admin/sertifikasi/edit', $data);
		}else{	
			// if($this->input->post('id_kelas_benih') == 2){
			// 	$kelas_benih = 'D';
			// }elseif($this->input->post('id_kelas_benih') == 3){
			// 	$kelas_benih = 'P';
			// }elseif($this->input->post('id_kelas_benih') == 4){
			// 	$kelas_benih = 'R';
			// }elseif($this->input->post('id_kelas_benih') == 5){
			// 	$kelas_benih = 'S';
			// }

			// get no no_induk
			$no_induk = $this->db->query("SELECT * FROM sertifikasi WHERE id_sertifikasi = $id")->row_array();

			$no_induk = $no_induk['no_induk'];

			// dd($no_induk);

			$this->sertifikasi_model->edit($id, $no_induk, $this->anggaran);

			redirect('sertifikasi_apbn/list_sertifikasi');			
		}
	}

	public function delete($id){
		$this->sertifikasi_model->delete($id);
		redirect('sertifikasi_apbn/list_sertifikasi');			
	}

	public function print($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);
		$data['varietas_tb'] = $this->master_model->get_varietas2($data['sertifikasi']['id_varietas_tb']); 
		$data['kelas_benih_rencana'] = $this->master_model->get_kelas_benih2($data['sertifikasi']['id_kelas_benih_rencana']); 

		$this->load->view('admin/sertifikasi/print', $data);
	}

	public function print_llhp($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_llhp($id, $this->anggaran);	
	
		$this->load->view('admin/sertifikasi/print_llhp', $data);
	}

	public function print_sertifikat($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_llhp($id, $this->anggaran);	
		$this->load->view('admin/sertifikasi/print_sertifikat', $data);
	}

	public function detail($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);	

		$this->template->load('admin/template/template', 'admin/sertifikasi/detail', $data);
	}

	public function get_varietas(){
		$id = $this->input->post('id');
		$data = $this->master_model->get_varietas($id);
		echo json_encode($data);
	}

	public function get_kecamatan(){
		$id = $this->input->post('id');
		$data = $this->master_model->get_kecamatan($id);
		echo json_encode($data);
	}
	
}
