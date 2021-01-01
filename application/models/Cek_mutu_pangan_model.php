<?php 
class Cek_mutu_pangan_model extends CI_Model {

	public function get_all($id = NULL){ 
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM cek_mutu_pangan, jenis_varietas, varietas WHERE cek_mutu_pangan.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND cek_mutu_pangan.id_varietas AND cek_mutu_pangan.id_varietas = varietas.id_varietas");
			return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM cek_mutu_pangan, jenis_varietas, varietas WHERE cek_mutu_pangan.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND cek_mutu_pangan.id_varietas AND cek_mutu_pangan.id_varietas = varietas.id_varietas AND cek_mutu_pangan.id_cek_mutu_pangan = $id");
			return $query->row_array();	
		}		
	}

	public function add(){
		$data = array(
			'nama_produsen' => $this->input->post('nama_produsen'),
			'alamat_produsen' => $this->input->post('alamat_produsen'),
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_varietas' => $this->input->post('id_varietas'),
			'tgl_panen' => $this->input->post('tgl_panen'),
			'tonase' => $this->input->post('tonase'),
			'berat' => $this->input->post('berat'),
			'asal_benih' => $this->input->post('asal_benih'),
			'tgl_pengambilan' => $this->input->post('tgl_pengambilan'),
			'tgl_selesai' => $this->input->post('tgl_selesai'),
			'ka' => $this->input->post('ka'),
			'bm' => $this->input->post('bm'),
			'cvl' => $this->input->post('cvl'),
			'kb' => $this->input->post('kb'),
			'btl' => $this->input->post('btl'),
			'dt' => $this->input->post('dt'),
			'tgl_kadaluarsa' => $this->input->post('tgl_kadaluarsa'),
			'ket' => $this->input->post('ket'),
		);		
		return $this->db->insert('cek_mutu_pangan', $data);
	}

	public function edit($id){
		$data = array(
			'nama_produsen' => $this->input->post('nama_produsen'),
			'alamat_produsen' => $this->input->post('alamat_produsen'),
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_varietas' => $this->input->post('id_varietas'),
			'tgl_panen' => $this->input->post('tgl_panen'),
			'tonase' => $this->input->post('tonase'),
			'berat' => $this->input->post('berat'),
			'asal_benih' => $this->input->post('asal_benih'),
			'tgl_pengambilan' => $this->input->post('tgl_pengambilan'),
			'tgl_selesai' => $this->input->post('tgl_selesai'),
			'ka' => $this->input->post('ka'),
			'bm' => $this->input->post('bm'),
			'cvl' => $this->input->post('cvl'),
			'kb' => $this->input->post('kb'),
			'btl' => $this->input->post('btl'),
			'dt' => $this->input->post('dt'),
			'tgl_kadaluarsa' => $this->input->post('tgl_kadaluarsa'),
			'ket' => $this->input->post('ket'),
		);				

		$this->db->where('id_cek_mutu_pangan', $id);
		return $this->db->update('cek_mutu_pangan', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_cek_mutu_pangan', $id);
		return $this->db->delete('cek_mutu_pangan', $data);		
	}



}