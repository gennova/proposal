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
          
          <h1 class="text-center text-info">PENGESAHAN VALIDASI PROPOSAL</h1> <br /><br />
 <?php 
foreach($proposale as $proposal) { ?> 
<?php echo form_open('wd3/revisi/update_review/'.$proposal->id_proposal,array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>

        <!-- Validasi Proposal -->
        <div class="form-group">
          <label for="validasiproposal" class="col-sm-2 control-label">Validasi Proposal</label>
          <div class="col-sm-6">
          <select class="form-control" name="validasi_proposal">
            <option value="">--- Validasi Proposal ---</option>
           <?php 
                echo '<option value="ON REVIEW">ON REVIEW</option>';
                echo '<option value="TIDAK DISETUJUI">TIDAK DISETUJUI</option>';
                echo '<option value="DISETUJUI">DISETUJUI</option>';
            ?>
            </select>
          </div>
        </div>

                <!-- Alasan Validasi -->
        <div class="form-group">
          <label for="alasan" class="col-sm-2 control-label">Alasan Validasi</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'alasan', 'id' => 'alasan', 'class' => 'form-control', 'placeholder' => 'Masukkan Alasan Persetujuan/Penolakan Proposal','rows' => '2');
           echo form_textarea($data); ?>
          </div>
        </div>

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
          <label for="dasar_hukum" class="col-sm-2 control-label">Tujuan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'dasar_hukum', 'id' => 'dasar_hukum', 'class' => 'form-control', 'placeholder' => 'Masukkan Tujuan','value'=>$proposal->dasar_hukum);
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

        <!-- Tempat -->
        <div class="form-group">
          <label for="tempat" class="col-sm-2 control-label">Tempat</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'tempat', 'id' => 'tempat', 'class' => 'form-control', 'placeholder' => 'Masukkan Tempat','value'=>$proposal->tempat);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Tanggal Pelaksanaan -->
        <div class="form-group">
          <label for="tgl_pelaksanaan" class="col-sm-2 control-label">Tanggal Pelaksanaan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'tgl_pelaksanaan', 'id' => 'tgl_pelaksanaan', 'class' => 'form-control', 'placeholder' => 'Masukkan Tanggal Pelaksanaan','value'=>$proposal->tgl_pelaksanaan);
           echo form_textarea($data); ?>
          </div>         
        </div>

        <!-- Keluaran -->
        <div class="form-group">
          <label for="keluaran" class="col-sm-2 control-label">Keluaran</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'keluaran', 'id' => 'keluaran', 'class' => 'form-control', 'placeholder' => 'Masukkan Keluaran','value'=>$proposal->keluaran);
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
