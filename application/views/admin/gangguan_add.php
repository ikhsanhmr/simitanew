<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Create Laporan Gangguan
            <small>Network Device</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="<?php echo site_url('admin/gangguan'); ?>">List Gangguan</a></li>
            <li class="active">Create Laporan Gangguan</li>
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

                            <h3 class="box-title">Create Laporan Gangguan</h3>

                        </div>
                        <div class="box-body">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Perangkat</label>
                                    <div class="col-sm-5" style="font-weight:normal">
                                        <select class="form-control" name="id_network_device" style="width: 100%;" required>
                                            <option selected="selected"> -- Pilih Perangkat -- </option>
                                            <?php foreach ($tampil_network_device->result_array() as $data) { ?>
                                                <option value="<?php echo $data['id_network_device']; ?>"><?php echo ' [ ' . $data['id_network_device'] . ' ] ' . $data['device_type'] . ' ' . $data['nama_mereknya'] . " " . $data['type'] . ' - ' . $data['nama_unitnya'] . ' ' . $data['keterangan']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Tanggal Gangguan</label>
                                    <div class="col-sm-5" style="font-weight:normal">
                                        <input type="datetime-local" class="form-control" name="tgl_gangguan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Deskripsi Gangguan</label>
                                    <div class="col-sm-5" style="font-weight:normal">
                                        <textarea class="form-control" placeholder="Jelaskan Rincian Gangguan" name="desk_ggn" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Foto Perangkat</label>
                                    <div class="col-sm-5" style="font-weight:normal">
                                        <input type="file" class="form-control" name="foto_ggn" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-center">
                                <a href="<?php echo site_url('admin/gangguan'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>&nbsp Back</a>
                                <button type="reset" class="btn btn-warning pull-right"><i class="fa fa-rotate-left"></i> &nbsp Reset</button>
                                <button type="submit" class="btn btn-primary pull-right" style="margin-right:10px"><i class="fa fa-save"></i>&nbsp Submit</button>
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