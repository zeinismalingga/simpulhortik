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

        <a href='<?php echo base_url("$class/list_sertifikasi") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/edit/". $sertifikasi['id_sertifikasi']) ?>
        <hr>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Jenis Perbanyakan Benih</label>
              <select name="id_jenis_perbanyakan_benih" id="perbanyakan_benih" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['id_jenis_perbanyakan_benih'] ?>"><?php echo $sertifikasi['nama_jenis_perbanyakan'] ?></option>
              <?php foreach($jenis_perbanyakan_benih as $jns_perbanyakan_benih): ?>            
                <option value="<?php echo $jns_perbanyakan_benih['id_jenis_perbanyakan_benih'] ?>"><?php echo ucwords($jns_perbanyakan_benih['nama_jenis_perbanyakan']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-4">           
            <div class="form-group">
              <label>Jenis Tanaman</label>
              <select class="form-control" name="id_jenis_tanaman" required>
                <option selected value="<?php echo $sertifikasi['id_jenis_tanaman'] ?>"><?php echo $sertifikasi['nama_jenis_tanaman'] ?></option>
                <?php foreach($jenis_tanaman as $jns_tanaman): ?>            
                <option value="<?php echo $jns_tanaman['id_jenis_tanaman'] ?>"><?php echo ucwords($jns_tanaman['nama_jenis_tanaman']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
           </div> 

          <div class="col-md-4">
            <div class="form-group">
              <label>Komoditas</label>
              <select name="id_jenis_varietas" id="pilih_komoditas" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['komoditi'] ?>"><?php echo $sertifikasi['nama_jenis'] ?></option>
              <?php foreach($jenis_varietass as $jenis_varietas): ?>            
                <option value="<?php echo $jenis_varietas['id_jenis_varietas'] ?>"><?php echo ucwords($jenis_varietas['nama_jenis']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>               
        </div>

        <hr>

        <div class="row">
          <div class="col-md-4">           
            <div class="form-group">
                <label>Nama Pemohon</label>
                <input type="text" name="nama_pemohon" class="form-control" value="<?php echo $sertifikasi['nama_pemohon'] ?>" required>
              </div>
            </div> 
          
          <div class="col-md-4">
            <div class="form-group">
                <label>Nama Badan Usaha</label>
                <input type="text" name="nama_usaha" class="form-control" value="<?php echo $sertifikasi['nama_usaha'] ?>" required>
              </div>
          </div> 

          <div class="col-md-4">
            <div class="form-group">
                <label>No. Sertifikat Kompetensi</label>
                <input type="text" name="no_sertifikasi" class="form-control" value="<?php echo $sertifikasi['no_sertifikasi'] ?>" required>
              </div>
          </div> 

          <div class="col-md-4">
            <div class="form-group">
                <label>No. Tanda Daftar</label>
                <input type="text" name="no_tanda_daftar" class="form-control" value="<?php echo $sertifikasi['no_tanda_daftar'] ?>" required>
              </div>
          </div> 

           <div class="col-md-8">           
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control" value="<?php echo $sertifikasi['alamat'] ?>" required>
            </div>
           </div> 
        </div>  
        
        <h4 style="font-weight: bold;">LOKASI PRODUKSI</h4>
        <hr>

        <div class="row">  
          <div class="col-md-4">           
            <div class="form-group">
              <label>Blok</label>
              <input type="text" name="blok" class="form-control" value="<?php echo $sertifikasi['blok'] ?>">
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Kampung</label>
              <input type="text" name="kampung" class="form-control" value="<?php echo $sertifikasi['kampung'] ?>">
            </div>
           </div>

          <div class="col-md-4">           
            <div class="form-group">
              <label>Desa</label>
              <input type="text" name="desa" class="form-control" value="<?php echo $sertifikasi['desa'] ?>">
            </div>
          </div>
        </div>

        <div class="row">  
          <div class="col-md-6">           
            <div class="form-group">
              <label>Kota/Kabupaten</label>
              <select name="id_kota" id="pilih_kota" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['id_kota'] ?>"><?php echo $sertifikasi['nama_kota'] ?></option>
              <?php foreach($kotas as $kota): ?>            
                <option value="<?php echo $kota['id_kota'] ?>"><?php echo strtoupper($kota['nama_kota']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
           </div>

          <div class="col-md-6">           
            <div class="form-group">
              <label>Kecamatan</label>
              <select name="id_kecamatan" id="pilih_kecamatan" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['id_kecamatan'] ?>"><?php echo $sertifikasi['nama_kecamatan'] ?></option>
              </select>
            </div>
           </div>
        </div>

        <h4 style="font-weight: bold;">RENCANA PRODUKSI</h4>
        <hr>  

        <div class="row"> 
          <div class="col-md-3">           
            <div class="form-group">
              <label>Kelas Benih</label>
              <select name="id_kelas_benih_rencana" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['id_kelas_benih_rencana'] ?>"><?php echo $kelas_benih_rencana['singkatan'] ?></option>
              <?php foreach($kelas_benihs as $kelas_benih): ?>            
                <option value="<?php echo $kelas_benih['id_kelas_benih'] ?>"><?php echo strtoupper($kelas_benih['singkatan']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Luas Penangkaran (Ha)</label>
              <input type="text" name="luas_penangkaran" class="form-control" value="<?php echo $sertifikasi['luas_penangkaran'] ?>" required>
            </div>
           </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Volume Benih (batang)</label>
              <input type="text" name="volume" class="form-control" value="<?php echo $sertifikasi['volume'] ?>" required>
            </div>
          </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Tanggal Perbanyakan</label>
              <input type="text" name="tgl_perbanyakan" class="form-control datepicker" value="<?php echo $sertifikasi['tgl_perbanyakan'] ?>" required>
            </div>
           </div>
          
           <div class="col-md-3">           
            <div class="form-group">
              <label>Jumlah Tanaman Induk</label>
              <input type="text" name="jumlah_pohon" class="form-control" value="<?php echo $sertifikasi['jumlah_pohon'] ?>">
            </div>
          </div>
        </div>
        
        <?php
          $id_perbanyakan = $sertifikasi['id_jenis_perbanyakan_benih'];

          $biji = ['14', '13', '12', '8'];
          $anakan = ['10', '4','5','9'];
          $okulasi = ['1','3'];     
        ?>        

        <?php if(in_array($id_perbanyakan, $biji)): ?>
        <div id="biji">
          <h4 style="font-weight: bold;">Benih Sumber : Bentuk biji/rimpang/umbi</h4>
          <hr>

          <div class="row">  
            <div class="col-md-3">           
              <div class="form-group">
                <label>Varietas</label>
                <select name="id_varietas_biji" class="form-control select2">
                <option selected value="<?php echo $sertifikasi['id_varietas_biji'] ?>"><?php echo $sertifikasi['nama_varietas'] ?></option>
                <?php foreach($varietass as $varietas): ?>            
                  <option value="<?php echo $varietas['id_varietas'] ?>"><?php echo strtoupper($varietas['nama_varietas']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div> 
            
            <div class="col-md-3">           
              <div class="form-group">
                <label>Kelas Benih</label>
                <select name="id_kelas_benih_biji" class="form-control select2">
                <option selected value="<?php echo $sertifikasi['id_kelas_benih_biji'] ?>"><?php echo $sertifikasi['singkatan'] ?></option>
                <?php foreach($kelas_benihs as $kelas_benih): ?>            
                  <option value="<?php echo $kelas_benih['id_kelas_benih'] ?>"><?php echo strtoupper($kelas_benih['singkatan']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div> 

            <div class="col-md-3">           
              <div class="form-group">
                <label>No. Kelompok</label>
                <input type="text" name="no_kelompok_biji" class="form-control" value="<?php echo $sertifikasi['no_kelompok_biji'] ?>">
              </div>
            </div> 

            <div class="col-md-3">           
              <div class="form-group">
                <label>Asal Benih</label>
                <input type="text" name="asal_benih_biji" class="form-control" value="<?php echo $sertifikasi['asal_benih_biji'] ?>">
              </div>
            </div> 
          </div>  
        </div>
        <?php endif; ?>
        
        <?php if(in_array($id_perbanyakan, $anakan)): ?>
        <div id="anakan">
          <h4 style="font-weight: bold;">Benih Sumber : Anakan/stek/mata tempel</h4>
          <hr>

          <div class="row">  
            <div class="col-md-3">           
              <div class="form-group">
                <label>Varietas</label>
                <select name="id_varietas_anakan" class="form-control select2">
                <option selected value="<?php echo $sertifikasi['id_varietas_anakan'] ?>"><?php echo $sertifikasi['nama_varietas'] ?></option>
                <?php foreach($varietass as $varietas): ?>            
                  <option value="<?php echo $varietas['id_varietas'] ?>"><?php echo strtoupper($varietas['nama_varietas']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div> 
            
            <div class="col-md-3">           
              <div class="form-group">
                <label>Kelas Benih</label>
                <select name="id_kelas_benih_anakan" class="form-control select2">
                <option selected value="<?php echo $sertifikasi['id_kelas_benih_anakan'] ?>"><?php echo $sertifikasi['singkatan'] ?></option>
                <?php foreach($kelas_benihs as $kelas_benih): ?>            
                  <option value="<?php echo $kelas_benih['id_kelas_benih'] ?>"><?php echo strtoupper($kelas_benih['singkatan']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div> 

            <div class="col-md-3">           
              <div class="form-group">
                <label>No. Kelompok</label>
                <input type="text" name="no_kelompok_anakan" class="form-control" value="<?php echo $sertifikasi['no_kelompok_anakan'] ?>">
              </div>
            </div> 

            <div class="col-md-3">           
              <div class="form-group">
                <label>Asal Benih</label>
                <input type="text" name="asal_benih_anakan" class="form-control" value="<?php echo $sertifikasi['asal_benih_anakan'] ?>">
              </div>
            </div> 
          </div>  
        </div>
        <?php endif; ?>

        <?php if(in_array($id_perbanyakan, $okulasi)): ?>
        <div id="okulasi">
          <h4 style="font-weight: bold;">Benih Sumber : Okulasi/sambung</h4>
          <hr>

          <div class="row">  

            <div class="col-md-3">           
              <div class="form-group">
                <label>Varietas</label>
                <select name="id_varietas_okulasi" class="form-control select2">
                <option selected value="<?php echo $sertifikasi['id_varietas_okulasi'] ?>"><?php echo $sertifikasi['nama_varietas'] ?></option>
                <?php foreach($varietass as $varietas): ?>            
                  <option value="<?php echo $varietas['id_varietas'] ?>"><?php echo strtoupper($varietas['nama_varietas']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div> 
            
            <div class="col-md-3">           
              <div class="form-group">
                <label>Kelas Benih</label>
                <select name="id_kelas_benih_anakan" class="form-control select2">
                <option selected value="<?php echo $sertifikasi['id_kelas_benih_anakan'] ?>"><?php echo $sertifikasi['singkatan'] ?></option>
                <?php foreach($kelas_benihs as $kelas_benih): ?>            
                  <option value="<?php echo $kelas_benih['id_kelas_benih'] ?>"><?php echo strtoupper($kelas_benih['singkatan']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div> 

            <div class="col-md-3">           
              <div class="form-group">
                <label>No. Register PI</label>
                <input type="text" name="no_register_pi_okulasi" class="form-control" value="<?php echo $sertifikasi['no_register_pi_okulasi'] ?>">
              </div>
            </div>
            
            <div class="col-md-3">           
              <div class="form-group">
                <label>Lokasi Pohon Induk</label>
                <input type="text" name="lokasi_pohon_induk" class="form-control" value="<?php echo $sertifikasi['lokasi_pohon_induk'] ?>">
              </div>
            </div>

            <div class="col-md-3">           
              <div class="form-group">
                <label>Varietas</label>
                <select name="id_varietas_okulasi_2" class="form-control select2">
                <option selected value="<?php echo $sertifikasi['id_varietas_okulasi_2'] ?>"><?php echo $sertifikasi['nama_varietas'] ?></option>
                <?php foreach($varietass as $varietas): ?>            
                  <option value="<?php echo $varietas['id_varietas'] ?>"><?php echo strtoupper($varietas['nama_varietas']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div> 

            <div class="col-md-3">           
              <div class="form-group">
                <label>Lokasi Pohon Induk</label>
                <input type="text" name="lokasi_pohon_induk_2" class="form-control" value="<?php echo set_value('lokasi_pohon_induk_2') ?>">
              </div>
            </div>

          </div>  
        </div>
        <?php endif; ?>

        <h4 style="font-weight: bold;">TANAMAN SEBELUMNYA</h4>
        <hr>
        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Jenis Tanaman</label>
              <input type="text" name="jenis_tanaman_tb" class="form-control" value="<?php echo $sertifikasi['jenis_tanaman_tb'] ?>" required>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>Varietas</label>
              <select name="id_varietas_tb" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['id_varietas_tb'] ?>"><?php echo $varietas_tb['nama_varietas'] ?></option>
              <?php foreach($varietass as $varietas): ?>            
                <option value="<?php echo $varietas['id_varietas'] ?>"><?php echo strtoupper($varietas['nama_varietas']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>Sertifikasi</label>
              <select name="id_hasil_sertifikasi" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['id_hasil_sertifikasi'] ?>"><?php echo $sertifikasi['nama_hasil'] ?></option>
              <?php foreach($hasil_sertifikasi as $hsl_sertifikasi): ?>            
                <option value="<?php echo $hsl_sertifikasi['id_hasil_sertifikasi'] ?>"><?php echo ($hsl_sertifikasi['nama_hasil']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>No. Sertifikasi</label>
              <input type="text" name="no_sertifikasi_tb" class="form-control" value="<?php echo $sertifikasi['no_sertifikasi_tb'] ?>">
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl. Panen</label>
              <input type="text" name="tgl_panen_tb" class="form-control datepicker" value="<?php echo $sertifikasi['tgl_panen_tb'] ?>">
            </div>
          </div>

        </div>

        <hr>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tanggal Permohonan</label>
              <input type="text" name="tgl_permohonan" class="form-control datepicker" value="<?php echo $sertifikasi['tgl_permohonan'] ?>">
            </div>
          </div>
        </div> 

        <div style="margin-bottom: 120px"></div>

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