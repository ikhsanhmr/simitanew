 
 <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Admin
    <small>Add Stok</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Admin</a></li>
    <li class="active">Add Stok</li>
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
       <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_stok_add" enctype="multipart/form-data">
            
        <div class="box-header with-border">
          <h3 class="box-title">Add Stok</h3>
        </div>
        <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="jenis_perangkat" class="col-sm-3 control-label">Jenis Perangkat</label>
                            <div class="col-sm-5">
                            <select class="form-control select2" name="jenis_perangkat" id="jenis_perangkat" style="width: 100%;">
                            <option selected="selected"> -- Jenis Perangkat -- </option>
                               
                                <option value="Laptop">Laptop</option>
                                <option value="PC/Komputer">PC / Komputer</option>
                                <option value="Monitor">Monitor</option>
                                <option value="Aplikasi Lokal">Aplikasi Lokal</option>
                                <option value="Server">Server</option>
                                <option value="Network Device">Network Device</option>
                                <option value="Video Conference">Video Conference</option>
                              
                            </select>
                            <!-- <input type="text" class="form-control" id="jenis_perangkat" name="jenis_perangkat" placeholder="Input Jenis perangkat.." required/>-->
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="jumlah_perangkat" class="col-sm-3 control-label">Jumlah Perangkat</label>
                            <div class="col-sm-5">
                             <input type="text" class="form-control" id="jumlah_perangkat" name="jumlah_perangkat" placeholder="Input Jumlah Perangkat.." required/>
                            </div>
                        </div>
                    </div>
                    
                                        
                    
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
                    <div class="pull-center">
                    
                        <a href="<?php echo base_url(); ?>admin/stok_view" class="btn btn-danger">Kembali</a>
                        <button type="reset" class="btn btn-warning">Ulangi</button>
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