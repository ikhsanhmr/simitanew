
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Edit Vicon</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Edit Vicon</li>
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
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_vicon_edit?id_vicon=<?php echo $viconnya['id_vicon']; ?>" enctype="multipart/form-data">
				
				 <input type="hidden" name="id_vicon" value="<?php echo $viconnya['id_vicon']; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Edit vicon</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="id_merek" class="col-sm-3 control-label">Merk Vicon</label>
                                <div class="col-sm-5">
								  <select class="form-control select2" id="id_merek" name="id_merek" style="width: 100%;"/>	
									<option value="<?php echo $viconnya['id_merek']; ?>" selected="selected"><?php echo $viconnya['nama_mereknya']; ?></option>
										<option> -- Pilih Merek Lain -- </option>
													<?php foreach ($list_merek_vicon->result_array() as $data) { ?>
													<option value="<?php echo $data['id_merek']; ?>"><?php echo $data['merek']; ?></option>
													<?php 
													}
													?>
								</select> </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="type" class="col-sm-3 control-label">Type</label>
                                <div class="col-sm-5">
								  <input type="text" class="form-control" id="type" name="type" value="<?php echo $viconnya['type']; ?>" required/>
                               
                                </div>
                            </div>
                        </div>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="tahun" class="col-sm-3 control-label">Tahun</label>
                                <div class="col-sm-5">
								  <select class="form-control select2" id="tahun" name="tahun" style="width: 100%;"/>	
									<option value="<?php echo $viconnya['tahun']; ?>" selected="selected"><?php echo $viconnya['tahun']; ?></option>
													<option> -- Pilih Tahun -- </option>
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
						<br><br><br>
						
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="no_seri" class="col-sm-3 control-label">No. Seri</label>
                                <div class="col-sm-5">
								  <input type="text" class="form-control" id="no_seri" name="no_seri" value="<?php echo $viconnya['no_seri']; ?>" required/>
                               
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="ip_address" class="col-sm-3 control-label">IP Address</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="ip_address" name="ip_address" value="<?php echo $viconnya['ip_address']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="mac_address" class="col-sm-3 control-label">Mac Address</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="mac_address" name="mac_address" value="<?php echo $viconnya['mac_address']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<?php foreach($unitnya->result_array() as $unitnya){
                            if($viconnya['id_unit'] == $unitnya['id_unit_level3']) {?>
                        <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="kantor_induk" class="col-sm-3 control-label">Kantor Induk</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" id="kantor_induk" name="kantor_induk" style="width: 100%;">
                                            <option value="<?php echo $unitnya['id_kantor_induk']; ?>" selected="selected"><?php echo $unitnya['nama_kantor_induk']; ?></option>
                                            <option value=""> -- Pilih Kantor Induk -- </option>
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
                                        <select class="form-control select2" name="unit_level2" id="unit_level2" style="width: 100%;" >
                                            <option value="<?php echo $unitnya['id_unit_level2']; ?>" selected="selected"><?php echo $unitnya['nama_unit_level2']; ?></option>
                                            <option value=""> -- Pilih Unit Level 2 -- </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="unit_level3" class="col-sm-3 control-label">Unit Level 3</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="unit_level3" id="unit_level3" style="width: 100%;">
                                            <option value="<?php echo $unitnya['id_unit_level3']; ?>" selected="selected"><?php echo $unitnya['nama_unit_level3']; ?></option>
                                            <option value=""> -- Pilih Unit Level 3 -- </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
						<br><br><br>
						
						 
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>admin/vicon_view" class="btn btn-danger">Kembali</a>
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