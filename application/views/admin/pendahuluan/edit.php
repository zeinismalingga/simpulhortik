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

        <a href='<?php echo base_url("$class/list/$id_sertifikasi") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/edit/$id/$id_sertifikasi") ?>

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Tanggal Pendahuluan</label>
              <input type="text" name="tgl_pendahuluan" class="form-control datepicker" value="<?php echo $pendahuluan['tgl_pendahuluan'] ?>">
            </div>
          </div>
       </div>

       <?php 
          if($pendahuluan['bentuk_biji'] == 1){
            $bentuk_biji = 'Waktu';
          }elseif($pendahuluan['bentuk_biji'] == 2){
            $bentuk_biji = 'Jarak';
          }elseif($pendahuluan['bentuk_biji'] == 3){
            $bentuk_biji = 'Barter';
          }
        ?>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Isolasi (bentuk biji)</label>
              <select name="bentuk_biji" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['bentuk_biji'] ?>"><?php echo $bentuk_biji ?></option>
              <option value="1">Waktu</option>
              <option value="2">Jarak</option>
              <option value="3">Barter</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Peta/denah lokasi</label>
              <select name="peta" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['peta'] ?>"><?php echo ($pendahuluan['peta']  == 1) ? 'Tersedia' : 'Tidak Tersedia' ?></option>
              <option value="1">Tersedia</option>
              <option value="2">Tidak Tersedia</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Label</label>
              <select name="label" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['label'] ?>"><?php echo ($pendahuluan['label']  == 1) ? 'Tersedia' : 'Tidak Tersedia' ?></option>
              <option value="1">Tersedia</option>
              <option value="2">Tidak Tersedia</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Fasilitas</label>
              <select name="fasilitas" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['fasilitas'] ?>"><?php echo ($pendahuluan['fasilitas']  == 1) ? 'Tersedia' : 'Tidak Tersedia' ?></option>
              <option value="1">Tersedia</option>
              <option value="2">Tidak Tersedia</option>
              </select>
            </div>
          </div>
      </div>

      <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Buah</label>
              <select name="buah" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['buah'] ?>"><?php echo ($pendahuluan['buah']  == 1) ? 'Ya' : 'Tidak' ?></option>
              <option value="1">Ya</option>
              <option value="2">Tidak</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Jenis</label>
              <select name="jenis_buah" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['jenis_buah'] ?>"><?php echo $jenis_buah['nama_jenis'] ?></option>
              <?php foreach($jenis_varietass as $jenis_varietas): ?>  <option value="<?php echo $jenis_varietas['id_jenis_varietas'] ?>"><?php echo ucwords($jenis_varietas['nama_jenis']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Varietas</label>
              <select name="id_varietas_buah" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['id_varietas_buah'] ?>"><?php echo $varietas_buah['nama_varietas'] ?></option>
              <?php foreach($varietass as $varietas): ?>            
                  <option value="<?php echo $varietas['id_varietas'] ?>"><?php echo strtoupper($varietas['nama_varietas']) ?></option>
                  <?php endforeach; ?>
              </select>
            </div>
          </div>
      </div>

      <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Sayur</label>
              <select name="sayur" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['sayur'] ?>"><?php echo ($pendahuluan['sayur']  == 1) ? 'Ya' : 'Tidak' ?></option>
              <option value="1">Ya</option>
              <option value="2">Tidak</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Jenis</label>
              <select name="jenis_sayur" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['jenis_sayur'] ?>"><?php echo (isset($jenis_sayur['nama_jenis'])) ? $jenis_sayur['nama_jenis'] : 'Pilih' ?> </option>
              <?php foreach($jenis_varietass as $jenis_varietas): ?>  <option value="<?php echo $jenis_varietas['id_jenis_varietas'] ?>"><?php echo ucwords($jenis_varietas['nama_jenis']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Varietas</label>
              <select name="id_varietas_sayur" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['id_varietas_sayur'] ?>"><?php echo (isset($varietas_sayur['nama_varietas'])) ? $varietas_sayur['nama_varietas'] : 'Pilih' ?></option>
              <?php foreach($varietass as $varietas): ?>            
                  <option value="<?php echo $varietas['id_varietas'] ?>"><?php echo strtoupper($varietas['nama_varietas']) ?></option>
                  <?php endforeach; ?>
              </select>
            </div>
          </div>
      </div>

      <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Tanaman Obat</label>
              <select name="tanaman_obat" class="form-control select2">
               <option selected value="<?php echo $pendahuluan['tanaman_obat'] ?>"><?php echo ($pendahuluan['tanaman_obat']  == 1) ? 'Ya' : 'Tidak' ?></option>
              <option value="1">Ya</option>
              <option value="2">Tidak</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Jenis</label>
              <select name="jenis_tanaman_obat" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['jenis_tanaman_obat'] ?>"><?php echo (isset($jenis_tanaman_obat['nama_jenis'])) ? $jenis_tanaman_obat['nama_jenis'] : 'Pilih' ?> </option>
              <?php foreach($jenis_varietass as $jenis_varietas): ?>  <option value="<?php echo $jenis_varietas['id_jenis_varietas'] ?>"><?php echo ucwords($jenis_varietas['nama_jenis']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Varietas</label>
              <select name="id_varietas_tanaman_obat" class="form-control select2">
              <option selected value="<?php echo $pendahuluan['id_varietas_tanaman_obat'] ?>"><?php echo (isset($varietas_tanaman_obat['nama_varietas'])) ? $varietas_tanaman_obat['nama_varietas'] : 'Pilih' ?></option>
              <?php foreach($varietass as $varietas): ?>            
                  <option value="<?php echo $varietas['id_varietas'] ?>"><?php echo strtoupper($varietas['nama_varietas']) ?></option>
                  <?php endforeach; ?>
              </select>
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