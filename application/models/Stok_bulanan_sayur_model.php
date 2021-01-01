<?php 
class Stok_bulanan_sayur_model extends CI_Model {

	public function get_all($id = NULL, $id_bulan){ 
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM stok_bulanan_sayur, jenis_varietas, varietas, bulan, kelas_benih WHERE stok_bulanan_sayur.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND stok_bulanan_sayur.id_varietas = varietas.id_varietas AND stok_bulanan_sayur.id_kelas_benih = kelas_benih.id_kelas_benih AND stok_bulanan_sayur.id_bulan = $id_bulan AND bulan.id_bulan = $id_bulan ORDER BY stok_bulanan_sayur.id_jenis_varietas ASC");	
			return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM stok_bulanan_sayur, jenis_varietas, varietas, bulan, kelas_benih WHERE stok_bulanan_sayur.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND stok_bulanan_sayur.id_varietas = varietas.id_varietas AND stok_bulanan_sayur.id_kelas_benih = kelas_benih.id_kelas_benih AND stok_bulanan_sayur.id_stok_bulanan_sayur = $id AND bulan.id_bulan = $id_bulan");
			return $query->row_array();	
		}		
	}

	public function add($id_bulan){
		$data = array(
			'id_bulan' => $id_bulan,
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_varietas' => $this->input->post('id_varietas'),
			'id_kelas_benih' => $this->input->post('id_kelas_benih'),
			'jumlah_stok_bln_ini' => $this->input->post('jumlah_stok_bln_ini'),
			'tersalur_bln_ini' => $this->input->post('tersalur_bln_ini'),
			'jumlah_stok_kumulatif' => $this->input->post('jumlah_stok_kumulatif'),
			'tersalur_kumulatif' => $this->input->post('tersalur_kumulatif'),
			'sisa_stok' => $this->input->post('sisa_stok'),
		);		
		return $this->db->insert('stok_bulanan_sayur', $data);
	}

	public function edit($id){
		$data = array(
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_varietas' => $this->input->post('id_varietas'),
			'id_kelas_benih' => $this->input->post('id_kelas_benih'),
			'jumlah_stok_bln_ini' => $this->input->post('jumlah_stok_bln_ini'),
			'tersalur_bln_ini' => $this->input->post('tersalur_bln_ini'),
			'jumlah_stok_kumulatif' => $this->input->post('jumlah_stok_kumulatif'),
			'tersalur_kumulatif' => $this->input->post('tersalur_kumulatif'),
			'sisa_stok' => $this->input->post('sisa_stok'),
		);				

		$this->db->where('id_stok_bulanan_sayur', $id);
		return $this->db->update('stok_bulanan_sayur', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_stok_bulanan_sayur', $id);
		return $this->db->delete('stok_bulanan_sayur', $data);		
	}

}