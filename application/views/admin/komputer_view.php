 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Admin
       <small>Manage Komputer</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Admin</a></li>
       <li class="active">Manage Komputer</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Komputer Data</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="table-responsive">
               <table id="komputer_table" class="table table-bordered table-striped">
                 <thead>
                   <tr>
                     <th class="center">
                       No.
                     </th>
                     <th>Merk Komputer</th>
                     <th>Spesifikasi</th>
                     <th>Pengguna</th>
                     <th>Nama Komputer</th>
                     <th>Serial Number</th>
                     <th>IP Address</th>
                     <th>Unit</th>
                     <th>Status Aset</th>
                     <th>Vendor</th>
                     <th>Tahun</th>
                     <th>Sistem Operasi</th>
                     <th>Office</th>
                     <th>Status Join Domain</th>
                     <th>Kes</th>
                     <th>Mouse</th>
                     <th>Keyboard</th>
                     <th>Monitor</th>
                     <th>Tanggal Kontrak</th>
                     <th>Harga Sewa</th>
                     <th>Actions</th>
                   </tr>
                 </thead>

                 <tbody>

                 </tbody>

               </table>
             </div>
             <div class="row">
               <div id="default-buttons" class="col-sm-6">
                 <a class="btn btn-primary" href="<?php echo site_url('admin/komputer_add'); ?>">Add komputer</a>
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