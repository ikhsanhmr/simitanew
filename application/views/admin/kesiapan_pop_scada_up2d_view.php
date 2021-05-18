 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Kesiapan POP SCADA UP2D SUMUT
     </h1>
     <ol class="breadcrumb">
       <li><a href="<?php echo base_url() ?>admin/index"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Admin</a></li>
       <li class="active">Kesiapan POP SCADA UP2D SUMUT</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Kesiapan POP SCADA UP2D SUMUT</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="table-responsive">
               <table id="table_kesiapan_pop_scada_up2d" class="table table-bordered table-striped">
                 <thead>
                   <tr>
                     <th class="center">No.</th>
                     <th>Nama Link</th>
                     <th>Service ID</th>
                     <th>Nama POP</th>
                     <th>POP</th>
                     <th>Beban POP <small>(A)</small></th>
                     <th>Kapasitas Baterai <small>(Ah)</small></th>
                     <th>Katahanan Baterai <small>(per jam)</small></th>
                     <th>Genset</th>
                     <th>Actions</th>
                   </tr>
                 </thead>

                 <tbody>
                 </tbody>

               </table>
             </div>
             <div class="row">
               <div id="default-buttons" class="col-sm-6">
                 <a class="btn btn-primary" href="<?php echo site_url('admin/kesiapan_pop_scada_up2d_add'); ?>">Add Data</a>
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