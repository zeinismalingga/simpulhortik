<?php 
class Sertifikasi_model extends CI_Model {

	public function total(){
		$query = $this->db->query("SELECT COUNT(id_sertifikasi) as total FROM sertifikasi");
        return $query->row_array();		
	}

	public function get_all($id = NULL, $anggaran = NULL){ 


		if($id == NULL){
			$query = $this->db->query("SELECT * FROM sertifikasi, jenis_perbanyakan_benih, jenis_tanaman, jenis_varietas WHERE sertifikasi.id_jenis_tanaman = jenis_tanaman.id_jenis_tanaman AND sertifikasi.id_jenis_perbanyakan_benih = jenis_perbanyakan_benih.id_jenis_perbanyakan_benih AND sertifikasi.komoditi = jenis_varietas.id_jenis_varietas AND sertifikasi.jenis_anggaran = $anggaran");
			return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM sertifikasi LEFT JOIN varietas ON sertifikasi.id_varietas_biji = varietas.id_varietas OR sertifikasi.id_varietas_okulasi = varietas.id_varietas OR sertifikasi.id_varietas_okulasi_2 = varietas.id_varietas OR sertifikasi.id_varietas_anakan = varietas.id_varietas LEFT JOIN kelas_benih ON sertifikasi.id_kelas_benih_okulasi = kelas_benih.id_kelas_benih OR sertifikasi.id_kelas_benih_biji = kelas_benih.id_kelas_benih OR sertifikasi.id_kelas_benih_anakan = kelas_benih.id_kelas_benih LEFT JOIN jenis_perbanyakan_benih ON sertifikasi.id_jenis_perbanyakan_benih = jenis_perbanyakan_benih.id_jenis_perbanyakan_benih LEFT JOIN jenis_tanaman ON sertifikasi.id_jenis_tanaman = jenis_tanaman.id_jenis_tanaman LEFT JOIN jenis_varietas ON sertifikasi.komoditi = jenis_varietas.id_jenis_varietas LEFT JOIN kota ON sertifikasi.id_kota = kota.id_kota LEFT JOIN kecamatan ON sertifikasi.id_kecamatan = kecamatan.id_kecamatan LEFT JOIN hasil_sertifikasi ON sertifikasi.id_hasil_sertifikasi = hasil_sertifikasi.id_hasil_sertifikasi WHERE sertifikasi.id_sertifikasi = $id");
			return $query->row_array();	
		}		
	}

	public function add($no_induk, $anggaran){
		$data = array(
			'no_induk' => $no_induk,
			'jenis_anggaran' => $anggaran,
			'id_jenis_tanaman' => $this->input->post('id_jenis_tanaman'),
			'id_jenis_perbanyakan_benih' => $this->input->post('id_jenis_perbanyakan_benih'),
			//id jenis varietas = komoditas
			'komoditi' => $this->input->post('id_jenis_varietas'),
			'nama_pemohon' => $this->input->post('nama_pemohon'),
			'nama_usaha' => $this->input->post('nama_usaha'),
			'alamat' => $this->input->post('alamat'),
			'no_sertifikasi' => $this->input->post('no_sertifikasi'),
			'no_tanda_daftar' => $this->input->post('no_tanda_daftar'),
			'blok' => $this->input->post('blok'),
			'kampung' => $this->input->post('kampung'),
			'desa' => $this->input->post('desa'),
			'id_kecamatan' => $this->input->post('id_kecamatan'),
			'id_kota' => $this->input->post('id_kota'),
			'id_kelas_benih_rencana' => $this->input->post('id_kelas_benih_rencana'),
			'luas_penangkaran' => $this->input->post('luas_penangkaran'),
			'volume' => $this->input->post('volume'),
			'tgl_perbanyakan' => $this->input->post('tgl_perbanyakan'),
			'jumlah_pohon' => $this->input->post('jumlah_pohon'),
			'id_varietas_okulasi' => $this->input->post('id_varietas_okulasi'),
			'id_kelas_benih_okulasi' => $this->input->post('id_kelas_benih_okulasi'),
			'no_register_pi_okulasi' => $this->input->post('no_register_pi_okulasi'),
			'lokasi_pohon_induk' => $this->input->post('lokasi_pohon_induk'),
			'id_varietas_okulasi_2' => $this->input->post('id_varietas_okulasi_2'),
			'lokasi_pohon_induk_2' => $this->input->post('lokasi_pohon_induk_2'),
			'id_varietas_biji' => $this->input->post('id_varietas_biji'),
			'id_kelas_benih_biji' => $this->input->post('id_kelas_benih_biji'),
			'no_kelompok_biji' => $this->input->post('no_kelompok_biji'),
			'asal_benih_biji' => $this->input->post('asal_benih_biji'),
			'id_varietas_anakan' => $this->input->post('id_varietas_anakan'),
			'id_kelas_benih_anakan' => $this->input->post('id_kelas_benih_anakan'),
			'no_kelompok_anakan' => $this->input->post('no_kelompok_anakan'),
			'asal_benih_anakan' => $this->input->post('asal_benih_anakan'),
			'jenis_tanaman_tb' => $this->input->post('jenis_tanaman_tb'),
			'id_varietas_tb' => $this->input->post('id_varietas_tb'),
			'no_sertifikasi_tb' => $this->input->post('no_sertifikasi_tb'),
			'tgl_panen_tb' => $this->input->post('tgl_panen_tb'),
			'id_hasil_sertifikasi' => $this->input->post('id_hasil_sertifikasi'),
			'tgl_permohonan' => $this->input->post('tgl_permohonan'),
		);		
		return $this->db->insert('sertifikasi', $data);
	}

	public function edit($id, $no_induk, $anggaran){
		$data = array(
			'no_induk' => $no_induk,
			'jenis_anggaran' => $anggaran,
			'id_jenis_tanaman' => $this->input->post('id_jenis_tanaman'),
			'id_jenis_perbanyakan_benih' => $this->input->post('id_jenis_perbanyakan_benih'),
			//id jenis varietas = komoditas
			'komoditi' => $this->input->post('id_jenis_varietas'),
			'nama_pemohon' => $this->input->post('nama_pemohon'),
			'nama_usaha' => $this->input->post('nama_usaha'),
			'alamat' => $this->input->post('alamat'),
			'no_sertifikasi' => $this->input->post('no_sertifikasi'),
			'no_tanda_daftar' => $this->input->post('no_tanda_daftar'),
			'blok' => $this->input->post('blok'),
			'kampung' => $this->input->post('kampung'),
			'desa' => $this->input->post('desa'),
			'id_kecamatan' => $this->input->post('id_kecamatan'),
			'id_kota' => $this->input->post('id_kota'),
			'id_kelas_benih_rencana' => $this->input->post('id_kelas_benih_rencana'),
			'luas_penangkaran' => $this->input->post('luas_penangkaran'),
			'volume' => $this->input->post('volume'),
			'tgl_perbanyakan' => $this->input->post('tgl_perbanyakan'),
			'jumlah_pohon' => $this->input->post('jumlah_pohon'),
			'batang_atas_okulasi' => $this->input->post('batang_atas_okulasi'),
			'id_varietas_okulasi' => $this->input->post('id_varietas_okulasi'),
			'id_kelas_benih_okulasi' => $this->input->post('id_kelas_benih_okulasi'),
			'no_register_pi_okulasi' => $this->input->post('no_register_pi_okulasi'),
			'lokasi_pohon_induk' => $this->input->post('lokasi_pohon_induk'),
			'id_varietas_okulasi_2' => $this->input->post('id_varietas_okulasi_2'),
			'lokasi_pohon_induk_2' => $this->input->post('lokasi_pohon_induk_2'),
			'id_varietas_biji' => $this->input->post('id_varietas_biji'),
			'id_kelas_benih_biji' => $this->input->post('id_kelas_benih_biji'),
			'no_kelompok_biji' => $this->input->post('no_kelompok_biji'),
			'asal_benih_biji' => $this->input->post('asal_benih_biji'),
			'id_varietas_anakan' => $this->input->post('id_varietas_anakan'),
			'id_kelas_benih_anakan' => $this->input->post('id_kelas_benih_anakan'),
			'no_kelompok_anakan' => $this->input->post('no_kelompok_anakan'),
			'asal_benih_anakan' => $this->input->post('asal_benih_anakan'),
			'jenis_tanaman_tb' => $this->input->post('jenis_tanaman_tb'),
			'id_varietas_tb' => $this->input->post('id_varietas_tb'),
			'no_sertifikasi_tb' => $this->input->post('no_sertifikasi_tb'),
			'tgl_panen_tb' => $this->input->post('tgl_panen_tb'),
			'id_hasil_sertifikasi' => $this->input->post('id_hasil_sertifikasi'),
			'tgl_permohonan' => $this->input->post('tgl_permohonan'),
		);		
		$this->db->where('id_sertifikasi', $id);
		return $this->db->update('sertifikasi', $data);
	}

	public function get_llhp($id, $anggaran){
		$query = $this->db->query("SELECT * FROM sertifikasi, varietas, jenis_varietas, kota, kecamatan, kelas_benih, kelas_benih2, sertifikasi_apbn, tu_apbn, lab, lab_apbn WHERE sertifikasi.id_sertifikasi = $id AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND kota.id_kota = kecamatan.id_kota AND sertifikasi.id_kelas_benih2 = kelas_benih2.id_kelas_benih2 AND sertifikasi.id_sertifikasi = sertifikasi_apbn.id_sertifikasi AND sertifikasi_apbn.id_sertifikasi = tu_apbn.id_sertifikasi AND tu_apbn.id_tu_apbn = lab_apbn.id_tu_apbn AND lab_apbn.id_lab_apbn = lab.id_lab_anggaran");

			return $query->row_array();
	}

	public function delete($id){
		$data = $this->db->where('id_sertifikasi', $id);
		return $this->db->delete('sertifikasi', $data);		
	}

	function get_varietas(){
		$id = $this->input->post('id');
		$data = $this->master_model->get_varietas($id);
		echo json_encode($data);
	}

	function get_varietas2($id){
		$query = $this->db->query("SELECT * FROM varietas WHERE id_varietas = $id");
			return $query->row_array();
	}

}