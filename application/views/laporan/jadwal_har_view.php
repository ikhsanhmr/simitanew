 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
        Laporan
        <small>Manage Jadwal HAR</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Master Data</a></li>
        <li><a href="#">Data HAR</a></li>
        <li class='active'><a href="#">Jadwal HAR</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <?= $this->session->flashdata('pesan'); ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Jadwal HAR</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="center">No.</th>
                    <th class="text-center">Tanggal Pergi</th>
                    <th class="text-center">Tanggal Pulang</th>
                    <th class="text-center">Petugas</th>
                    <th class="text-center">Lokasi Tujuan</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  foreach ($jadwal_harnya->result_array() as $jadwal):
                  ?>
                    <tr>
                      <td class="text-center"><?= $no ?></td>
                      <td class="text-center"><?= date_format(new DateTime($jadwal['tanggal_pergi']), 'd/m/Y'); ?></td>
                      <td class="text-center"><?= date_format(new DateTime($jadwal['tanggal_pulang']), 'd/m/Y'); ?></td>
                      <td class="text-center"><?= $jadwal['petugas'] ?></td>
                      <td class="text-center"><?php foreach($unitnya->result_array() as $unit){
                        if($jadwal['lokasi_tujuan'] == $unit['id_unit']){
                          echo $unit['level3'];
                        }
                      }?></td>
                     <td class="text-center">
                       <div class="hidden-sm hidden-xs action-buttons">
                         <a class="green" value="<?php echo $jadwal['id_jadwal']; ?>" href="<?php echo base_url() . "laporan/jadwal_har_edit?data_id=" . $jadwal['id_jadwal'] ?>"><i class="fa fa-pencil bigger-130"></i></a>
                         &nbsp;
                         <a class="red" value="<?php echo $jadwal['id_jadwal']; ?>" href="<?php echo base_url() . "laporan/jadwal_har_delete?data_id=" . $jadwal['id_jadwal'] ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">
                           <i class="fa fa-trash-o bigger-130"></i>
                         </a>
                       </div>
                     </td>
                   </tr>
                 <?php
                 $no++;
               endforeach;
               ?>

             </tbody>

           </table>
           <div class="row">
             <div id="default-buttons" class="col-sm-6">
               <a class="btn btn-primary" href="<?php echo site_url('laporan/jadwal_har_add'); ?>">Add Data</a>
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