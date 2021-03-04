 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        IT Support
        <small>Manage IT Support</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">IT Support</a></li>
        <li class="active">Manage IT Support</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <?= $this->session->flashdata('pesan'); ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">IT Support</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_support" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="center">No.</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">No. Hp</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Lokasi Penempatan</th>
  				          <th class="text-center">Actions</th>
                  </tr>
                </thead>

                <tbody>
                 
                </tbody>
               
              </table>
												<div class="row">
														<div id="default-buttons" class="col-sm-6">
														<a class="btn btn-primary" href="<?= base_url('support/addData'); ?>">Add Data</a>
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
  
  