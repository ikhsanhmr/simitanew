<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admin
            <small>Add Unit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Add Unit</li>
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
                    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_unit_add" enctype="multipart/form-data">

                        <div class="box-header with-border">
                            <h3 class="box-title">Add Data</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="level1" class="col-sm-3 control-label">Unit Level 1</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="level1" name="level1" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="level2" class="col-sm-3 control-label">Unit Level 2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="level2" name="level2" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="level3" class="col-sm-3 control-label">Unit Level 3</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="level3" name="level3" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="wilayah_kerja" class="col-sm-3 control-label">Wilayah Kerja</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="wilayah_kerja" id="wilayah_kerja" style="width: 100%;" required>
                                            <option selected="selected" value=""> -- Pilih Asman -- </option>
                                            <option value="Asman Sumut 1">Asman Sumut 1</option>
                                            <option value="Asman Sumut 2">Asman Sumut 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-center">

                                <a href="<?php echo base_url(); ?>admin/unit_view" class="btn btn-danger">Kembali</a>
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