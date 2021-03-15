 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        laporan Inspeksi Peralatan
        <small>Manage laporan Inspeksi Peralatan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Master Data</a></li>
        <li class='active'><a href="#">Laporan Inspeksi Peralatan</a></li>
     
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <?= $this->session->flashdata('pesan'); ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">laporan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_har" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="center">No.</th>
                    <th class="text-center">Unit Kantor Induk</th>
                    <th class="text-center">Lokasi</th>
                    <th class="text-center">Waktu Pelaksanaan</th>
                    <th class="text-center">Nama Perangkat</th>
                    <th class="text-center">Info Detail</th>
                    <th class="text-center">Approval</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>

                <tbody>
                 
                </tbody>
               
              </table>
                <div class="row">
					<div id="default-buttons" class="col-sm-6">
						<a class="btn btn-primary" href="<?= base_url('laporan/addDataHar'); ?>">Add Data</a>
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
  
  