<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kategori Gangguan Perangkat
            <small>Add Data</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Add Kategori Gangguan Perangkat</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->


                <!-- Form Element sizes -->
                <div class="box box-success">
                    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_kategori_gangguan_perangkat_add" enctype="multipart/form-data">

                        <div class="box-header with-border">
                            <h3 class="box-title">Add Data</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="kategori" class="col-sm-3 control-label">Kategori Gangguan Perangkat</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="kategori" name="kategori" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-center">

                                <a href="<?php echo base_url(); ?>admin" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-success">Submit</button>
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