 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Kategori Gangguan
       <small>Manage Kategori Gangguan</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Admin</a></li>
       <li class="active">Manage Kategori Gangguan</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <?= $this->session->flashdata('pesan'); ?>

     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Kategori Gangguan</h3>
           </div>
           <!-- /.box-header -->

           <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                   <th class="center">No.</th>
                   <th class="text-center">Kategori Gangguan</th>
                   <th class="text-center">Actions</th>
                 </tr>
               </thead>

               <tbody>
                 <?php
                 $no = 1;
                 foreach ($kategori_gangguan_view->result_array() as $data) :?>
                   <tr>
                     <td class="text-center"><?= $no ?></td>
                     <td class="text-center"><?= $data['kategori']; ?></td>
                     <td class="text-center">
                       <div class="hidden-sm hidden-xs action-buttons">
                         <a class="green" value="<?php echo $data['id_kategori']; ?>" href="<?php echo base_url() . "admin/kategori_gangguan_edit?data_id=" . $data['id_kategori'] ?>"><i class="fa fa-pencil bigger-130"></i></a>
                         &nbsp;
                         <a class="red" value="<?php echo $data['id_kategori']; ?>" href="<?php echo base_url() . "admin/kategori_gangguan_delete?data_id=" . $data['id_kategori'] ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">
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
               <a class="btn btn-primary" href="<?php echo site_url('admin/kategori_gangguan_add'); ?>">Add Data</a>
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