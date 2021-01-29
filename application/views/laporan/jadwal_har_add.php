<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Laporan
            <small>Add Data Jadwal Har</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Master Data</a></li>
            <li><a href="#">Data HAR</a></li>
            <li class="active">Add Jadwal HAR</li>
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
                    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>laporan/action_jadwal_har_add" enctype="multipart/form-data">

                        <div class="box-header with-border">
                            <h3 class="box-title">Add Data</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="tanggal_pergi" class="col-sm-3 control-label">Tanggal Pergi</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control" id="tanggal_pergi" name="tanggal_pergi" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="tanggal_pulang" class="col-sm-3 control-label">Tanggal Pulang</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control" id="tanggal_pulang" name="tanggal_pulang" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="petugas" class="col-sm-3 control-label">Petugas</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="petugas" name="petugas" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="kantor_induk" class="col-sm-3 control-label">Kantor Induk</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" id="kantor_induk" name="kantor_induk" style="width: 100%;">
                                            <option selected="selected" value=""> -- Pilih Kantor Induk -- </option>
                                            <?php
                                            foreach ($hasil as $value) {
                                                echo "<option value='$value->id_kantor_induk'>$value->nama_kantor_induk</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="unit_level2" class="col-sm-3 control-label">Unit Level 2</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="unit_level2" id="unit_level2" style="width: 100%;" >
                                            <option selected="selected" value=""> -- Pilih Unit Level 2 -- </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="unit_level3" class="col-sm-3 control-label">Unit Level 3</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="unit_level3" id="unit_level3" style="width: 100%;">
                                            <option selected="selected" value=""> -- Pilih Unit Level 3 -- </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-center">

                                <a href="<?php echo base_url(); ?>laporan/jadwal_har_view" class="btn btn-danger">Kembali</a>
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