<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Detail Laporan Gangguan
    <small>Network Device</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Admin</a></li>
    <li><a href="<?php echo site_url('admin/gangguan'); ?>">List Gangguan</a></li>
    <li class="active">Detail Laporan Gangguan</li>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
     

      <!-- Form Element sizes -->
      <div class="box box-success">
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_gangguan_add" enctype="multipart/form-data">
        <div class="box-header with-border">
            
            <h3 class="box-title">Status Laporan Gangguan : 
            <?php if($gangguan_view['solved_at'] == NULL){ echo '<span class="badge bg-red">open</span>'; } else { echo '<span class="badge bg-green">closed</span>';}?>
            </h3>
        </div>
        <div class="box-body">
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Perangkat</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <input type="text" class="form-control" name="id_network_device" value="<?php echo $gangguan_view['device_type'].' '.$gangguan_view['merek']." ".$gangguan_view['type'].' - '.$gangguan_view['nama_unit'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Tanggal Gangguan</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <input type="text" class="form-control" name="tgl_gangguan" value=" <?php echo date('d F Y H:i:s', strtotime($gangguan_view['tgl_gangguan'])); ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Deskripsi Gangguan</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <textarea class="form-control" name="desk_ggn" readonly><?php echo $gangguan_view['desk_ggn']; ?></textarea> 
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Foto Gangguan</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <?php if($gangguan_view['foto_ggn'] != NULL) { ?>
                        <img width="340" src="<?php echo base_url(); ?>upload/<?php echo $gangguan_view['foto_ggn']; ?>"/>
                        <?php } else { ?>
                        <img width="340" src="<?php echo base_url(); ?>upload/default-image.png"/>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div <?php if($gangguan_view['solved_at'] == NULL) { echo 'hidden'; } ?>>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Solusi</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <textarea class="form-control" name="solusi" readonly><?php echo $gangguan_view['solusi']; ?></textarea> 
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Tanggal Penyelesaian</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <input type="text" class="form-control" name="solved_at" value=" <?php echo date('d F Y H:i:s', strtotime($gangguan_view['solved_at'])); ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Eviden Penyelesaian</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <?php if($gangguan_view['foto_ggn'] != NULL) { ?>
                        <img width="340" src="<?php echo base_url(); ?>upload/<?php echo $gangguan_view['foto_solusi']; ?>"/>
                        <?php } else { ?>
                        <img width="340" src="<?php echo base_url(); ?>upload/default-image.png"/>
                        <?php } ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="pull-center">
                <a href="<?php echo site_url('admin/gangguan');?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>&nbsp Back</a>
                <button type="reset" class="btn btn-danger pull-right" ><i class="fa fa-trash"></i> &nbsp Delete</button>
                <?php if($this->session->userdata('rolenya') == '1') { ?>
                <a href="<?php echo base_url() . "admin/gangguan_edit?id_ggn=".$gangguan_view['id_ggn']?>" class="btn btn-success pull-right" style="margin-right:10px;<?php if($gangguan_view['solved_at'] != NULL) { echo 'display:none'; } ?>"><i class="fa fa-pencil"></i>&nbsp Closed Gangguan</a>
                <?php } ?>
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