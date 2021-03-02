
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admin
            <small>Edit Unit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Edit Unit</li>
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_unit_edit?data_id=<?php echo $unitnya['id_unit_level3']; ?>" enctype="multipart/form-data">

                    <input type="hidden" id="id_unit_level3" name="id_unit_level3" value="<?php echo $unitnya['id_unit_level3']; ?>">
                    <input type="hidden" id="id_unit_level2" name="id_unit_level2" value="<?php echo $unitnya['id_unit_level2']; ?>">
                    <input type="hidden" id="id_kantor_induk" name="id_kantor_induk" value="<?php echo $unitnya['id_kantor_induk']; ?>">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Unit</h3>
                    </div>
                    <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_kantor_induk" class="col-sm-3 control-label">Kantor Induk</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_kantor_induk" name="nama_kantor_induk" value="<?php echo $unitnya['nama_kantor_induk']; ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_unit_level2" class="col-sm-3 control-label">Unit Level 2</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_unit_level2" name="nama_unit_level2" value="<?php echo $unitnya['nama_unit_level2']; ?>"required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_unit_level3" class="col-sm-3 control-label">Unit Level 3</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_unit_level3" name="nama_unit_level3" value="<?php echo $unitnya['nama_unit_level3']; ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="wilayah_kerja" class="col-sm-3 control-label">Wilayah Kerja</label>
                                <div class="col-sm-5">
                                    <select class="form-control select2" name="wilayah_kerja" id="wilayah_kerja" style="width: 100%;" required>
                                        <option value="<?php echo $unitnya['wilayah_kerja']; ?>" selected="selected">
                                            Asman Sumut <?php echo $unitnya['wilayah_kerja']; ?></option>
                                            <option value=""> -- Pilih Asman -- </option>
                                            <option value="1">Asman Sumut 1</option>
                                            <option value="2">Asman Sumut 2</option>
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