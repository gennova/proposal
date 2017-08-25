<!DOCTYPE html>
<html lang="en"> 
  
  <?php $this->view('template/head'); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <?php $this->view('template/sidebar'); ?>

        <?php $this->view('template/top'); ?>
 
        <!-- page content -->
        <div class="right_col" role="main">
          
          <h1 class="text-center text-info">Input Laporan Kegiatan</h1> <br /><br />
       <?php echo form_open('pjk/input_laporan/tambah_proses',array('id' => 'tambah_laporan','name' => 'tambah_laporan', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>


        <!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'placeholder' => 'Masukkan Judul Kegiatan','rows' => '2');
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Nama PJK-->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama_pjk', 'id' => 'nama_pjk', 'class' => 'form-control', 'placeholder' => 'Nama PJK');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Rincian Kegiatan -->
        <div class="form-group">
          <label for="rincian_kegiatan" class="col-sm-2 control-label">Rincian Kegiatan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'rincian_kegiatan', 'id' => 'rincian_kegiatan', 'class' => 'form-control', 'placeholder' => 'Masukkan Rincian Kegiatan');
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Rincian Biaya -->
        <div class="form-group">
          <label for="rincian_biaya" class="col-sm-2 control-label">Rincian Biaya</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'rincian_biaya', 'id' => 'rincian_biaya', 'class' => 'form-control', 'placeholder' => 'Masukkan Rincian Biaya');
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Dokumentasi -->
        <div class="form-group">
          <label for="bukti_biaya" class="col-sm-2 control-label">Dokumentasi</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'dokumentasi', 'id' => 'dokumentasi', 'class' => 'form-control', 'placeholder' => 'Upload Dokumentasi');
           echo form_textarea($data); ?>
          </div>
        </div>

       

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
        </div>
       <?php echo form_close(); ?>

        </div>
        <!-- /page content -->

        <?php $this->view('template/footer'); ?>
      </div>
    </div>
    
    <?php $this->view('template/js'); ?>
</body>
</html>
