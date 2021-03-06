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

        <a href='<?php echo base_url("$class/list?id_bulan=$id_bulan") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/add/$id_bulan") ?>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Jenis Tanaman</label>
              <select name="id_jenis_varietas" id="pilih_jenis" class="form-control select2">
              <option disabled selected value>Pilih</option>
              <?php foreach($jenis_varietas as $jns_varietas): ?>            
                <option value="<?php echo $jns_varietas['id_jenis_varietas'] ?>"><?php echo $jns_varietas['nama_jenis'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          
          <div class="col-md-3">           
            <div class="form-group">
              <label>Varietas</label>
              <select name="id_varietas" id="pilih_varietas" class="form-control select2">
              <option disabled selected value>Pilih Varietas</option>
              <?php foreach($varietas as $varietas_item): ?>            
                <option value="<?php echo $varietas_item['id_varietas'] ?>"><?php echo $varietas_item['nama_varietas'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Kelas Benih</label>
              <select name="id_kelas_benih" class="form-control select2">
              <option disabled selected value>Pilih</option>
              <?php foreach($kelas_benihs as $kelas_benih): ?>            
                <option value="<?php echo $kelas_benih['id_kelas_benih'] ?>"><?php echo $kelas_benih['singkatan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

        </div>

        <h3>Kumulatif</h3>
        <hr>  

        <div class="row">
          <div class="col-md-4">           
            <div class="form-group">
              <label>Jumlah Stok</label>
              <input type="text" name="jumlah_stok" class="form-control" >
            </div>
          </div>
          <div class="col-md-4">           
            <div class="form-group">
              <label>Tersalur</label>
              <input type="text" name="tersalur" class="form-control" >
            </div>
          </div> 
          <div class="col-md-4">           
            <div class="form-group">
              <label>Sisa Stok</label>
              <input type="text" name="sisa_stok" class="form-control">
            </div>
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