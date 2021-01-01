<?php
class Inventaris_pengedar_model extends CI_Model {

	public function get_all($id = NULL){
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM inventaris_pengedar INNER JOIN kota ON inventaris_pengedar.id_kota = kota.id_kota INNER JOIN jenis_varietas ON inventaris_pengedar.id_jenis_varietas = jenis_varietas.id_jenis_varietas LEFT JOIN varietas ON inventaris_pengedar.id_varietas = varietas.id_varietas");
			return $query->result_array();
		}else{
			$query = $this->db->query("SELECT * FROM inventaris_pengedar INNER JOIN kota ON inventaris_pengedar.id_kota = kota.id_kota INNER JOIN jenis_varietas ON inventaris_pengedar.id_jenis_varietas = jenis_varietas.id_jenis_varietas LEFT JOIN varietas ON inventaris_pengedar.id_varietas = varietas.id_varietas WHERE inventaris_pengedar.id_inventaris_pengedar = $id");
			return $query->row_array();
		}
	}

	public function add(){
		$data = array(
			'nama_badan_usaha' => $this->input->post('nama_badan_usaha'),
			'nama_produsen' => $this->input->post('nama_produsen'),
			'id_kota' => $this->input->post('id_kota'),
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_varietas' => $this->input->post('id_varietas'),
			'luas_lahan' => $this->input->post('luas_lahan'),
			'mulai_produksi' => $this->input->post('mulai_produksi'),
			'jumlah_benih' => $this->input->post('jumlah_benih'),
			'alamat_produsen' => $this->input->post('alamat_produsen'),
			'bentuk_usaha' => $this->input->post('bentuk_usaha'),
			'status_usaha' => $this->input->post('status_usaha'),
			'tgl_terbit' => $this->input->post('tgl_terbit'),
			'masa_berlaku' => $this->input->post('masa_berlaku'),
			'nomor_sertifikat' => $this->input->post('nomor_sertifikat'),
			'ket' => $this->input->post('ket'),
		);
		return $this->db->insert('inventaris_pengedar', $data);
	}

	public function edit($id){
		$data = array(
			'nama_badan_usaha' => $this->input->post('nama_badan_usaha'),
			'nama_produsen' => $this->input->post('nama_produsen'),
			'id_kota' => $this->input->post('id_kota'),
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_varietas' => $this->input->post('id_varietas'),
			'luas_lahan' => $this->input->post('luas_lahan'),
			'mulai_produksi' => $this->input->post('mulai_produksi'),
			'jumlah_benih' => $this->input->post('jumlah_benih'),
			'alamat_produsen' => $this->input->post('alamat_produsen'),
			'bentuk_usaha' => $this->input->post('bentuk_usaha'),
			'status_usaha' => $this->input->post('status_usaha'),
			'tgl_terbit' => $this->input->post('tgl_terbit'),
			'masa_berlaku' => $this->input->post('masa_berlaku'),
			'nomor_sertifikat' => $this->input->post('nomor_sertifikat'),
			'ket' => $this->input->post('ket'),
		);

		$this->db->where('id_inventaris_pengedar', $id);
		return $this->db->update('inventaris_pengedar', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_inventaris_pengedar', $id);
		return $this->db->delete('inventaris_pengedar', $data);
	}

}
