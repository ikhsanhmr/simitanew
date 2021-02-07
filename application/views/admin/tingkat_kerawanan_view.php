 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Tingkat Kerawanan
       <small>Manage Tingkat Kerawnan</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Admin</a></li>
       <li class="active">Manage Tingkat Kerawanan</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <?= $this->session->flashdata('pesan'); ?>

     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Tingkat Kerawanan</h3>
           </div>
           <!-- /.box-header -->

           <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                   <th class="center">No.</th>
                   <th class="text-center">Tingkat </th>
                   <th class="text-center">Status</th>
                   <th class="text-center">Actions</th>
                 </tr>
               </thead>

               <tbody>
                 <?php
                 $no = 1;
                 foreach ($tingkat_kerawanan->result_array() as $data) :?>
                   <tr>
                     <td class="text-center"><?= $no ?></td>
                     <td class="text-center"><?= $data['tingkat_kerawanan']; ?></td>
                     <td class="text-center"><?= $data['status_kerawanan']; ?></td>
                     <td class="text-center">
                       <div class="hidden-sm hidden-xs action-buttons">
                         <a class="green" value="<?php echo $data['id_kerawanan']; ?>" href="<?php echo base_url() . "admin/tingkat_kerawanan_edit?id_kerawanan=" . $data['id_kerawanan'] ?>"><i class="fa fa-pencil bigger-130"></i></a>
                         &nbsp;
                         <a class="red" value="<?php echo $data['id_kerawanan']; ?>" href="<?php echo base_url() . "admin/tingkat_kerawanan_delete?id_kerawanan=" . $data['id_kerawanan'] ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">
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
               <a class="btn btn-primary" href="<?php echo site_url('admin/tingkat_kerawanan_add'); ?>">Add Data</a>
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