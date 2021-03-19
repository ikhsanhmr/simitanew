<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kontrak Jaringan Icon+
            <small>Add Data</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Add Kontrak Jaringan Icon+</li>
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
                    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_data_network_add" enctype="multipart/form-data">

                        <div class="box-header with-border">
                            <h3 class="box-title">Add Data</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="tanggal_aktivasi" class="col-sm-3 control-label">Tanggal Aktivasi</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control" id="tanggal_aktivasi" name="tanggal_aktivasi" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="service_id" class="col-sm-3 control-label">Service ID</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="service_id" name="service_id" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="service" class="col-sm-3 control-label">Service</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="service" id="service" style="width: 100%;" required>
                                            <option selected="selected" value=""> -- Pilih Service -- </option>
                                            <option value="IPVPN">IPVPN</option>
                                            <option value="Metronet">Metronet</option>
                                            <option value="VSAT IP">VSAT IP</option>
                                            <option value="Clear Channel">Clear Channel</option>
                                            <option value="Internet">Internet</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="asman" class="col-sm-3 control-label">Asman</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="asman" id="asman" style="width: 100%;" onchange="namaunitnya()" required>
                                            <option selected="selected" value=""> -- Pilih Asman -- </option>
                                            <option value="1">Asman Sumut 1</option>
                                            <option value="2">Asman Sumut 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10" id="toggleText1" style="display: none;">
                                <div class="form-group">
                                    <label for="id_unit1" class="col-sm-3 control-label">Nama Unit</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="id_unit1" id="id_unit1" style="width: 100%;">
                                            <option selected="selected" value=" "> -- Pilih Unit -- </option>
                                            <?php foreach ($list_unit_sumut1->result_array() as $data) { ?>
                                                <option value="<?php echo $data['id_unit_level3']; ?>"><?php echo $data['nama_unit_level3']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10" id="toggleText2" style="display: none;">
                                <div class="form-group">
                                    <label for="id_unit2" class="col-sm-3 control-label">Nama Unit</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="id_unit2" id="id_unit2" style="width: 100%;">
                                            <option selected="selected" value=""> -- Pilih Unit -- </option>
                                            <?php foreach ($list_unit_sumut2->result_array() as $data) { ?>
                                                <option value="<?php echo $data['id_unit_level3']; ?>"><?php echo $data['nama_unit_level3']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                                    <div class="col-sm-5">
                                        <textarea id="keterangan" name="keterangan" rows="5" cols="50" maxlength="1000" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="no_aktivasi" class="col-sm-3 control-label">No BA Aktivasi/ADM</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="no_aktivasi" name="no_aktivasi" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="scada" class="col-sm-3 control-label">Scada</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="scada" id="scada" style="width: 100%;" required>
                                            <option selected="selected" value=""> -- Pilih Scada -- </option>
                                            <option value="1">Scada</option>
                                            <option value="0">Non Scada</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="kapasitas" class="col-sm-3 control-label">Kapasitas /BW</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="kapasitas" name="kapasitas" required />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="harga" class="col-sm-3 control-label">Harga</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="harga" name="harga" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="status" class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="status" id="status" style="width: 100%;" required>
                                            <option selected="selected" value=""> -- Pilih Status -- </option>
                                            <option value="active">Active</option>
                                            <option value="deactivated">Deactivated</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="bulan" class="col-sm-3 control-label">Periode Bulan</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="bulan" id="bulan" style="width: 100%;" required>
                                            <option selected="selected" value=""> -- Pilih Bulan -- </option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="tahun" class="col-sm-3 control-label">Periode Tahun</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="tahun" id="tahun" style="width: 100%;" required>
                                            <option selected="selected" value=""> -- Pilih Tahun -- </option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" class="form-control" id="nomorasman" name="nomorasman" value="" />
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-center">

                                <a href="<?php echo base_url(); ?>admin/data_network_view" class="btn btn-danger">Kembali</a>
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