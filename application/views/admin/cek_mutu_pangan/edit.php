<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">EDIT</h3>
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

        <?php echo form_open("$class/edit/". $cek_mutu['id_cek_mutu_pangan']) ?>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Nama Produsen</label>
              <input type="text" name="nama_produsen" class="form-control" value="<?php echo $cek_mutu['nama_produsen'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Alamat Produsen</label>
              <input type="text" name="alamat_produsen" class="form-control" value="<?php echo $cek_mutu['alamat_produsen'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Jenis</label>
              <select name="id_jenis_varietas" id="pilih_jenis" class="form-control select2" >
              <option selected value="<?php echo $cek_mutu['id_jenis_varietas'] ?>"><?php echo $cek_mutu['nama_jenis'] ?></option>
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
              <option selected value="<?php echo $cek_mutu['id_varietas'] ?>"><?php echo $cek_mutu['nama_varietas'] ?></option>
              </select>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Panen</label>
              <input type="text" name="tgl_panen" class="form-control datepicker" value="<?php echo $cek_mutu['tgl_panen'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tonase/Karung</label>
              <input type="text" name="tonase" class="form-control" value="<?php echo $cek_mutu['tonase'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Berat/Karung</label>
              <input type="text" name="berat" class="form-control" value="<?php echo $cek_mutu['berat'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Asal Benih</label>
              <input type="text" name="asal_benih" class="form-control" value="<?php echo $cek_mutu['asal_benih'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Pengambilan</label>
              <input type="text" name="tgl_pengambilan" class="form-control datepicker" value="<?php echo $cek_mutu['tgl_pengambilan'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Selesai</label>
              <input type="text" name="tgl_selesai" class="form-control datepicker" value="<?php echo $cek_mutu['tgl_selesai'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Kadaluarsa</label>
              <input type="text" name="tgl_kadaluarsa" class="form-control datepicker" value="<?php echo $cek_mutu['tgl_kadaluarsa'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Ket</label>
              <input type="text" name="ket" class="form-control" value="<?php echo $cek_mutu['ket'] ?>">
            </div>
          </div>

        </div>
        
        <hr> 
        <h3>Hasil Pengecekan </h3>
        <hr> 

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>KA (%)</label>
              <input type="text" name="ka" class="form-control" value="<?php echo $cek_mutu['ka'] ?>" required>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>BM (%)</label>
              <input type="text" name="bm" class="form-control" value="<?php echo $cek_mutu['bm'] ?>" required>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>CVL (%)</label>
              <input type="text" name="cvl" class="form-control" value="<?php echo $cek_mutu['cvl'] ?>" required>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>KB (%)</label>
              <input type="text" name="kb" class="form-control" value="<?php echo $cek_mutu['kb'] ?>" required>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>BTL (%)</label>
              <input type="text" name="btl" class="form-control" value="<?php echo $cek_mutu['btl'] ?>" required>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>DT (%)</label>
              <input type="text" name="dt" class="form-control" value="<?php echo $cek_mutu['dt'] ?>" required>
            </div>
          </div>
        </div>

      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      <?php echo form_close() ?>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->