 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR PENDAHULUAN</h3>

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
          
          <a href="<?php echo base_url("$class/add/$id_sertifikasi") ?>" class="btn btn-success pull-right">+ Tambah</a> <br><br>
          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped table-responsive" vertical-align="middle" style="overflow-x:scroll;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pemohon</th>
                    <th>Nama Badan Usaha</th>
                    <th>Pilihan</th>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($pendahuluan as $pendahuluan_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $pendahuluan_item['nama_pemohon']; ?></td>
                      <td><?php echo $pendahuluan_item['nama_usaha']; ?><td>
                        <a href="<?php echo base_url("$class/print/". $pendahuluan_item['id_pendahuluan']. "/$id_sertifikasi") ?>" class="btn btn-xs btn-success">PRINT</a><br>
                        <a href="<?php echo base_url("$class/edit/". $pendahuluan_item['id_pendahuluan']. "/$id_sertifikasi") ?>" class="btn btn-xs btn-primary">EDIT</a><br>
                        <a href="<?php echo base_url("$class/delete/". $pendahuluan_item['id_pendahuluan']. "/$id_sertifikasi") ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a>
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
