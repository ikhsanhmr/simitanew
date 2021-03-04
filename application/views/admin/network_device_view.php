 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Manage Network Device</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Manage Network Device</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Network Device Data</h3>
            </div>
            <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="table_network" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="center">No.</th>
                    <th>Merk Network Device</th>
                    <th>Device Type</th>
                    <th>Serial Number</th>
                    <th>IP Address</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Pengguna</th>
                    <th>Unit</th>
                    <th>Status Aset</th>
                    <th>Vendor</th>
                    <th>Tahun</th>
                    <th>Last Inspection</th>
                    <th>Actions</th>
                  </tr>
                </thead>

                <tbody>
                </tbody>
               
              </table>
            </div>
              <div class="row">
                <div id="default-buttons" class="col-sm-6">
                  <a class="btn btn-primary" href="<?php echo site_url('admin/network_device_add'); ?>">Add Network Device</a>
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
  
  