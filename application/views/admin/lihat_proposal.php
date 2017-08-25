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
          <div class="text-center" style="font-size:30px;">Proposal Terkirim</div><br />
          <table id="example" class="table table-bordered table-striped header-fixed ">
            <thead>
            <tr>
              <th>No.</th>
              <th>Jenis Proposal</th>
              <th>Judul Proposal</th>
              <th>Nama PJK</th>
              <th>Tanggal Terkirim</th>
              <th>View Proposal</th>
              <th>Edit Proposal</th>
              <th>Hapus Proposal</th>
           </tr>
            </thead>
            <tbody>
            <?php $i =1; if(!empty($proposale)) {
            foreach($proposale as $proposal) : { ?>
           <tr data-toggle="modal" data-target="myModal" class="noExl">
                <td><?php echo $i++; ?></td>
                <td><?php echo $proposal->urusan; ?></td>
                <td><?php echo $proposal->judul; ?></td>
                <td><?php echo $proposal->nama_pjk; ?></td>
                <td><?php echo $proposal->tgl_input; ?></td>
                <td><?php echo anchor("admin/detail_proposal/detail/$proposal->id_proposal",'<span class="glyphicon glyphicon-file text-primary fa-lg" aria-hidden="true" title="View Proposal"></span>'); ?>   
                </td>
                <td><?php echo anchor("admin/edit_proposal/edit/$proposal->id_proposal",'<span class="glyphicon glyphicon-edit text-primary fa-lg" aria-hidden="true" title="Edit Proposal"></span>'); ?>   
                </td>
                <td>
                <?php echo anchor("admin/input/hapus/$proposal->id_proposal",'<span class="glyphicon glyphicon-trash text-danger fa-lg" aria-hidden="true"></span>',array('onClick' => "return confirm('Anda yakin data ini akan di HAPUS ?')")); ?>
                </td>
      
            </tr>
            <?php } endforeach; } ?>
                  
          </table>

        </div>
        <!-- /page content -->

        <?php $this->view('template/footer'); ?>
      </div>
    </div>

    <?php $this->view('template/js'); ?>
    <script src="<?=base_url()?>asset/datatable/js/jquery-1.11.1.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/dataTables.bootstrap.js"></script>


    <script type="text/javascript">
    $(document).ready( function () {
        $('#example').dataTable();
      } );
</script>
</body>
</html>
