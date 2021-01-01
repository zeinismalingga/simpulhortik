<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT PERMOHONAN SERTIFIKASI</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<style>
		*{
			line-height: 0.4;
		}

		@page{
			/*size: 330mm 210mm;*/
			size: 210mm 297mm;
		}

		.header{
			margin-left:  700px;
		}

		.content{
			font-family: Arial, Helvetica, sans-serif;
		}

		br{
			line-height: 0.5;
		}

		table{
			line-height: 0.5;
		}

		.table td{
			padding: 6px;
		}

		.isi{
			margin-left : 25px;
		}

		ul{
			list-style-type: none;
		}
		li{
			line-height: normal;
		}

		hr {
		  border: 1px solid black;
		}

		.col-print-1 {width:8%;  float:left;}
		.col-print-2 {width:16%; float:left;}
		.col-print-3 {width:25%; float:left;}
		.col-print-4 {width:33%; float:left;}
		.col-print-5 {width:42%; float:left;}
		.col-print-6 {width:50%; float:left;}
		.col-print-7 {width:58%; float:left;}
		.col-print-8 {width:66%; float:left;}
		.col-print-9 {width:75%; float:left;}
		.col-print-10{width:83%; float:left;}
		.col-print-11{width:92%; float:left;}
		.col-print-12{width:100%; float:left;}
	</style>
</head>
<body>

	<div class="row" style="margin-top: 10px">
		<div class="col-md-2 col-print-3">
			<div>
				<p>Perbanyakan Benih</p>

				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '1' ) ? 'checked' : NULL ; ?> > Okulasi</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '2' ) ? 'checked' : NULL ; ?> > Cangkok</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '3' ) ? 'checked' : NULL ; ?> > Sambung Pucuk</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '4' ) ? 'checked' : NULL ; ?> > Stek Akar</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '5' ) ? 'checked' : NULL ; ?> > Stek Batang</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '6' ) ? 'checked' : NULL ; ?> > Asal Mahkota</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '7' ) ? 'checked' : NULL ; ?> > Sususan</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '8' ) ? 'checked' : NULL ; ?> > Biji Vegetatif</label>
				</div>
			</div>	
		</div>

		<div class="col-md-2 col-print-3">
			<div>
				<p></p>

				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '9' ) ? 'checked' : NULL ; ?> > Mata Tempel</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '10' ) ? 'checked' : NULL ; ?> > Anakan</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '11' ) ? 'checked' : NULL ; ?> > Pemecahan Bonggol</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '12' ) ? 'checked' : NULL ; ?> > Umbi</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '13' ) ? 'checked' : NULL ; ?> > Rimpang</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '14' ) ? 'checked' : NULL ; ?> > Biji</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_perbanyakan_benih'] == '15' ) ? 'checked' : NULL ; ?> > Entris</label>
				</div>
			</div>	
		</div>

		<div class="col-md-3 col-print-4">
			<p>.............................,.........................</p>
			<p>Kepada Yth</p>
			<p>Kepala UPTD PSBTPH</p>
			<p>Provinsi Kalimantan Timur</p>
			<p>di -</p>
			<p style="margin-left: 50px">Samarinda</p>

			<table class="table table-bordered" width="100%">
				<tr>
					<td>Nomor Induk</td>
					<td><?php echo $sertifikasi['no_induk'] ?></td>
				</tr>
				<tr>
					<td>Musim Tanam</td>
					<td>2019/2020</td>
				</tr>
			</table>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-12">
			<p class="text-center" style="font-weight: bold;font-size: 18px">PERMOHONAN SERTIFIKASI BENIH HORTIKULTURA</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-print-4">
			<div class="checkbox">
			  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_tanaman'] == '2' ) ? 'checked' : NULL ; ?> > Tanaman Buah</label>
			</div>
		</div>
		<div class="col-md-4 col-print-4">
			<div class="checkbox">
			  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_tanaman'] == '1' ) ? 'checked' : NULL ; ?> > Tanaman Sayuran</label>
			</div>
		</div>
		<div class="col-md-4 col-print-4">
			<div class="checkbox">
			  <label><input type="checkbox" <?php echo ($sertifikasi['id_jenis_tanaman'] == '3' ) ? 'checked' : NULL ; ?> > Tanaman Biofarmaka</label>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-print-12">
			<table class="table table-borderless">
				<tr>
					<td colspan="2">Kami yang bertanda tangan dibawah ini :</td>
				</tr>
				<tr>
					<td width="30%">Nama Badan Usaha</td>
					<td width="20%">: <?php echo ucwords($sertifikasi['nama_usaha']) ?></td>
					<td width="30%">Nomor Sertifikasi Kompetensi</td>
					<td>: <?php echo $sertifikasi['no_sertifikasi'] ?></td>
				</tr>
				<tr>
					<td>Nama (Pemohon)</td>
					<td>: <?php echo ucwords($sertifikasi['nama_pemohon']) ?></td>
					<td>Nomor Tanda Daftar</td>
					<td>: <?php echo $sertifikasi['no_tanda_daftar'] ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>: <?php echo $sertifikasi['alamat'] ?></td>
				</tr>
				<tr>
					<td colspan="4">Dengan ini kami mengajukan permohonan sertifikasi benih.............. dengan lokasi dan perencanaan seperti dibawah ini :</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-print-12">
			<table class="table table-borderless">
				<tr>
					<td width="5">1</td>
					<td width="30%">Lokasi Penangkaran</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Blok</td>
					<td>: <?php echo $sertifikasi['blok'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kampung</td>
					<td>: <?php echo $sertifikasi['kampung'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Desa</td>
					<td>: <?php echo $sertifikasi['desa'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kecamatan</td>
					<td>: <?php echo $sertifikasi['nama_kecamatan'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kabupaten/Kota</td>
					<td>: <?php echo ucwords($sertifikasi['nama_kota']) ?></td>
				</tr>
				<tr>
					<td width="5">2</td>
					<td width="30%">Rencana Penangkaran</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Jenis Tanaman</td>
					<td>: <?php echo $sertifikasi['nama_jenis_tanaman'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kelas Benih</td>
					<td>: <?php echo $kelas_benih_rencana['singkatan'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Luas Penangkaran</td>
					<td>: <?php echo $sertifikasi['luas_penangkaran'] ?> m2/Ha</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Volume benih yang akan diproduksi</td>
					<td>: <?php echo $sertifikasi['volume'] ?> Kg/Ton/Batang</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Tanggal Perbanyakan</td>
					<td>: <?php echo tgl_indo($sertifikasi['tgl_perbanyakan']) ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Jumlah Tanaman Induk</td>
					<td>: <?php echo $sertifikasi['jumlah_pohon'] ?> Batang/Rumpun</td>
				</tr>	
			</table>
		</div>
	</div>

	<?php
      $id_perbanyakan = $sertifikasi['id_jenis_perbanyakan_benih'];

      $biji = ['14', '13', '12', '8'];
      $anakan = ['10', '4','5','9'];
      $okulasi = ['1','3'];     
    ?> 

    <?php if(in_array($id_perbanyakan, $biji)): ?>
	<div class="row">
		<div class="col-md-6 col-print-6">
			<table class="table table-borderless">
				<tr>
					<td width="5">3</td>
					<td width="40%">Benih Sumber</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">
						<div class="checkbox">
						  <label><input type="checkbox" checked value=""> Bentuk Biji/rimpang/umbi**)</label>
						</div>
					</td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="30%">Varietas</td>
					<td>: <?php echo $sertifikasi['nama_varietas'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kelas Benih</td>
					<td>: <?php echo $sertifikasi['singkatan'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Nomor Kelompok</td>
					<td>: <?php echo $sertifikasi['no_kelompok_biji'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Asal Benih (Lokasi)</td>
					<td>: <?php echo $sertifikasi['asal_benih_biji'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">
						<div class="checkbox">
						  <label><input type="checkbox" value=""> Anakan/Stek/Mata tempel**)</label>
						</div>
					</td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="30%">Varietas</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kelas Benih</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Nomor Kelompok</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Asal Benih (Lokasi)</td>
					<td>: ................................................</td>
				</tr>
			</table>
		</div>

		<div class="col-md-6 col-print-6">
			<table class="table table-borderless">
				<tr>
					<td width="5"></td>
					<td width="30%"></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">
						<div class="checkbox">
						  <label><input type="checkbox" value=""> Okulasi/Sambung**)</label>
						</div>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="40%">Batang Atas</td>
					<td></td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="40%">Varietas</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kelas Benih</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">No. Register PI</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Lokasi Pohon Induk</td>
					<td>: ................................................</td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="40%">Batang Bawah</td>
					<td></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="40%">Varietas</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Lokasi Pohon Induk</td>
					<td>: ................................................</td>
				</tr>
			</table>
		</div>
	</div>
	<?php endif; ?>

	<?php if(in_array($id_perbanyakan, $anakan)): ?>
	<div class="row">
		<div class="col-md-6 col-print-6">
			<table class="table table-borderless">
				<tr>
					<td width="5">3</td>
					<td width="40%">Benih Sumber</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">
						<div class="checkbox">
						  <label><input type="checkbox" value=""> Bentuk Biji/rimpang/umbi**)</label>
						</div>
					</td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="30%">Varietas</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kelas Benih</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Nomor Kelompok</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Asal Benih (Lokasi)</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">
						<div class="checkbox">
						  <label><input type="checkbox" checked value=""> Anakan/Stek/Mata tempel**)</label>
						</div>
					</td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="30%">Varietas</td>
					<td>: <?php echo $sertifikasi['nama_varietas'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kelas Benih</td>
					<td>: <?php echo $sertifikasi['singkatan'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Nomor Kelompok</td>
					<td>: <?php echo $sertifikasi['no_kelompok_anakan'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Asal Benih (Lokasi)</td>
					<td>: <?php echo $sertifikasi['asal_benih_anakan'] ?></td>
				</tr>
			</table>
		</div>

		<div class="col-md-6 col-print-6">
			<table class="table table-borderless">
				<tr>
					<td width="5"></td>
					<td width="30%"></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">
						<div class="checkbox">
						  <label><input type="checkbox" value=""> Okulasi/Sambung**)</label>
						</div>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="40%">Batang Atas</td>
					<td></td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="40%">Varietas</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kelas Benih</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">No. Register PI</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Lokasi Pohon Induk</td>
					<td>: ................................................</td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="40%">Batang Bawah</td>
					<td></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="40%">Varietas</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Lokasi Pohon Induk</td>
					<td>: ................................................</td>
				</tr>
			</table>
		</div>
	</div>
	<?php endif; ?>

	<?php if(in_array($id_perbanyakan, $okulasi)): ?>
	<div class="row">
		<div class="col-md-6 col-print-6">
			<table class="table table-borderless">
				<tr>
					<td width="5">3</td>
					<td width="40%">Benih Sumber</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">
						<div class="checkbox">
						  <label><input type="checkbox" value=""> Bentuk Biji/rimpang/umbi**)</label>
						</div>
					</td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="30%">Varietas</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kelas Benih</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Nomor Kelompok</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Asal Benih (Lokasi)</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">
						<div class="checkbox">
						  <label><input type="checkbox" value=""> Anakan/Stek/Mata tempel**)</label>
						</div>
					</td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="30%">Varietas</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kelas Benih</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Nomor Kelompok</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Asal Benih (Lokasi)</td>
					<td>: ................................................</td>
				</tr>
			</table>
		</div>

		<div class="col-md-6 col-print-6">
			<table class="table table-borderless">
				<tr>
					<td width="5"></td>
					<td width="30%"></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">
						<div class="checkbox">
						  <label><input type="checkbox" value=""> Okulasi/Sambung**)</label>
						</div>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="40%">Batang Atas</td>
					<td></td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="40%">Varietas</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Kelas Benih</td>
					<td>: <?php echo $sertifikasi['singkatan'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">No. Register PI</td>
					<td>: <?php echo $sertifikasi['no_register_pi_okulasi'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Lokasi Pohon Induk</td>
					<td>: <?php echo $sertifikasi['lokasi_pohon_induk'] ?></td>
				</tr>	
				<tr>
					<td width="5"></td>
					<td width="40%">Batang Bawah</td>
					<td></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="40%">Varietas</td>
					<td>: ................................................</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Lokasi Pohon Induk</td>
					<td>: <?php echo $sertifikasi['lokasi_pohon_induk_2'] ?></td>
				</tr>
			</table>
		</div>
	</div>
	<?php endif; ?>

	<div class="row">
		<div class="col-md-6 col-print-12">
			<table class="table table-borderless">
				<tr>
					<td width="5">4</td>
					<td width="30%">Tanaman Sebelumnya</td>
					<td></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Jenis Tanaman</td>
					<td><?php echo $sertifikasi['jenis_tanaman_tb'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Varietas</td>
					<td><?php echo $varietas_tb['nama_varietas'] ?></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Sertifikasi</td>
					<td>
						<label class="checkbox-inline">
					      <input type="checkbox" <?php echo ($sertifikasi['id_hasil_sertifikasi'] == '1' ) ? 'checked' : NULL ; ?> > Ya
					    </label>
					    <label class="checkbox-inline">
					      <input type="checkbox" <?php echo ($sertifikasi['id_hasil_sertifikasi'] == '2' ) ? 'checked' : NULL ; ?> > Tidak
					    </label>
					    <label class="checkbox-inline">
					      <input type="checkbox" <?php echo ($sertifikasi['id_hasil_sertifikasi'] == '3' ) ? 'checked' : NULL ; ?> > Lulus
					    </label>
					    <label class="checkbox-inline">
					      <input type="checkbox" <?php echo ($sertifikasi['id_hasil_sertifikasi'] == '4' ) ? 'checked' : NULL ; ?> > Tidak Lulus
					    </label>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">Nomor Sertifikasi</td>
					<td><?php echo (isset($varietas_tb['no_sertifikasi_tb'])) ? $varietas_tb['no_sertifikasi_tb'] : '' ?></td>
				</tr>
				<tr>
					<td width="5">5</td>
					<td width="30%">Lampiran</td>
					<td></td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">a) Peta/denah lokasi penangkar</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">b) Label benih sumber</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%" colspan="2">c) hasil indeksing/uji bebas penyakit sistemik untuk</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td width="30%">
						<label class="checkbox-inline">
					      <input type="checkbox" value=""> Jeruk
					    </label>
					    <label class="checkbox-inline">
					      <input type="checkbox" value=""> Pisang
					    </label>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 offset-6 col-print-6">
			<table class="table table-borderless">
				<tr>
					<td>Samarinda, <?php echo tgl_indo($sertifikasi['tgl_permohonan']) ?></td>
				</tr>
				<tr>
					<td>Pemohon</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row" style="margin-top: 40px">
		<div class="col-md-4 offset-6 col-print-6">
			<table class="table table-borderless">
				<tr>
					<td><?php echo $sertifikasi['nama_pemohon'] ?></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-print-6">
			<table class="table table-borderless">
				<tr>
					<td colspan="2">Catatan</td>
				</tr>
				<tr>
					<td style="width:6px">*)</td>
					<td>Diisi oleh UPTD PSBTPH</td>
				</tr>
				<tr>
					<td>**)</td>
					<td>Coret yang tidak perlu</td>
				</tr>
				<tr>
					<td>
						<label class="checkbox-inline">
					      <input type="checkbox" value="">
					    </label>
					</td>
					<td>Diisi tanda V</td>
				</tr>
				<tr>
					<td colspan="2">Tembusan Yth</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Pengawas Benih Tanaman Kabupaten/Kota</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Arsip</td>
				</tr>
			</table>
		</div>
	</div>



	
	<script>
		// window.print();
	</script>
</body>
</html>