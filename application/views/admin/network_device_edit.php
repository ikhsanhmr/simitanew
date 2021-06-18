<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admin
            <small>Edit Network Device</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Edit Network Device</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->


                <!-- Form Element sizes -->
                <div class="box box-success">
                    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_network_device_edit?id_network_device=<?php echo $network_devicenya['id_network_device']; ?>" enctype="multipart/form-data">

                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="id_network_device" value="<?php echo $network_devicenya['id_network_device']; ?>">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Network Device</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_merek" class="col-md-3 control-label">Merk Network Device</label>
                                        <div class="col-md-8">
                                            <select class="form-control select2" id="id_merek" name="id_merek" style="width: 100%;" />
                                            <option value="<?php echo $network_devicenya['id_merek']; ?>" selected="selected"><?php echo $network_devicenya['nama_mereknya']; ?></option>
                                            <option> -- Pilih Merek Lain -- </option>
                                            <?php foreach ($list_merek_network_device->result_array() as $data) { ?>
                                                <option value="<?php echo $data['id_merek']; ?>"><?php echo $data['merek']; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="device_type" class="col-md-3 control-label">Device Type</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="device_type" name="device_type" value="<?php echo $network_devicenya['device_type']; ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label for="ip_address" class="col-md-3 control-label">IP Address</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-vicon"></i>
                                                </div>
                                                <input type="text" id="ip_address" name="ip_address" class="form-control" data-inputmask="'alias': 'ip'" data-mask value="<?php echo $network_devicenya['ip_address']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username" class="col-md-3 control-label">Username</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $network_devicenya['username']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password" class="col-md-3 control-label">Password</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="password" name="password" value="<?php echo $network_devicenya['password']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_pengguna" class="col-md-3 control-label">Pengguna</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?php echo $network_devicenya['nama_pengguna']; ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <?php foreach ($unitnya->result_array() as $unitnya) {
                                    if ($network_devicenya['id_unit_level3'] == $unitnya['id_unit_level3']) { ?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kantor_induk" class="col-md-3 control-label">Kantor Induk</label>
                                                <div class="col-md-8">
                                                    <select class="form-control select2" id="kantor_induk" name="kantor_induk" style="width: 100%;">
                                                        <option value="<?php echo $unitnya['id_kantor_induk']; ?>" selected="selected"><?php echo $unitnya['nama_kantor_induk']; ?></option>
                                                        <option value=""> -- Pilih Kantor Induk -- </option>
                                                        <?php
                                                        foreach ($hasil as $value) {
                                                            echo "<option value='$value->id_kantor_induk'>$value->nama_kantor_induk</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="unit_level2" class="col-md-3 control-label">Unit Level 2</label>
                                                <div class="col-md-8">
                                                    <select class="form-control select2" name="unit_level2" id="unit_level2" style="width: 100%;">
                                                        <option value="<?php echo $unitnya['id_unit_level2']; ?>" selected="selected"><?php echo $unitnya['nama_unit_level2']; ?></option>
                                                        <option value=""> -- Pilih Unit Level 2 -- </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="unit_level3" class="col-sm-3 control-label">Unit Level 3</label>
                                                <div class="col-md-8">
                                                    <select class="form-control select2" name="unit_level3" id="unit_level3" style="width: 100%;">
                                                        <option value="<?php echo $unitnya['id_unit_level3']; ?>" selected="selected"><?php echo $unitnya['nama_unit_level3']; ?></option>
                                                        <option value=""> -- Pilih Unit Level 3 -- </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status_kepemilikan" class="col-sm-3 control-label">Status Aset</label>
                                        <div class="col-md-8">
                                            <select class="form-control select2" id="status_kepemilikan" name="status_kepemilikan" style="width: 100%;" onchange="statusnya()" />
                                            <option value="<?php echo $network_devicenya['status_kepemilikan']; ?>" selected="selected"><?php echo $network_devicenya['status_kepemilikan']; ?></option>
                                            <option> -- Pilih Status -- </option>
                                            <option value="Aset PLN">Aset PLN</option>
                                            <option value="Sewa">Sewa</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <?php
                                if ($network_devicenya['status_kepemilikan'] == 'Aset PLN') { ?>
                                    <div class="col-md-6" id="toggleText" style="display: none;">
                                        <div class="form-group">
                                            <label for="id_vendor" class="col-sm-3 control-label">Vendor</label>
                                            <div class="col-md-8">
                                                <select class="form-control select2" name="id_vendor" id="id_vendor" style="width: 100%;">

                                                    <option selected="selected"> -- Pilih Vendor -- </option>
                                                    <?php foreach ($list_vendor->result_array() as $data) { ?>
                                                        <option value="<?php echo $data['id_vendor']; ?>"><?php echo $data['nama_vendor']; ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <?php     } else { ?>
                                    <div class="col-md-6" id="toggleText" style="display: block;">
                                        <div class="form-group">
                                            <label for="id_vendor" class="col-md-3 control-label">Vendor</label>
                                            <div class="col-md-8">
                                                <select class="form-control select2" name="id_vendor" id="id_vendor" style="width: 100%;">
                                                    <option value="<?php echo $network_devicenya['id_vendor']; ?>" selected="selected"><?php echo $network_devicenya['nama_vendornya']; ?></option>
                                                    <option> -- Pilih Vendor -- </option>
                                                    <?php foreach ($list_vendor->result_array() as $data) { ?>
                                                        <option value="<?php echo $data['id_vendor']; ?>"><?php echo $data['nama_vendor']; ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tahun" class="col-sm-3 control-label">Tahun</label>
                                        <div class="col-md-8">
                                            <select class="form-control select2" id="tahun" name="tahun" style="width: 100%;" />
                                            <option value="<?php echo $network_devicenya['tahun']; ?>" selected="selected"><?php echo $network_devicenya['tahun']; ?></option>
                                            <option> -- Pilih Tahun -- </option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="box-header col-md-12 with-border">
                                    <h3 class="box-title">Form Inspeksi Peralatan</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Perangkat Hardware</label>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Tampak Fisik</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="tampak_fisik" id="tampak_fisik1" value="Normal" class="tampak_fisik">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="tampak_fisik" id="tampak_fisik2" value="Ada error" class="tampak_fisik">
                                                Ada Error
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="tampak_fisik" id="tampak_fisik3" value="Rusak" class="tampak_fisik">
                                                Rusak
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Indikator Lampu</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="indikator_lampu" id="indikator_lampu1" value="Normal" class="indikator_lampu">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="indikator_lampu" id="indikator_lampu2" value="Ada error" class="indikator_lampu">
                                                Ada Error
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="indikator_lampu" id="indikator_lampu3" value="Rusak" class="indikator_lampu">
                                                Rusak
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Power Supply</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="power_supply" id="power_supply1" value="Normal">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="power_supply" id="power_supply2" value="Ada error">
                                                Ada Error
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="power_supply" id="power_supply3" value="Rusak">
                                                Rusak
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">LAN</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="lan" id="lan1" value="Normal">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="lan" id="lan2" value="Ada error">
                                                Ada Error
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="lan" id="lan3" value="Rusak">
                                                Rusak
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Port</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="port" id="port1" value="Normal">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="port" id="port2" value="Ada error">
                                                Ada Error
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="port" id="port3" value="Rusak">
                                                Rusak
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Perangkat Software</label>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Konfigurasi</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="konfigurasi" id="konfigurasi1" value="Normal">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="konfigurasi" id="konfigurasi2" value="Ada error">
                                                Ada Error
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="konfigurasi" id="konfigurasi3" value="Rusak">
                                                Rusak
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Backup Setting</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="backup_setting" id="backup_setting1" value="Normal">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="backup_setting" id="backup_setting2" value="Ada error">
                                                Ada Error
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="backup_setting" id="backup_setting3" value="Rusak">
                                                Rusak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-3 control-label">Backup Power</label>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-3 control-label">Genset</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="genset" id="genset1" value="Normal">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="genset" id="genset2" value="Tidak ada">
                                                Tidak ada
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-3 control-label">UPS</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="ups" id="ups1" value="Normal">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="ups" id="ups2" value="Tidak ada">
                                                Tidak ada
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-3 control-label">Inverter</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="inverter" id="inverter1" value="Normal">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="inverter" id="inverter2" value="Tidak ada">
                                                Tidak ada
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-3 control-label">Backup POP</label>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="pop" id="pop1" value="Ada">
                                                Ada
                                            </label>
                                        </div>
                                        <div class="radio col-sm-2">
                                            <label>
                                                <input type="radio" name="pop" id="pop2" value="Tidak ada">
                                                Tidak ada
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Tingkat Kerawanan</label>
                                        <div class="col-sm-6">
                                            <select class="form-control select2" name="tingkat_kerawanan" id="tingkat_kerawanan">
                                                <option selected="selected" value=""> -- Pilih Tingkat Kerawanan -- </option>
                                                <?php foreach ($kerawanan as $value) : ?>
                                                    <option value="<?= $value->tingkat_kerawanan ?>" data-solusi="<?= $value->solusi_tingkat_kerawanan ?>"><?= $value->tingkat_kerawanan ?> (<?= $value->status_kerawanan ?>)</option>
                                                <?php endforeach; ?>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Pengawas Pekerjaan</label>

                                        <div class="col-sm-6">
                                            <!-- <input class="form-control"type="text" name="pengawas_pekerjaan" id="pengawas_pekerjaan"> -->
                                            <select class="form-control select2" id="pengawas_pekerjaan" name="pengawas_pekerjaan" style="width: 100%;">
                                                <option selected="selected" value=""> -- Pilih Pengawas -- </option>
                                                <?php
                                                foreach ($pegawainya as $value) { ?>
                                                    <option value="<?php echo $value['nama']; ?>"><?php echo $value['nama']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Pelaksana Pekerjaan</label>
                                        <div class="col-sm-6">
                                            <!-- <input class="form-control"type="text" name="pelaksana_pekerjaan" id="pelaksana_pekerjaan">  -->
                                            <select class="form-control select2" id="pelaksana_pekerjaan" name="pelaksana_pekerjaan" style="width: 100%;">
                                                <option selected="selected" value=""> -- Pilih Pelaksana -- </option>
                                                <?php
                                                foreach ($pegawainya as $value) { ?>
                                                    <option value="<?php echo $value['nama']; ?>"><?php echo $value['nama']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Catatan</label>
                                        <div class="col-sm-6">
                                            <textarea name="catatan" class="form-control" placeholder="Contoh : Baterai laptop sudah tidak dapat berfungsi dengan baik." rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Kondisi Sebelum Pengerjaan</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="file" name="foto_sebelum_pengerjaan" id="foto_sebelum_pengerjaan" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Kondisi Saat Pengerjaan</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="file" name="foto_saat_pengerjaan" id="foto_saat_pengerjaan" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-4 control-label">Kondisi Setelah Pengerjaan</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="file" name="foto_sesudah_pengerjaan" id="foto_sesudah_pengerjaan" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-center">

                                <a href="<?php echo base_url(); ?>admin/network_device_view" class="btn btn-danger">Kembali</a>
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