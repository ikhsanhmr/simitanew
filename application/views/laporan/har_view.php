 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        laporan
        <small>Manage laporan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Master Data</a></li>
        <li class='active'><a href="#">Laporan Kerusakan</a></li>
     
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="center">No.</th>
                    <th class="text-center">Nama Unit</th>
                    <th class="text-center">Lokasi</th>
                    <th class="text-center">Waktu Pelaksanaan</th>
                    <th class="text-center">Nama Perangkat</th>
                    <th class="text-center">Info Detail</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  foreach ($data_har as $laporan):
                  ?>
                    <tr>
                      <td class="text-center"><?= $no ?></td>
                      <td class="text-center"><?= $laporan['nama_unit']; ?></td>
                      <td class="text-center"><?= $laporan['lokasi']; ?></td>
                      <td class="text-center"><?= date("d/F/Y",strtotime($laporan['waktu_pelaksanaan'])); ?></td>
                      <td class="text-center"><?= $laporan['nama_perangkat']; ?></td>
                      <td class="text-center">
                      <a href="<?= base_url(); ?>laporan/detailDataHar/<?= $laporan['id']; ?>"class="btn btn-info">Detail </a>
                      </td>
                      <td class="text-center">
                        <a href="<?= base_url(); ?>laporan/editDataHar/<?= $laporan['id']; ?>"class="btn"><i class="fa fa-pencil bigger-130"></i> </a>
                        <a href="<?= base_url(); ?>laporan/deleteDataHar/<?= $laporan['id']; ?>" class="btn " onclick="return confirm('Anda yakin ingin menghapus data ini?');"><i class="fa fa-trash-o bigger-130"></i></a>
                      </td>
                    </tr>
                  <?php
                    $no++;
                  endforeach;
                  ?>
				
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
  
  