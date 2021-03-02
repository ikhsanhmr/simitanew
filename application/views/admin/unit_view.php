 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Admin
      <small>Manage Unit</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Admin</a></li>
      <li class="active">Manage Unit</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Unit Data</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                 <th class="center">No.</th>
                 <th>Kantor Induk</th>
                 <th>Unit Level 2</th>
                 <th>Unit Level 3</th>
                 <th>Wilayah Kerja</th>
                 <th>Actions</th>
               </tr>
             </thead>
             <tbody>
              <?php 
              $no =1;
              foreach ($unit_view->result_array() as $data) { ?>
                <tr>
                 <td class="center"><?php echo $no; ?></td>
                 <td><?php echo $data['nama_kantor_induk']; ?></td>
                 <td><?php echo $data['nama_unit_level2']; ?></td>
                 <td><?php echo $data['nama_unit_level3']; ?></td>
                 <td>Asman Sumut <?php echo $data['wilayah_kerja']; ?></td>
                 <td>
                   <div class="hidden-sm hidden-xs action-buttons">
                    <a class="green" value="<?php echo $data['id_unit_level3']; ?>" href="<?php echo base_url() . "admin/unit_edit?id_unit=".$data['id_unit_level3']?>"><i class="fa fa-pencil bigger-130"></i></a>
                    &nbsp;
                    <a class="red" value="<?php echo $data['id_unit_level3']; ?>"  href="<?php echo base_url() . "admin/unit_delete?id_unit=".$data['id_unit_level3']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" ><i class="fa fa-trash-o bigger-130"></i></a>
                  </div>
                </td>
              </tr>
              <?php $no++;}?>
          </tbody>

        </table>
        <div class="row">
          <div id="default-buttons" class="col-sm-6">
            <a class="btn btn-primary" href="<?php echo site_url('admin/unit_add'); ?>">Add Unit</a>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

