<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PRINT SERTIFIKAT PENGEDAR</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

  <style>

    body{
      background-image: url("<?php echo base_url("assets/images/bingkai2.png") ?>");
      background-color: #ffffff;
      background-size: 1000px 1600px;
      background-repeat: no-repeat;
    }

    ol{
      padding-left: 20px;
    }

    .header{
      margin-top : 130px;
    }

    .baris{
      line-height: 0.4;
    }

    @page{
      /*f4*/
      size: 210mm 330mm;

      /*a4*/
      /*size: 210mm 297mm;*/
    }

    .content{
      margin-left: 110px;
      margin-right: 80px;
      font-family: Times New Roman, Helvetica, sans-serif;
      font-size: 19px;
    }

    br{
      line-height: 0.5;
    }

    table{
      vertical-align: center;
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
  
  <div class="header baris">
    <img src="<?php echo base_url('assets/images/ruhui.png') ?>" width="90" style="position: fixed;margin-left: 90px;float: left;">

    <div class="box text-center" style="margin-top: 20px;font-weight: bold;">
      <p>PEMERINTAH PROVINSI KALIMANTAN TIMUR</p>
      <p>DINAS PERTANIAN TANAMAN PANGAN</p>
      <p>UNIT PELAKSANA TEKNIS DINAS</p>
      <p>PENGAWASAN DAN SERTIFIKASI BENIH</p>
      <p>TANAMAN PANGAN DAN HORTIKULTURA</p>
      <p>Jln. P. Muhammad Noor Sempaja Telp. (0541) 221212, 221213, Fax : 22121212</p>
      <p>S A M A R I N D A</p>
    </div>
    <div class="float-left" style="margin-left: 50px;">
      Kotak Pos No. 1161
    </div>
    <div class="float-right" style="margin-right: 50px">
      Kode Pos: 75119
    </div>
    <br>

    <hr width="90%">
        
  </div>

  <div class="content">

    <div class="text-center baris" style="font-weight: bold;margin-top: 70px; margin-bottom: 70px">
      <p style="text-decoration: underline; font-size: 30px">Sertifikat Kompetensi Pengedar Benih Hortikultura</p>
      <p>Nomor : <?php echo $inventaris['nomor_sertifikat'] ?></p>
    </div>

    <div>
      <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Berdasarkan Pasal 57 ayat (3,4) Undang-Undang Nomor: 13 Tahun 2010 tentang Hortikultura Pasal 57 ayat (3,4) dan Peraturan Menteri Pertanian Nomor: 48/Permentan/SR.120/8/2012 tentang Produk Sertifikasi dan Peredaran Benih Hortikultura Pasal 61. Pengedar Benih sebagaimana data di bawah ini : </p>
    </div>

    <div>
      <table>
        <tbody>
          <tr>
            <td width="250">Nama Badan Usaha</td>
            <td>: <?php echo $inventaris['nama_badan_usaha'] ?></td>
          </tr>
          <tr>
            <td width="250">Bentuk/Status Badan Usaha</td>
            <td>: <?php echo $inventaris['bentuk_usaha']. '/'. $inventaris['status_usaha'] ?></td>
          </tr>
          <tr>
            <td width="250">Alamat/Lokasi Usaha</td>
            <td>: <?php echo $inventaris['alamat_produsen'] ?></td>
          </tr>
          <tr>
            <td width="250">Nama Pimpinan</td>
            <td>: <?php echo $inventaris['nama_produsen'] ?></td>
          </tr>
          <tr>
            <td width="250">Alamat Pemilik</td>
            <td>: <?php echo $inventaris['alamat_produsen'] ?></td>
          </tr>
        </tbody>
      </table>
      
      <br>
      <div>
        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Dinyatakan telah memenuhi persyaratan untuk diberikan Sertifikat Kompetensi Pengedar Benih Tanaman Buah-Buahan.</p>
      </div>
      <div>
        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Sertifikat Kompetensi Pengedar Benih Hortikultura berlaku selama yang bersangkutan masih aktif mengedarkan benih sebagaimana dimaksud dalam sertifikat ini dan melalui proses peninjauan ulang setiap 2 (dua) tahun sekali. Apabila tidak mentaati sebagaimana aturan tersebut di atas, maka sertifikat ini di cabut secara sepihak oleh UPTD. PSBTPH.</p>
      </div>

      <div style="margin-left: 550px; font-weight: bold;">
        <p>Samarinda, <?php echo tgl_indo($inventaris['tgl_terbit']) ?></p>
      </div>

      <div style="margin-left: 550px;line-height: 0.5px;margin-bottom: 120px;font-weight: bold;">
        <p>Kelapa UPTD,</p>
      </div>

      <div style="margin-left: 550px; line-height: 0.3;font-weight: bold;">
        <p style="text-decoration: underline;">Ir. Erry Erriadi</p>
        <p>NIP. 19640820 199803 1 005</p>
      </div>
    </div>
  </div>  
  <script>
    // window.print();
  </script>
</body>
</html>