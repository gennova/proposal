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
          
          <h1 class="text-center text-info">Edit Proposal</h1> <br /><br />
       <?php echo form_open('pjk/input/tambah_proses',array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>

 <?php 
foreach($proposale as $proposal)
{ 
?>
       	<!-- Jenis Proposal -->
        <div class="form-group">
          <label for="jenis" class="col-sm-2 control-label">Jenis Proposal</label>
          <div class="col-sm-6">
          <select class="form-control" name="jenis_proposal">
            <option value="">--- Pilih Jenis Proposal ---</option>
           <?php 
           $id_jenis_proposal = $proposal->jenis_proposal;
           $status='selected';
           foreach($data_wd as $data)
            {     
                  if($data->id_wd==$id_jenis_proposal){
                      echo '<option '.$status.' value="'.$data->id_wd.'">'.$data->urusan.'</option>';
                  }else {
                      echo '<option value="'.$data->id_wd.'">'.$data->urusan.'</option>';
                  }
            } ?>
            </select>
          </div>
        </div>

<!-- Nama PJK-->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama_pjk', 'id' => 'nama_pjk', 'class' => 'form-control', 'placeholder' => 'Nama PJK','value'=>$proposal->nama_pjk);
           echo form_input($data); ?>
          </div>
        </div>
        <!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2','value'=>$proposal->judul);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Pendahuluan -->
        <div class="form-group">
          <label for="pendahuluan" class="col-sm-2 control-label">Pendahuluan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'pendahuluan', 'id' => 'pendahuluan', 'class' => 'form-control', 'placeholder' => 'Masukkan Pendahuluan','value'=>$proposal->pendahuluan);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Tujuan -->
        <div class="form-group">
          <label for="tujuan" class="col-sm-2 control-label">Tujuan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'tujuan', 'id' => 'tujuan', 'class' => 'form-control', 'placeholder' => 'Masukkan Tujuan','value'=>$proposal->dasar_hukum);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- RAB -->
        <div class="form-group">
          <label for="rab" class="col-sm-2 control-label">RAB</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'rab', 'id' => 'rab', 'class' => 'form-control', 'placeholder' => 'Masukkan RAB','value'=>$proposal->rab);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Penutup -->
        <div class="form-group">
          <label for="penutup" class="col-sm-2 control-label">Penutup</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'penutup', 'id' => 'penutup', 'class' => 'form-control', 'placeholder' => 'Masukkan Penutup','value'=>$proposal->penutup);
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
<?php
}
?>

        <?php $this->view('template/footer'); ?>
      </div>
    </div>
    
    <?php $this->view('template/js'); ?>
</body>
</html>
