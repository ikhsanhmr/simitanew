 <div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Laporan
       <small>Add Data</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i>Master Data</a></li>
       <li><a href="#">Laporan Kerusakan</a></li>
       <li class="active">Add Data</li>
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
           <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>laporan/action_addData" enctype="multipart/form-data">

             <div class="box-header with-border">
               <h3 class="box-title">Add Data</h3>
             </div>
             <div class="box-body">
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="nama" class="col-sm-3 control-label">Nama Item</label>
                   <div class="col-sm-5">
                     <select class="form-control select2" id="inventory" name="nama_item" style="width: 100%;">
                       <option selected="selected"> -- Pilih Inventory -- </option>
                       <option value="Laptop" id="laptop" data-laptop="laptop">Laptop</option>
                       <option value="PC/Komputer" data-komputer="komputer">PC / Komputer</option>
                       <option value="Monitor">Monitor</option>
                       <option value="Aplikasi Lokal">Aplikasi Lokal</option>
                       <option value="Server">Server</option>
                       <option value="Network Device" data-network="network">Network Device</option>
                       <option value="Video Conference">Video Conference</option>
                     </select>
                   </div>
                 </div>
               </div>
               <div class="col-lg-10" id="inventoryGet">
                 <div class="form-group">
                   <label for="nama" class="col-sm-3 control-label">Inventory</label>
                   <div class="col-sm-5">
                     <select class="form-control select2" id="getInventory" name="getInventory" style="width: 100%;">
                       <option selected="selected"> -- Pilih Inventory Item Dahulu -- </option>
                     </select>
                   </div>
                 </div>
               </div>

               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="no_hp" class="col-sm-3 control-label">Kondisi</label>
                   <div class="col-sm-5">
                     <select class="form-control select2" id="kondisi_item" name="kondisi_item" style="width: 100%">
                       <option selected="selected"> -- Pilih Kondisi -- </option>
                       <?php foreach ($kondisi as $kon) : ?>
                         <option value="<?php echo $kon['id_kategori'] ?>"><?= $kon['kategori']; ?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="no_hp" class="col-sm-3 control-label">Tanggal</label>
                   <div class="col-sm-5">
                     <input type="date" class="form-control" id="tanggal_pelaporan" name="tanggal_pelaporan" />

                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="no_hp" class="col-sm-3 control-label">Nama Pengguna</label>
                   <div class="col-sm-5">
                     <select class="form-control select2" id="pengguna" name="pengguna" style="width: 100%;">
                       <option selected="selected" value=""> -- Pilih Pengguna -- </option>
                       <?php
                        foreach ($pegawainya as $value) { ?>
                         <option value="<?php echo $value['nama']; ?>"><?php echo $value['nama']; ?></option>
                       <?php }
                        ?>
                     </select>
                   </div>
                 </div>
               </div>



             </div>
             <!-- /.box-body -->
             <div class="box-footer">
               <div class="pull-center">

                 <a href="<?php echo base_url(); ?>laporan/getLaporan" class="btn btn-danger">Kembali</a>
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