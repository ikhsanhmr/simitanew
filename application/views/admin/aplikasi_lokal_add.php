 <div class="content-wrapper">

     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Admin
             <small>Add Aplikasi Lokal</small>
         </h1>
         <ol class="breadcrumb">
             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             <li><a href="#">Admin</a></li>
             <li class="active">Add Aplikasi Lokal</li>
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
                     <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_aplikasi_lokal_add" enctype="multipart/form-data">

                         <div class="box-header with-border">
                             <h3 class="box-title">Add Aplikasi Lokal</h3>
                         </div>
                         <div class="box-body">
                             <div class="col-lg-10">
                                 <div class="form-group">
                                     <label for="nama_aplikasi" class="col-sm-3 control-label">Nama Aplikasi</label>
                                     <div class="col-sm-5">
                                         <input type="text" class="form-control" id="nama_aplikasi" name="nama_aplikasi" placeholder="Input Nama Aplikasi.." required />
                                     </div>
                                 </div>
                             </div>
                             <br><br><br>
                             <div class="col-lg-10">
                                 <div class="form-group">
                                     <label for="link_aplikasi" class="col-sm-3 control-label">Link Aplikasi</label>
                                     <div class="col-sm-5">
                                         <input type="text" class="form-control" id="link_aplikasi" name="link_aplikasi" placeholder="Input Link Aplikasi.." required />
                                     </div>
                                 </div>
                             </div>
                             <br><br><br>
                             <div class="col-lg-10">
                                 <div class="form-group">
                                     <label for="username" class="col-sm-3 control-label">Username Database</label>
                                     <div class="col-sm-5">
                                         <input type="text" class="form-control" id="username" name="username" placeholder="Input Username Database.." required />
                                     </div>
                                 </div>
                             </div>
                             <br><br><br>
                             <div class="col-lg-10">
                                 <div class="form-group">
                                     <label for="password" class="col-sm-3 control-label">Password Database</label>
                                     <div class="col-sm-5">
                                         <input type="text" class="form-control" id="password" name="password" placeholder="Input Password Database.." required />
                                     </div>
                                 </div>
                             </div>
                             <br><br><br>
                             <div class="col-lg-10">
                                 <div class="form-group">
                                     <label for="jenis_database" class="col-sm-3 control-label">Jenis Database</label>
                                     <div class="col-sm-5">
                                         <input type="text" class="form-control" id="jenis_database" name="jenis_database" placeholder="Input Jenis Database.." required />
                                     </div>
                                 </div>
                             </div>
                             <br><br><br>
                             <div class="col-lg-10">
                                 <div class="form-group">
                                     <label for="kantor_induk" class="col-sm-3 control-label">Kantor Induk</label>
                                     <div class="col-sm-5">
                                         <select class="form-control select2" id="kantor_induk" name="kantor_induk" style="width: 100%;">
                                             <option selected="selected" value=""> -- Pilih Kantor Induk -- </option>
                                             <?php
                                                foreach ($hasil as $value) {
                                                    echo "<option value='$value->id_kantor_induk'>$value->nama_kantor_induk</option>";
                                                }
                                                ?>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-10">
                                 <div class="form-group">
                                     <label for="unit_level2" class="col-sm-3 control-label">Unit Level 2</label>
                                     <div class="col-sm-5">
                                         <select class="form-control select2" name="unit_level2" id="unit_level2" style="width: 100%;">
                                             <option selected="selected" value=""> -- Pilih Unit Level 2 -- </option>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-10">
                                 <div class="form-group">
                                     <label for="unit_level3" class="col-sm-3 control-label">Unit Level 3</label>
                                     <div class="col-sm-5">
                                         <select class="form-control select2" name="unit_level3" id="unit_level3" style="width: 100%;">
                                             <option selected="selected" value=""> -- Pilih Unit Level 3 -- </option>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- /.box-body -->
                         <div class="box-footer">
                             <div class="pull-center">

                                 <a href="<?php echo base_url(); ?>admin/aplikasi_lokal_view" class="btn btn-danger">Kembali</a>
                                 <button type="reset" class="btn btn-warning">Ulangi</button>
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