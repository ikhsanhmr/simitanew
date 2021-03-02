
 <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Admin
    <small>Edit Stok</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Admin</a></li>
    <li class="active">Edit Stok</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
     

      <!-- Form Element sizes -->
      <div class="box box-success">
       <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_stok_edit?id_merek=<?php echo $stoknya['id_stok']; ?>" enctype="multipart/form-data">
            
             <input type="hidden" name="id_stok" value="<?php echo $stoknya['id_stok']; ?>">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Stok</h3>
        </div>
        <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="jenis_perangkat" class="col-sm-3 control-label">Jenis Perangkat</label>
                            <div class="col-sm-5">
                             <input type="text" class="form-control" id="jenis_perangkat" name="jenis_perangkat" value="<?php echo $stoknya['jenis_perangkat']; ?>" required/>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="jumlah_perangkat" class="col-sm-3 control-label">Jumlah Perangkat</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="jumlah_perangkat" name="jumlah_perangkat" value="<?php echo $stoknya['jumlah_perangkat']; ?>" required/>
                             </div>
                        </div>
                    </div>
                    <br><br><br>
                
                    
                     
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
                    <div class="pull-center">
                    
                        <a href="<?php echo base_url(); ?>admin/stok_view" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
                 </form>
      </div>
      <!-- /.box -->
                
    </div>
    
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->