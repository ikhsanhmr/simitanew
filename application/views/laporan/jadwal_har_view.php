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
           <table>
             <tbody>
               <tr>
                 <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>laporan/jadwal_har_filter" enctype="multipart/form-data">
                  <td style="padding-right:10px; padding-top:10px">
                   <div class="form-group">
                     <select class="form-control select2" name="filter_petugas" id="filter_petugas" style="width: 100%;">
                       <?php if (!empty($petugas)){ 
                        foreach($pegawainya as $pegawai) { 
                          if($pegawai['pegawai_id'] == $petugas) { ?>
                            <option value="<?php echo $pegawai['pegawai_id']; ?>" selected="selected"><?php echo $pegawai['nama']; ?></option>
                          <?php } } ?>
                          <option value=""> -- Pilih Pegawai -- </option>
                        <?php } else { ?>
                         <option selected="selected" value=""> -- Pilih Pegawai -- </option>
                         <?php } foreach ($pegawainya as $value){ ?>
                          <option value="<?php echo $value['pegawai_id']; ?>"><?php echo $value['nama']; ?></option>
                        <?php }  ?>
                      </select>
                    </div>
                  </td>
                  <td style="padding-right:10px; padding-top:10px">
                   <div class="form-group">
                     <select class="form-control select2" name="filter_year" id="filter_year" style="width: 100%;">
                       <?php if (!empty($year)){ ?>
                         <option value="<?php echo $year; ?>" selected="selected"><?php echo $year; ?></option>
                         <option value=""> -- Pilih Tahun -- </option>
                       <?php } else { ?>
                         <option value=""> -- Pilih Tahun -- </option>
                       <?php } ?>
                       <option value="2021">2021</option>
                       <option value="2022">2022</option>
                       <option value="2023">2023</option>
                       <option value="2024">2024</option>
                       <option value="2025">2025</option>
                     </select>
                   </div>
                 </td>
                 <td style="padding-right:10px; padding-top:10px">
                   <div class="form-group">
                     <select class="form-control select2" name="filter_month" id="filter_month" style="width: 100%;">
                       <?php if (!empty($month) && !empty($monthname)) { ?>
                         <option value="<?php echo $month; ?>" selected="selected"><?php echo $monthname; ?></option>
                         <option value=""> -- Pilih Bulan -- </option>
                       <?php } else { ?>
                         <option value=""> -- Pilih Bulan -- </option>
                       <?php } ?>
                       <option value="1">Januari</option>
                       <option value="2">Februari</option>
                       <option value="3">Maret</option>
                       <option value="4">April</option>
                       <option value="5">Mei</option>
                       <option value="6">Juni</option>
                       <option value="7">Juli</option>
                       <option value="8">Agustus</option>
                       <option value="9">September</option>
                       <option value="10">Oktober</option>
                       <option value="11">November</option>
                       <option value="12">Desember</option>
                     </select>
                   </div>
                 </td>
                 <td><button type="submit" class="btn btn-sm btn-primary">Filter</button></td>
                 <td><a class="btn btn-sm btn-default" href="<?php echo base_url() . "laporan/jadwal_har_view" ?>">Reset</a></td>
               </form>
             </tr>
           </tbody>
         </table>
         <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="center">No.</th>
              <th class="text-center">Tanggal Pergi</th>
              <th class="text-center">Tanggal Pulang</th>
              <th class="text-center">Petugas</th>
              <th class="text-center">Unit Level 2 Tujuan</th>
              <th class="text-center">Unit Level 3 Tujuan</th>
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
                <?php foreach($pegawainya as $p){
                  if($p['pegawai_id'] == $jadwal['petugas']) { ?>
                    <td class="text-center"><?= $p['nama'] ?></td>
                  <?php }} foreach($unitnya->result_array() as $unit){
                    if($jadwal['tujuan_level2'] == $unit['id_unit_level2'] && $jadwal['tujuan_level3'] == $unit['id_unit_level3']) {?>
                      <td class="text-center"><?php echo $unit['nama_unit_level2']; ?> </td>
                      <td class="text-center"><?php echo $unit['nama_unit_level3']; ?> </td>
                    <?php } }?>
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