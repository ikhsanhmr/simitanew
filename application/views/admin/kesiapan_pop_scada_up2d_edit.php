<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kesiapan POP SCADA UP2D SUMUT
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>admin/index"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Admin</a></li>
      <li class="active">Tambah Data Kesiapan POP SCADA UP2D SUMUT</li>
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
          <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_kesiapan_pop_scada_up2d_edit" enctype="multipart/form-data">

            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Kesiapan POP SCADA UP2D SUMUT</h3>
            </div>

            <div class="box-body">
              <div class="col-lg-10">
                <div class="form-group">
                  <label for="nama_link" class="col-sm-3 control-label">Nama Link</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="nama_link" name="nama_link" required value="<?= $data_kesiapan_pop_scada_up2d['nama_link']; ?>" />
                  </div>
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="col-lg-10">
                <div class="form-group">

                  <label for="sid" class="col-sm-3 control-label">Service ID</label>

                  <div class="col-sm-5" id="form-group-service">
                    <select class="mb-2 form-control select2 sid" name="sid" style="width: 100%;">
                      <option value=""> -- Pilih Service -- </option>
                      <?php foreach ($data_network as $value) : ?>
                        <?php if ($value['service_id'] == $data_kesiapan_pop_scada_up2d['sid']) : ?>
                          <option selected="selected" value="<?= $value['service_id'] ?>"><?= $value['service_id']; ?> - <?= $value['service']; ?></option>
                        <?php else : ?>
                          <option value="<?= $value['service_id'] ?>"><?= $value['service_id']; ?> - <?= $value['service']; ?></option>
                        <?php endif ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="col-lg-10">
                <div class="form-group">
                  <label for="nama_pop" class="col-sm-3 control-label">Nama POP</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="nama_pop" name="nama_pop" value="<?= $data_kesiapan_pop_scada_up2d['nama_pop']; ?>" required />
                  </div>
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="col-lg-10">
                <div class="form-group">
                  <label for="pop" class="col-sm-3 control-label">POP</label>
                  <div class="col-sm-5">
                    <select class="mb-2 form-control select2 pop" name="pop" style="width: 100%;">
                      <option value=""> -- Pilih POP -- </option>
                      <option selected="selected" value="<?= $data_kesiapan_pop_scada_up2d['pop']; ?>"><?= $data_kesiapan_pop_scada_up2d['pop']; ?></option>
                      <option value="Redundant">Redundant</option>
                      <option value="Radial">Radial / Non Redundant</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="col-lg-10">
                <div class="form-group">
                  <label for="beban_pop" class="col-sm-3 control-label">Beban POP <small>(A)</small></label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" id="beban_pop" name="beban_pop" required value="<?= $data_kesiapan_pop_scada_up2d['beban_pop']; ?>" />
                  </div>
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="col-lg-10">
                <div class="form-group">
                  <label for="kapasitas_baterai" class="col-sm-3 control-label">Kapasitas Baterai <small>(Ah)</small></label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" id="kapasitas_baterai" name="kapasitas_baterai" required value="<?= $data_kesiapan_pop_scada_up2d['kapasitas_baterai']; ?>" />
                  </div>
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="col-lg-10">
                <div class="form-group">
                  <label for="ketahanan_baterai" class="col-sm-3 control-label">Katahanan Baterai <small>(per Jam)</small></label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" id="ketahanan_baterai" name="ketahanan_baterai" required value="<?= $data_kesiapan_pop_scada_up2d['ketahanan_baterai']; ?>" />
                  </div>
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="col-lg-10">
                <div class="form-group">
                  <label for="genset" class="col-sm-3 control-label">Genset</label>
                  <div class="col-sm-5">
                    <select class="mb-2 form-control select2 genset" name="genset" style="width: 100%;">
                      <option value=""> -- Pilih Status Genset -- </option>
                      <option selected="selected" value="<?= $data_kesiapan_pop_scada_up2d['genset']; ?>"><?= $data_kesiapan_pop_scada_up2d['genset']; ?></option>
                      <option value="Ada Baik">Ada Baik</option>
                      <option value="Tidak ada">Tidak ada</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <input type="hidden" name="id" value="<?= $data_kesiapan_pop_scada_up2d['id']; ?>">
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-center">

                <a href="<?php echo base_url(); ?>admin/kesiapan_pop_scada_up2d_view" class="btn btn-danger">Kembali</a>
                <button type="reset" class="btn btn-warning">Ulangi</button>
                <button type="submit" class="btn btn-success" id="btn-submit-pop-icon">Submit</button>
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