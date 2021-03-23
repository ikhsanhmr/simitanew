 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data POP ICON+
     </h1>
     <ol class="breadcrumb">
       <li><a href="<?php echo base_url() ?>admin/index"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Admin</a></li>
       <li class="active">Data POP ICON+</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Data POP ICON+</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="table-responsive">
               <table id="table_pop_icon" class="table table-bordered table-striped">
                 <thead>
                   <tr>
                     <th class="center">No.</th>
                     <th>Nama</th>
                     <th>Lokasi</th>
                     <th>Service</th>
                     <th>Actions</th>
                   </tr>
                 </thead>

                 <tbody>
                 </tbody>

               </table>
             </div>
             <div class="row">
               <div id="default-buttons" class="col-sm-6">
                 <a class="btn btn-primary" href="<?php echo site_url('admin/pop_icon_add'); ?>">Add Data POP ICON+</a>
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