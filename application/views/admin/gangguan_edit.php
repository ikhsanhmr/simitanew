<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Close Laporan Gangguan
    <small>Network Device</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Admin</a></li>
    <li><a href="<?php echo site_url('admin/gangguan'); ?>">List Gangguan</a></li>
    <li class="active">Close Laporan Gangguan</li>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
     

      <!-- Form Element sizes -->
      <div class="box box-success">
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_gangguan_edit" enctype="multipart/form-data">
        <div class="box-header with-border">
            <h3 class="box-title">Close Laporan Gangguan</h3>
        </div>
        <div class="box-body">
            <div class="col-lg-10">
                <div class="form-group">
                    <input type="hidden" name="id_ggn" value="<?php echo $gangguan_edit['id_ggn']; ?>">
                    <label for="" class="col-sm-3 control-label">Perangkat</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <input type="text" class="form-control" name="id_network_device" value="<?php echo $gangguan_edit['device_type'].' '.$gangguan_edit['merek'].' '.$gangguan_edit['type'].' - '.$gangguan_edit['nama_unit'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Tanggal Gangguan</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <input type="text" class="form-control" name="tgl_gangguan" value=" <?php echo date('d F Y H:i:s', strtotime($gangguan_edit['tgl_gangguan'])); ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Deskripsi Gangguan</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <textarea class="form-control" name="desk_ggn" readonly><?php echo $gangguan_edit['desk_ggn']; ?></textarea> 
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Foto Gangguan</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <?php if($gangguan_edit['foto_ggn'] != NULL) { ?>
                        <img width="340" src="<?php echo base_url(); ?>upload/<?php echo $gangguan_edit['foto_ggn']; ?>"/>
                        <?php } else { ?>
                        <img width="340" src="<?php echo base_url(); ?>upload/default-image.png"/>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Solusi</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <textarea class="form-control" name="solusi" placeholder="Rincian penyelesaian" required></textarea> 
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Tanggal Penyelesaian</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <input type="datetime-local" class="form-control" name="solved_at" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Eviden Penyelesaian</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <input type="file" class="form-control" name="foto_solusi">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="pull-center">
                <a href="<?php echo site_url('admin/gangguan_view?id_ggn='.$gangguan_edit['id_ggn']);?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>&nbsp Cancel</a>
                <button type="reset" class="btn btn-warning pull-right"><i class="fa fa-rotate-left"></i> &nbsp Reset</button>
                <button type="submit" class="btn btn-primary pull-right" style="margin-right:10px"><i class="fa fa-save"></i>&nbsp Update & Close Gangguan</button>
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