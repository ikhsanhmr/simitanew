 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Admin
       <small>Manage Aplikasi Lokal</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Admin</a></li>
       <li class="active">Manage Aplikasi Lokal</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Aplikasi Lokal Data</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="table-responsive">
               <table id="table_lokal" class="table table-bordered table-striped">
                 <thead>
                   <tr>
                     <th class="center">No.</th>
                     <th>Nama Aplikasi</th>
                     <th>Link</th>
                     <th>Username Database</th>
                     <th>Password Database</th>
                     <th>Jenis Database</th>
                     <th>Unit</th>
                     <th>Actions</th>
                   </tr>
                 </thead>

                 </tbody>

               </table>
             </div>
             <div class="row">
               <div id="default-buttons" class="col-sm-6">
                 <a class="btn btn-primary" href="<?php echo site_url('admin/aplikasi_lokal_add'); ?>">Add Aplikasi Lokal</a>
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