 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Gangguan
        <small>Network Devices</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">List Gangguan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Gangguan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover">
                <thead>
                <tr>
                  <th class="center" style="width:20px">No.</th>
                  <th>Nama Perangkat</th>
                  <th>Unit</th>
                  <th>Gangguan</th>
                  <th>Tanggal Gangguan</th>
                  <th>Solusi</th>
                  <th>Tanggal Penyelesaian</th>
                  <th>Status</th>
                </tr>
                </thead>
                <?php 
                $no =1;
                ?>
                <tbody>
                <?php foreach ($gangguan->result_array() as $data) { ?>
                <tr>
                  <td class="center">
                      <?php echo $no; ?>
                  </td>
                  <td>
                    <strong><a style="cursor:pointer" href="<?php echo base_url() . "admin/gangguan_view?id_ggn=".$data['id_ggn']?>"><?php echo $data['device_type']." ".$data['merek']." ".$data['type']; ?></a></strong>
                  </td>
                  <td>
                    <?php echo $data['nama_unit'];?>
                  </td>
                  <td>
                    <?php echo $data['desk_ggn'];?>
                  </td>
                  <td>
                    <?php echo date('d F Y H:i:s', strtotime($data['tgl_gangguan']));?>
                  </td>
                  <td>
                    <?php if($data['solusi'] != NULL) { echo $data['solusi']; } else { echo '<i class="text-muted">belum diselesaikan</i>'; }?>
                  </td>
                  <td>
                    <?php if($data['solved_at'] != NULL) { echo date('d F Y H:i:s', strtotime($data['solved_at'])); } else { echo '<i class="text-muted">belum diselesaikan</i>';}?>
                  </td>
                  <td>
                    <?php if($data['solved_at'] == NULL){ echo '<span class="badge bg-red">open</span>'; } else { echo '<span class="badge bg-green">closed</span>';}?>
                  </td>
                </tr>
                <?php 
                  $no++;
                  }
                ?>
                </tbody>
              </table>
                <div class="row">
                    <div id="default-buttons" class="col-sm-6">
                    <a class="btn btn-primary" href="<?php echo site_url('admin/gangguan_add'); ?>"><i class="fa fa-plus-square"></i>  &nbsp Create Gangguan</a>
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
  
  