 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Log Gangguan
       <small>Manage Log Gangguan</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Admin</a></li>
       <li class="active">Manage Log Gangguan</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <?= $this->session->flashdata('pesan'); ?>

     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Log Gangguan</h3>
           </div>
           <!-- /.box-header -->

           <div class="box-body">
             <table>
               <tbody>
                 <tr>
                   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/lgangguan_filter" enctype="multipart/form-data">
                     <td style="padding-right:10px; padding-top:10px">
                       <div class="form-group">
                         <input type="text" id="filter_no_tiket" name="filter_no_tiket" <?php if (!empty($filter_no_tiket)) { ?> value="<?php echo $filter_no_tiket ?>"/>
                       <?php } else { ?>
                         placeholder="Masukkan nomor tiket" value=""/>
                       <?php } ?>
                     </div>
                   </td>
                   <td style="padding-right:10px; padding-top:10px">
                     <div class="form-group">
                       <select class="form-control select2" name="filter_asman" id="filter_asman" style="width: 100%;">
                         <?php if (!empty($filter_asman)){ ?>
                           <option value="<?php echo $filter_asman; ?>" selected="selected">STI Sumut <?php echo $filter_asman; ?></option>
                           <option value=""> -- Pilih Asman -- </option>
                         <?php } else { ?>
                           <option value=""> -- Pilih Asman -- </option>
                         <?php } ?>
                         <option value="1">STI Sumut 1</option>
                         <option value="2">STI Sumut 2</option>
                       </select>
                     </div>
                   </td>
                   <td style="padding-right:10px; padding-top:10px">
                     <div class="form-group">
                       <select class="form-control select2" name="filter_kantor_induk" id="filter_kantor_induk" style="width: 100%;">
                         <?php if (!empty($filter_kantor_induk)){ 
                          foreach ($hasil as $value) {
                            if($value->id_kantor_induk == $filter_kantor_induk) {
                            echo "<option value='$filter_kantor_induk'>$value->nama_kantor_induk</option>";
                          }}
                          ?>?>
                          <option value=""> -- Pilih Kantor Induk -- </option>
                        <?php } else { ?>
                         <option value=""> -- Pilih Kantor Induk -- </option>
                       <?php } ?>
                       <?php
                       foreach ($hasil as $value) {
                        echo "<option value='$value->id_kantor_induk'>$value->nama_kantor_induk</option>";
                      }
                      ?>
                    </select>
                  </div>
                </td>
                <td style="padding-right:10px; padding-top:10px">
                 <div class="form-group">
                   <select class="form-control select2" name="filter_layanan" id="filter_layanan" style="width: 100%;">
                     <?php if (!empty($filter_layanan)){ ?>
                       <option value="<?php echo $filter_layanan; ?>" selected="selected"><?php echo $filter_layanan; ?></option>
                       <option value=""> -- Pilih Layanan -- </option>
                     <?php } else { ?>
                       <option value=""> -- Pilih Layanan -- </option>
                     <?php } ?>
                     <option value="IP VPN">IP VPN</option>
                     <option value="Metronet">Metronet</option>
                     <option value="IP VSAT">IP VSAT</option>
                     <option value="Clear Channel">Clear Channel</option>
                     <option value="Internet Corporate">Internet Corporate</option>
                   </select>
                 </div>
               </td>
               <td style="padding-right:10px; padding-top:10px">
                 <div class="form-group">
                   <select class="form-control select2" name="filter_year" id="filter_year" style="width: 100%;">
                     <?php if (!empty($filter_year)){ ?>
                       <option value="<?php echo $filter_year; ?>" selected="selected"><?php echo $filter_year; ?></option>
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
                     <?php if (!empty($filter_month)) { ?>
                       <option value="<?php echo $filter_month; ?>" selected="selected"><?php echo $filter_month; ?></option>
                       <option value=""> -- Pilih Bulan -- </option>
                     <?php } else { ?>
                       <option value=""> -- Pilih Bulan -- </option>
                     <?php } ?>
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
               </td>
               <td><button type="submit" class="btn btn-sm btn-primary">Filter</button></td>
               <td><a class="btn btn-sm btn-default" href="<?php echo base_url() . "admin/lgangguan_view" ?>">Reset</a></td>
             </form>
           </tr>
         </tbody>
       </table>
       <br />
       <table id="example4" class="table table-bordered table-striped">
         <thead>
           <tr>
             <th class="center">No.</th>
             <th class="text-center">No Tiket</th>
             <th class="text-center">Nama Service</th>
             <th class="text-center">SID</th>
             <th class="text-center">Nama Kantor Induk</th>
             <th class="text-center">Asman</th>
             <th class="text-center">Layanan</th>
             <th class="text-center">Scada</th>
             <th class="text-center">Tiket Open</th>
             <th class="text-center">Tiket Close</th>
             <th class="text-center">Stop Clock</th>
             <th class="text-center">Durasi</th>
             <th class="text-center">Penyebab</th>
             <th class="text-center">Tindakan</th>
             <th class="text-center">Status Tiket</th>
             <th class="text-center">Actions</th>
           </tr>
         </thead>

         <tbody>


     </tbody>

   </table>
   <div class="row">
     <div id="default-buttons" class="col-sm-6">
       <a class="btn btn-primary" href="<?php echo site_url('admin/lgangguan_add'); ?>">Add Data</a>
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