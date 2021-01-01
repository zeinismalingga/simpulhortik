 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">LAPORAN PENGECEKAN MUTU BENIH HORTIK TA. 2020
          </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

          <?php if($this->session->flashdata('notif') != NULL ): ?>
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('notif'); ?>
          </div>
          <?php endif ?>
          
          <a style="margin-left: 5px" href="<?php echo base_url("$class/add/") ?>" class="btn btn-success pull-right">+ Tambah</a> 

          <a href="<?php echo base_url("$class/print/") ?>" class="btn btn-primary pull-right">Print</a><br><br>
          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped table-responsive" vertical-align="middle" style="overflow-x:scroll;">
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
                    <th rowspan="2">Pilihan</th>
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

                      <td>
                        <a href="<?php echo base_url("$class/edit/". $cek_mutu_item['id_cek_mutu_pangan']) ?>" class="btn btn-xs btn-primary">EDIT</a><br>
                        <a href="<?php echo base_url("$class/delete/". $cek_mutu_item['id_cek_mutu_pangan']) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a>
                      </td>
                      
                    </tr>
                    <?php $no++ ?>
                <?php endforeach; ?>
                </tbody>
              </table>    
            </div>
          </div>
          
        </div>
        <!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
