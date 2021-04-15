 <div class="content-wrapper">

     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Admin
             <small>Add Komputer</small>
         </h1>
         <ol class="breadcrumb">
             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             <li><a href="#">Admin</a></li>
             <li class="active">Add Komputer</li>
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
                     <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_komputer_add" enctype="multipart/form-data">

                         <div class="box-header with-border">
                             <h3 class="box-title">Add Komputer</h3>
                         </div>
                         <div class="box-body">
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="id_merek" class="col-sm-3 control-label">Merk Komputer</label>
                                     <div class="col-sm-9">
                                         <select class="form-control select2" name="id_merek" style="width: 100%;">

                                             <option selected="selected"> -- Pilih Merek -- </option>
                                             <?php foreach ($list_merek_komputer->result_array() as $data) { ?>
                                                 <option value="<?php echo $data['id_merek']; ?>"><?php echo $data['merek']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="spesifikasi" class="col-sm-3 control-label">Spesifikasi</label>
                                     <div class="col-sm-9">
                                         <textarea class="form-control" id="spesifikasi" name="spesifikasi" rows="3" placeholder="Input Spesifikasi." required>Prosesor :	 
RAM : 	 
Hardisk :	
								 </textarea>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="nama_pengguna" class="col-sm-3 control-label">Pengguna</label>
                                     <div class="col-sm-9">
                                         <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Input Nama Pengguna.." required />
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="nama_komputer" class="col-sm-3 control-label">Nama Komputer</label>
                                     <div class="col-sm-9">
                                         <input type="text" class="form-control" id="nama_komputer" name="nama_komputer" required />
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="serial_number" class="col-sm-3 control-label">Serial Number</label>
                                     <div class="col-sm-9">
                                         <input type="text" class="form-control" id="serial_number" name="serial_number" required />
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">

                                     <label for="ip_address" class="col-sm-3 control-label">IP Address</label>
                                     <div class="col-sm-9">
                                         <div class="input-group">
                                             <div class="input-group-addon">
                                                 <i class="fa fa-komputer"></i>
                                             </div>
                                             <input type="text" id="ip_address" name="ip_address" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                         </div>
                                     </div>
                                 </div>

                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="kantor_induk" class="col-sm-3 control-label">Kantor Induk</label>
                                     <div class="col-sm-9">
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
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="unit_level2" class="col-sm-3 control-label">Unit Level 2</label>
                                     <div class="col-sm-9">
                                         <select class="form-control select2" name="unit_level2" id="unit_level2" style="width: 100%;">
                                             <option selected="selected" value=""> -- Pilih Unit Level 2 -- </option>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="unit_level3" class="col-sm-3 control-label">Unit Level 3</label>
                                     <div class="col-sm-9">
                                         <select class="form-control select2" name="unit_level3" id="unit_level3" style="width: 100%;">
                                             <option selected="selected" value=""> -- Pilih Unit Level 3 -- </option>
                                         </select>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="status_kepemilikan" class="col-sm-3 control-label">Status Aset</label>
                                     <div class="col-sm-9">
                                         <select class="form-control select2" name="status_kepemilikan" id="status_kepemilikan" style="width: 100%;" onchange="statusnya()">

                                             <option selected="selected"> -- Pilih Status -- </option>
                                             <option value="Aset PLN">Aset PLN</option>
                                             <option value="Sewa">Sewa</option>

                                         </select>
                                     </div>
                                 </div>
                             </div>


                             <div class="col-sm-6" id="toggleText" style="display: none;">
                                 <div class="form-group">
                                     <label for="id_vendor" class="col-sm-3 control-label">Vendor</label>
                                     <div class="col-sm-9">
                                         <select class="form-control select2" name="id_vendor" id="id_vendor" style="width: 100%;">

                                             <option selected="selected" value="0"> -- Pilih Vendor -- </option>
                                             <?php foreach ($list_vendor->result_array() as $data) { ?>
                                                 <option value="<?php echo $data['id_vendor']; ?>"><?php echo $data['nama_vendor']; ?></option>
                                             <?php
                                                }
                                                ?>

                                         </select>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="tahun" class="col-sm-3 control-label">Tahun</label>
                                     <div class="col-sm-9">
                                         <select class="form-control select2" name="tahun" id="tahun" style="width: 100%;">

                                             <option selected="selected"> -- Pilih Tahun -- </option>
                                             <option value="2010">2010</option>
                                             <option value="2011">2011</option>
                                             <option value="2012">2012</option>
                                             <option value="2013">2013</option>
                                             <option value="2014">2014</option>
                                             <option value="2015">2015</option>
                                             <option value="2016">2016</option>
                                             <option value="2017">2017</option>
                                             <option value="2018">2018</option>
                                             <option value="2019">2019</option>
                                             <option value="2020">2020</option>

                                         </select>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="sistem_operasi" class="col-sm-3 control-label">Sistem Operasi</label>
                                     <div class="col-sm-9">
                                         <input type="text" class="form-control" id="sistem_operasi" name="sistem_operasi" required placeholder="Masukan Sistem Operasi..." />
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="office" class="col-sm-3 control-label">Office</label>
                                     <div class="col-sm-9">
                                         <input type="text" class="form-control" id="office" name="office" required placeholder="Masukan jenis office..." />
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="status_jd" class="col-sm-3 control-label">Status Join Domain(JD)</label>
                                     <div class="col-sm-9">
                                         <select class="form-control select2" name="status_jd" id="status_jd" style="width: 100%;">
                                             <option selected="selected"> -- Pilih Status JD -- </option>
                                             <option value="1">Ya</option>
                                             <option value="0">Tidak</option>
                                         </select>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="kes" class="col-sm-3 control-label">Jenis antivirus KES</label>
                                     <div class="col-sm-9">
                                         <input type="text" class="form-control" id="kes" name="kes" required placeholder="Masukan jenis antivirus..." />
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="mouse" class="col-sm-3 control-label">Mouse</label>
                                     <div class="col-sm-9">
                                         <input type="text" class="form-control" id="mouse" name="mouse" required placeholder="Masukan nama mouse..." />
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="keyboard" class="col-sm-3 control-label">Keyboard</label>
                                     <div class="col-sm-9">
                                         <input type="text" class="form-control" id="keyboard" name="keyboard" required placeholder="Masukan nama keyboard..." />
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="monitor" class="col-sm-3 control-label">Monitor</label>
                                     <div class="col-sm-9">
                                         <input type="text" class="form-control" id="monitor" name="monitor" required placeholder="Masukan nama monitor..." />
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="tgl_kontrak" class="col-sm-3 control-label">Tanggal Kontrak</label>
                                     <div class="col-sm-9">
                                         <input type="date" class="form-control" id="tgl_kontrak" name="tgl_kontrak" required />
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="harga_sewa" class="col-sm-3 control-label">Harga Sewa</label>
                                     <div class="col-sm-9">
                                         <input type="number" step="1000" min="1000" class="form-control" id="harga_sewa" name="harga_sewa" required />
                                     </div>
                                 </div>
                             </div>


                         </div>
                         <!-- /.box-body -->
                         <div class="box-footer">
                             <div class="pull-center">

                                 <a href="<?php echo base_url(); ?>admin/komputer_view" class="btn btn-danger">Kembali</a>
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