 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Kategori Gangguan Perangkat
       <small>Manage Kategori Gangguan Perangkat</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Admin</a></li>
       <li class="active">Manage Kategori Gangguan Perangkat</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <?= $this->session->flashdata('pesan'); ?>

     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Kategori Gangguan Perangkat</h3>
           </div>
           <!-- /.box-header -->

           <div class="box-body">
            <table id="table_kategori_gangguan_perangkat" class="table table-bordered table-striped">
               <thead>
                 <tr>
                   <th class="center">No.</th>
                   <th class="text-center">Kategori Gangguan Perangkat</th>
                   <th class="text-center">Actions</th>
                 </tr>
               </thead>

               <tbody>
               
                </tbody>

           </table>
           <div class="row">
             <div id="default-buttons" class="col-sm-6">
               <a class="btn btn-primary" href="<?php echo site_url('admin/kategori_gangguan_perangkat_add'); ?>">Add Data</a>
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