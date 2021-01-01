<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REALISASI PENGECEKAN MUTU BENIH TANAMAN PANGAN TAHUN 2020</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<style>
		*{
			line-height: 0.4;
		}

		@page{
			/*size: 330mm 210mm;*/
			/*size: 210mm 297mm;*/
			size: 297mm 210mm;
		}

		.header{
			margin-top: 10px;
			font-size: 12px;
		}

		.content{
			font-family: Arial, Helvetica, sans-serif;
		}

		br{
			line-height: 0.5;
		}

		table{

			line-height: 0.6;
			font-size: 10px;
		}

		tr>td, tr>th{
			line-height: 1;
		}

		.table td, .table th {
			padding: 5px;
		}

		.detail{
			position: absolute;
			left: 200px;
		}

		.detail2{
			position: absolute;
			left: 520px;
		}
		.box {
		  width: 300px;
		  height: 90px;
		  border: 2px solid black; 
		  padding: 15px;
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

		@media print {

.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
  float: left;
}
.col-sm-12 {
  width: 100%;
}
.col-sm-11 {
  width: 91.66666666666666%;
}
.col-sm-10 {
  width: 83.33333333333334%;
}
.col-sm-9 {
  width: 75%;
}
.col-sm-8 {
  width: 66.66666666666666%;
}
.col-sm-7 {
  width: 58.333333333333336%;
}
.col-sm-6 {
  width: 50%;
}
.col-sm-5 {
  width: 41.66666666666667%;
}
.col-sm-4 {
  width: 33.33333333333333%;
 }
 .col-sm-3 {
   width: 25%;
 }
 .col-sm-2 {
   width: 16.666666666666664%;
 }
 .col-sm-1 {
  width: 8.333333333333332%;
 }

  }
	</style>
</head>
<body>
	
	<div class="header">
		<p style="font-weight: bold;" class="text-center">LAPORAN PENGECEKAN MUTU BENIH HORTIK TA. 2020</p>
	</div>
	<hr>

	<table class="table table-bordered table-striped" vertical-align="middle" style="overflow-x:scroll;">
        <thead>
          <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Nama & Alamat Produsen</th>
            <th rowspan="2">Jenis/ Varietas</th>
            <th rowspan="2">Tgl Panen</th>
            <th rowspan="2">Tonase/ Karung</th>
            <th rowspan="2">Berat/ Karung</th>
            <th rowspan="2">Asal Benih</th>
            <th rowspan="2">Tgl Pengambilan</th>
            <th rowspan="2">Tgl Selesai</th>
            <th colspan="6" class="text-center">Hasil Pengecekan</th>
            <th rowspan="2">Tgl Kadaluarsa</th>
            <th rowspan="2">Ket</th>
          </tr>
          <tr>
            <th colspan="1">KA (%)</th>
            <th colspan="1">BM (%)</th>
            <th colspan="1">CVL (%)</th>
            <th colspan="1">KB (%)</th>
            <th colspan="1">BTL (%)</th>
            <th colspan="1">DT (%)</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach($cek_mutu as $cek_mutu_item): ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $cek_mutu_item['nama_produsen']. ' / '. $cek_mutu_item['alamat_produsen'] ?></td>
              <td><?php echo $cek_mutu_item['nama_jenis']. ' / '. $cek_mutu_item['nama_varietas'] ?></td>
              <td><?php echo tgl_indo($cek_mutu_item['tgl_panen']); ?></td>
              <td><?php echo ($cek_mutu_item['tonase']); ?></td>
              <td><?php echo ($cek_mutu_item['berat']); ?></td>
              <td><?php echo ($cek_mutu_item['asal_benih']); ?></td>
              <td><?php echo tgl_indo($cek_mutu_item['tgl_pengambilan']); ?></td>
              <td><?php echo tgl_indo($cek_mutu_item['tgl_selesai']); ?></td>
              <td><?php echo ($cek_mutu_item['ka']); ?></td>
              <td><?php echo ($cek_mutu_item['bm']); ?></td>
              <td><?php echo ($cek_mutu_item['cvl']); ?></td>
              <td><?php echo ($cek_mutu_item['kb']); ?></td>
              <td><?php echo ($cek_mutu_item['btl']); ?></td>
              <td><?php echo ($cek_mutu_item['dt']); ?></td>
              <td><?php echo tgl_indo($cek_mutu_item['tgl_kadaluarsa']); ?></td>
              <td><?php echo ($cek_mutu_item['ket']); ?></td>
              
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
        </tbody>
      </table>  
	<script>
		// window.print();
	</script>
</body>
</html>