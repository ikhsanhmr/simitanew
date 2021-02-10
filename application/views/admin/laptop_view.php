 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Manage Laptop</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Manage Laptop</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Laptop Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="center">No.</th>
                  <th>Merk Laptop</th>
                  <th>Spesifikasi</th>
                  <th>Pengguna</th>
                  <th>Laptop Name</th>
				          <th>Serial Number</th>
                  <th>IP Address</th>
                  <th>Unit</th>
                  <th>Status Aset</th>
                  <th>Vendor</th>
                  <th>Tahun</th>
				          <th>Actions</th>
                </tr>
                </thead>

                <tbody>

                </tbody>
               
              </table>
            </div>
              <div class="row">
                  <div id="default-buttons" class="col-sm-6">
                  <a class="btn btn-primary" href="<?php echo site_url('admin/laptop_add'); ?>">Add laptop</a>
                  </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  