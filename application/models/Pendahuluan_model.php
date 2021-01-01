<?php 
class Pendahuluan_model extends CI_Model {

	public function get_all($id = NULL, $id_sertifikasi){ 
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM sertifikasi, pendahuluan WHERE sertifikasi.id_sertifikasi = pendahuluan.id_sertifikasi AND sertifikasi.id_sertifikasi = $id_sertifikasi");	
			return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM pendahuluan WHERE id_sertifikasi = $id_sertifikasi AND id_pendahuluan = $id");
			return $query->row_array();	
		}		
	}

	public function add($id_sertifikasi, $id_anggaran){
		$data = array(
			'id_sertifikasi' => $id_sertifikasi,
			'jenis_anggaran' => $id_anggaran,
			'bentuk_biji' => $this->input->post('bentuk_biji'),
			'peta' => $this->input->post('peta'),
			'label' => $this->input->post('label'),
			'fasilitas' => $this->input->post('fasilitas'),
			'buah' => $this->input->post('buah'),
			'sayur' => $this->input->post('sayur'),
			'tanaman_obat' => $this->input->post('tanaman_obat'),
			'jenis_buah' => $this->input->post('jenis_buah'),
			'jenis_sayur' => $this->input->post('jenis_sayur'),
			'jenis_tanaman_obat' => $this->input->post('jenis_tanaman_obat'),
			'id_varietas_buah' => $this->input->post('id_varietas_buah'),
			'id_varietas_sayur' => $this->input->post('id_varietas_sayur'),
			'id_varietas_tanaman_obat' => $this->input->post('id_varietas_tanaman_obat'),
			'tgl_pendahuluan' => $this->input->post('tgl_pendahuluan'),
		);		
		return $this->db->insert('pendahuluan', $data);
	}

	public function edit($id){
		$data = array(
			'bentuk_biji' => $this->input->post('bentuk_biji'),
			'peta' => $this->input->post('peta'),
			'label' => $this->input->post('label'),
			'fasilitas' => $this->input->post('fasilitas'),
			'buah' => $this->input->post('buah'),
			'sayur' => $this->input->post('sayur'),
			'tanaman_obat' => $this->input->post('tanaman_obat'),
			'jenis_buah' => $this->input->post('jenis_buah'),
			'jenis_sayur' => $this->input->post('jenis_sayur'),
			'jenis_tanaman_obat' => $this->input->post('jenis_tanaman_obat'),
			'id_varietas_buah' => $this->input->post('id_varietas_buah'),
			'id_varietas_sayur' => $this->input->post('id_varietas_sayur'),
			'id_varietas_tanaman_obat' => $this->input->post('id_varietas_tanaman_obat'),
			'tgl_pendahuluan' => $this->input->post('tgl_pendahuluan'),
		);					

		$this->db->where('id_pendahuluan', $id);
		return $this->db->update('pendahuluan', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_pendahuluan', $id);
		return $this->db->delete('pendahuluan', $data);		
	}

	public function total_kelas_bd($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM pendahuluan WHERE id_komoditi = 1 AND id_bulan = 1 AND id_kelas_benih = 2");
		return $query->result_array();		
	}

	public function total_kelas_bp($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM pendahuluan WHERE id_komoditi = 1 AND id_bulan = 1 AND id_kelas_benih = 3");
		return $query->result_array();		
	}

	public function total_kelas_br($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM pendahuluan WHERE id_komoditi = 1 AND id_bulan = 1 AND id_kelas_benih = 4");
		return $query->result_array();		
	}

	public function jumlah($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM pendahuluan WHERE id_komoditi = 1 AND id_bulan = 1");
		return $query->result_array();		
	}



}