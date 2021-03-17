 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Manage Merek</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Manage Merek</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Merek Perangkat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_merek" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th class="center">
				  No.
				 </th>
                  <th>Merek Perangkat</th>
                  <th>Kategori</th>
				  <th>Actions</th>
                </tr>
                </thead>
			
                <tbody>
			
                </tbody>
               
              </table>
												<div class="row">
														<div id="default-buttons" class="col-sm-6">
														<a class="btn btn-primary" href="<?php echo site_url('admin/merek_add'); ?>">Add Merek</a>
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
  
  