<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT STOK BULANAN BUAH BUAHAN</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<style>
		*{
			line-height: 0.4;
		}

		@page{
			/*size: 330mm 210mm;*/
			/*size: 210mm 297mm;*/
			size: 210mm 297mm;
		}

		.header{
			margin-top: 10px;
			font-size: 14px;
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

	<?php 
	    if(isset($stok_pangan['0']['nama_bulan'])){
	      $nama_bulan = $stok_pangan['0']['nama_bulan'];
	    }else{
	      $nama_bulan = '';
	    }

	    if(isset($stok_pangan['0']['nama_jenis'])){
	      $nama_jenis = $stok_pangan['0']['nama_jenis'];
	    }else{
	      $nama_jenis = '';
	    }

	?>
	
	<div class="header">
    <div class="text-center" style="font-weight: bold;">
      <p>LAPORAN JUMLAH STOK BENIH BUAH-BUAHAAN</p>
      <p>UPTD PENGAWASAN DAN SERTIFIKASI TANAMAN PANGAN DAN HORTIKULTURA KALTIM</p>
    </div>
		

    <br><br>
		<p>BULAN : <?php echo $stok_buah['0']['nama_bulan'] ?></p>
		<p>TAHUN :  2020</p>
	</div>
	<hr>

	<table class="table table-bordered table-striped" vertical-align="middle" style="width: 100%">
        <thead>
          <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Jenis Tanaman</th>
            <th rowspan="2">Varietas</th>
            <th rowspan="2">Kelas Benih</th>
            <th colspan="3" class="text-center">Kumulatif</th>
          </tr>
          <tr>
            <th>Jumlah Stok</th>
            <th>Tersalur</th>
            <th>Sisa Stok</th>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach($stok_buah as $stok_buah_item): ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo ucwords($stok_buah_item['nama_jenis']); ?></td>
              <td><?php echo $stok_buah_item['nama_varietas']; ?></td>
              <td><?php echo $stok_buah_item['singkatan']; ?></td>
              <td><?php echo $stok_buah_item['jumlah_stok']; ?></td>
              <td><?php echo $stok_buah_item['tersalur']; ?></td>
              <td><?php echo $stok_buah_item['sisa_stok']; ?></td>
              
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
        </tbody>
      </table>  
	<script>
		window.print();
	</script>
</body>
</html>