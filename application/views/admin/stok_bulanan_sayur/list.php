 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">LAPORAN JUMLAH STOK BENIH SAYUR-SAYURAN TAHUN 2020 <br>
          <?php 
            if(isset($stok_sayur['0']['nama_bulan'])){
              $nama_bulan = $stok_sayur['0']['nama_bulan'];
            }else{
              $nama_bulan = '';
            }
          ?>
          Bulan : <?php echo $nama_bulan ?> <br>
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
          
          <a style="margin-left: 5px" href="<?php echo base_url("$class/add/$id_bulan") ?>" class="btn btn-success pull-right">+ Tambah</a> 

          <a href="<?php echo base_url("$class/print/$id_bulan") ?>" class="btn btn-primary pull-right">Print</a><br><br>
          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped table-responsive" vertical-align="middle" style="overflow-x:scroll;">
                <thead>
                  <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Jenis Tanaman</th>
                    <th rowspan="2">Varietas</th>
                    <th rowspan="2">Kelas Benih</th>
                    <th colspan="2" class="text-center">Bulan Ini</th>
                    <th colspan="3" class="text-center">Kumulatif</th>
                    <th rowspan="2">Pilihan</th>
                  </tr>
                  <tr>
                    <th>Jumlah Stok</th>
                    <th>Tersalur</th>
                    <th>Jumlah Stok</th>
                    <th>Tersalur</th>
                    <th>Sisa Stok</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($stok_sayur as $stok_sayur_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo ucwords($stok_sayur_item['nama_jenis']); ?></td>
                      <td><?php echo $stok_sayur_item['nama_varietas']; ?></td>
                      <td><?php echo $stok_sayur_item['singkatan']; ?></td>
                      <td><?php echo $stok_sayur_item['jumlah_stok_bln_ini']; ?></td>
                      <td><?php echo $stok_sayur_item['tersalur_bln_ini']; ?></td>
                      <td><?php echo $stok_sayur_item['jumlah_stok_kumulatif']; ?></td>
                      <td><?php echo $stok_sayur_item['tersalur_kumulatif']; ?></td>
                      <td><?php echo $stok_sayur_item['sisa_stok']; ?></td>
                      <td>
                        <a href="<?php echo base_url("$class/edit/". $stok_sayur_item['id_stok_bulanan_sayur']. "/$id_bulan") ?>" class="btn btn-xs btn-primary">EDIT</a><br>
                        <a href="<?php echo base_url("$class/delete/". $stok_sayur_item['id_stok_bulanan_sayur']. "/$id_bulan") ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a>
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
