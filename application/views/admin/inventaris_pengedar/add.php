<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">TAMBAH</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <a href='<?php echo base_url("$class/list") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/add") ?>

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Nama Badan Usaha</label>
              <input type="text" name="nama_badan_usaha" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Nama Produsen/Pimpinan</label>
              <input type="text" name="nama_produsen" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>Kabupaten/Kota</label>
              <select name="id_kota" class="form-control select2" >
              <option disabled selected value>Pilih</option>
              <?php foreach($kotas as $kota): ?>      
                <option value="<?php echo $kota['id_kota'] ?>"><?php echo ucwords($kota['nama_kota']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>Jenis Tanaman</label>
              <select name="id_jenis_varietas" id="pilih_jenis" class="form-control select2" >
              <option disabled selected value>Pilih</option>
              <?php foreach($jenis_varietas as $jns_varietas): ?>      
                <option value="<?php echo $jns_varietas['id_jenis_varietas'] ?>"><?php echo ucwords($jns_varietas['nama_jenis']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>Varietas</label>
              <select name="id_varietas" id="pilih_varietas" class="form-control select2" >
              <option disabled selected value>Pilih</option>
              </select>
            </div>
          </div> 
          <div class="col-md-3">
            <div class="form-group">
              <label>Luas Lahan</label>
              <input type="text" name="luas_lahan" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Mulai Produksi</label>
              <input type="text" name="mulai_produksi" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Jumlah Benih yang Diproduksi</label>
              <input type="text" name="jumlah_benih" class="form-control" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Alamat Produsen</label>
              <input type="text" name="alamat_produsen" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Bentuk Usaha</label>
              <input type="text" name="bentuk_usaha" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Status Usaha</label>
              <input type="text" name="status_usaha" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Tgl. Terbit</label>
              <input type="text" name="tgl_terbit" class="form-control datepicker" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Masa Berlaku</label>
              <input type="text" name="masa_berlaku" class="form-control datepicker" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Nomor Sertifikat</label>
              <input type="text" name="nomor_sertifikat" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Ket</label>
              <input type="text" name="ket" class="form-control" required>
            </div>
          </div>



        </div>
        
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      <?php echo form_close() ?>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
