 
 <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Laporan 
    <small>Info Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Master Data</a></li>
    <li><a href="#">Laporan Kerusakan</a></li>
    <li class="active">Detail Info</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
     

      <!-- Form Element sizes -->
      <div class="box box-success">
       <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>laporan/editDataHar_action" enctype="multipart/form-data">
            
        <div class="box-header with-border">
          <h3 class="box-title">Formulir HAR</h3>
        </div>
        <input class="form-control"type="hidden" name="id" id="id" value = "<?php echo $laporan['id']; ?>">

        <div class="box-body">
     
                   <div class="col-lg-10">
                    <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Type</label>
                            <div class="col-sm-5">
                            <select class="form-control" name="type" id="type" >
                         <?php
                         
                         foreach($hasil as $value):
                            if($value->device_type ==  $laporan['type']){
                                $select = "selected";
                            }
                            else {
                                $select = "";
                            }
                            echo "<option $select value='$value->device_type'>$value->device_type</option>";
                         endforeach;
                            
                              ?>
                             
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                    <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Level Unit</label>
                            <div class="col-sm-5">
                            <select class="form-control" name="level" id="level">
                             <option  value='level1'>Level 1</option>;
                             <option  value='level2'>Level 2</option>;
                             <option value='level3'>Level 3</option>;
                            </select>
                            </div>
                        </div>
                  </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Id unit</label>
                            <div class="col-sm-5">
                            <select class="form-control" name="id_unit" id="id_unit">
                             
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nama unit</label>
                            <div class="col-sm-5">
                            <select class="form-control" name="nama_unit" id="nama_unit">
                             
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label"> Lokasi</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="lokasi" id="lokasi"
                            value = "<?php echo $laporan['lokasi']; ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Waktu Pelaksanaan</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="date" name="waktu_pelaksanaan" id="waktu_pelaksanaan"
                            value = "<?php echo $laporan['waktu_pelaksanaan']; ?>"> 
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Working Permit</label>
                           
                            <?php
                            
                            if($laporan['working_permit'] != null){?>
                            
                            <div class="col-sm-5">
                                 <input class="form-control" type="file" name="working_permit" id="working_permit">
                                 <a class="form-control" href="<?= base_url(); ?>laporan/downloadFile/<?= $laporan['working_permit']; ?>"><?= $laporan['working_permit'];?></a>
                                 
                             </div>
                           
                             
                           <?php }
                           else { ?>
                           <div class="col-sm-5">
                                <input class="form-control" type="file" name="working_permit" id="working_permit">
                            </div>
                           <?php }
                            ?>
                          
                            
                             
                           
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nama Perangkat</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="nama_perangkat" id="nama_perangkat"
                            value = "<?php echo $laporan['nama_perangkat']; ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Serial Number</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="serial_number" id="serial_number" value = "<?php echo $laporan['serial_number']; ?>"> 
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Id Address</label>
                            <div class="col-sm-5">
                            <input type="text" id="id_address" name="id_address" class="form-control" data-inputmask="'alias': 'ip'" data-mask
                            value = "<?php echo $laporan['id_address']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">MAC Address</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="mac_address"id="mac_address"
                            value = "<?php echo $laporan['mac_address']; ?>"> 
                            </div>
                        </div>
                    </div>
                    </div>

               
                <div class="box-body">
                <div class="col-lg-10">
                     <div class="form-group">
                        <label for="no_hp" class="col-sm-3 control-label">Perangkat Hardware</label>
                     </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Tampak Fisik</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="tampak_fisik" id="tampak_fisik1" value="Normal" <?php if($laporan['tampak_fisik'] == "Normal"){ echo "checked";}?> >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="tampak_fisik" id="tampak_fisik2"  value="Ada error" <?php if($laporan['tampak_fisik'] == 'Ada error'){ echo "checked";}?>>
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" <?php if($laporan['tampak_fisik'] == 'Rusak'){ echo "checked";}?> name="tampak_fisik" id="tampak_fisik3" value="Rusak" >
                                Rusak 
                                </label>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Indikator Lampu</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="indikator_lampu" id="indikator_lampu1" value="Normal" <?php if($laporan['indikator_lampu'] == 'Normal'){ echo "checked";}?> >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="indikator_lampu" id="indikator_lampu2" value="Ada error" <?php if($laporan['indikator_lampu'] == 'Ada error'){ echo "checked";}?>>
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="indikator_lampu" id="indikator_lampu3" value="Rusak" <?php if($laporan['indikator_lampu'] == 'Rusak'){ echo "checked";}?> >
                                Rusak 
                                </label>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Power Supply</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="power_supply" id="power_supply1" value="Normal" <?php if($laporan['power_supply'] == 'Normal'){ echo "checked";}?> >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="power_supply" id="power_supply2" value="Ada error" <?php if($laporan['power_supply'] == 'Ada error'){ echo "checked";}?>>
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="power_supply" id="power_supply3" value="Rusak" <?php if($laporan['power_supply'] == 'Rusak'){ echo "checked";}?>>
                                Rusak 
                                </label>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">LAN</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="lan" id="lan1" value="Normal" <?php if($laporan['lan'] == 'Normal'){ echo "checked";}?> >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="lan" id="lan2" value="Ada error" <?php if($laporan['lan'] == 'Ada error'){ echo "checked";}?>>
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="lan" id="lan3" value="Rusak" <?php if($laporan['lan'] == 'Rusak'){ echo "checked";}?>>
                                Rusak 
                                </label>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Port</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="port" id="port1" value="Normal" <?php if($laporan['port'] == 'Normal'){ echo "checked";}?>>
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="port" id="port2" value="Ada error" <?php if($laporan['port'] == 'Ada error'){ echo "checked";}?>>
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="port" id="port3" value="Rusak"<?php if($laporan['port'] == 'Rusak'){ echo "checked";}?> >
                                Rusak 
                                </label>
                            </div>
                        </div>
                     </div>
                </div>    
                <br>
            
                <div class="box-body">
                    <div class="col-lg-10">
                     <div class="form-group">
                        <label for="no_hp" class="col-sm-3 control-label">Perangkat Software</label>
                     </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Konfigurasi</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="konfigurasi" id="konfigurasi1" value="Normal" <?php if($laporan['konfigurasi'] == 'Normal'){ echo "checked";}?> >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="konfigurasi" id="konfigurasi2" value="Ada error" <?php if($laporan['konfigurasi'] == 'Ada error'){ echo "checked";}?>>
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="konfigurasi" id="konfigurasi3" value="Rusak" <?php if($laporan['konfigurasi'] == 'Rusak'){ echo "checked";}?>>
                                Rusak 
                                </label>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Backup Setting</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="backup_setting" id="backup_setting1" value="Normal" <?php if($laporan['backup_setting'] == 'Normal'){ echo "checked";}?>>
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="backup_setting" id="backup_setting2" value="Ada error" <?php if($laporan['backup_setting'] == 'Ada error'){ echo "checked";}?>>
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="backup_setting" id="backup_setting3" value="Rusak" <?php if($laporan['backup_setting'] == 'Rusak'){ echo "checked";}?> >
                                Rusak 
                                </label>
                            </div>
                        </div>
                     </div>
                     
                     
                    
                </div>
               <br>
                <div class="box-body">
                <div class="col-lg-10">
                     <div class="form-group">
                        <label for="no_hp" class="col-sm-3 control-label">Backup Power</label>
                     </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">GPS</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="gps" id="gps1" value="Normal" <?php if($laporan['gps'] == "Normal"){ echo "checked";}?> >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="gps" id="gps2"  value="Ada error" <?php if($laporan['gps'] == 'Ada error'){ echo "checked";}?>>
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" <?php if($laporan['gps'] == 'Rusak'){ echo "checked";}?> name="gps" id="tampak_fisik3" value="Rusak" >
                                Rusak 
                                </label>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">UPS</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="ups" id="ups1" value="Normal" <?php if($laporan['ups'] == 'Normal'){ echo "checked";}?> >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="ups" id="ups2" value="Ada error" <?php if($laporan['ups'] == 'Ada error'){ echo "checked";}?>>
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="ups" id="ups3" value="Rusak" <?php if($laporan['ups'] == 'Rusak'){ echo "checked";}?> >
                                Rusak 
                                </label>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Inverter</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="inverter" id="inverter1" value="Normal" <?php if($laporan['inverter'] == 'Normal'){ echo "checked";}?>>
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="inverter" id="inverter2" value="Ada error" <?php if($laporan['inverter'] == 'Ada error'){ echo "checked";}?>>
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="inverter" id="inverter3" value="Rusak"<?php if($laporan['inverter'] == 'Rusak'){ echo "checked";}?> >
                                Rusak 
                                </label>
                            </div>
                        </div>
                     </div>
                     </div>
                <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Pengawas Pekerjaan</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="pengawas_pekerjaan" id="pengawas_pekerjaan"
                            value = "<?php echo $laporan['pengawas_pekerjaan']; ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Pelaksana Pekerjaan</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="pelaksana_pekerjaan" id="pelaksana_pekerjaan"
                            value = "<?php echo $laporan['pelaksana_pekerjaan']; ?>"> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi</label>
                            <div class="col-sm-5">
                            <textarea class="form-control" id="catatan"  name="catatan" rows="3" placeholder="Contoh : Baterai laptop sudah tidak dapat berfungsi dengan baik." ><?= $laporan['catatan']?></textarea>
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi Sebelum Pengerjaan</label>
                        </div>
                    </div>
                <div class="col-lg-10">
                    <div class="form-group">
                        <label for="no_hp" class="col-sm-3 control-label"> </label>
                        <div class="col-sm-5">
                        <?php
                      if($laporan['foto_sebelum_pengerjaan'] != null){?>
                         <img src="<?php echo base_url(); ?>public/images/har_network/<?= $laporan['foto_sebelum_pengerjaan'];?>" width="180" height="260" alt=" no images">
                         <br>
                         <br>
                          <input class="form-control" type="file" name="foto_sebelum_pengerjaan" id="foto_sebelum_pengerjaan" > 
                         
                     <?php }
                     else {?>
                            <input class="form-control"type="file" name="foto_sebelum_pengerjaan" id="foto_sebelum_pengerjaan" > 
                    <?php  }
                      ?>
                          
                        </div>
                    </div>
                </div>
              
            </div>
                <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi Saat Pengerjaan</label>
                        </div>
                    </div>
                <div class="col-lg-10">
                    <div class="form-group">
                        <label for="no_hp" class="col-sm-3 control-label"> </label>
                        <div class="col-sm-5">
                        <?php
                      if($laporan['foto_saat_pengerjaan'] != null){?>
                         <img src="<?php echo base_url(); ?>public/images/har_network/<?= $laporan['foto_saat_pengerjaan'];?>" width="180" height="260" alt=" no images">
                         <br>
                         <br>
                          <input class="form-control" type="file" name="foto_saat_pengerjaan" id="foto_saat_pengerjaan" > 
                         
                     <?php }
                     else {?>
                            <input class="form-control"type="file" name="foto_saat_pengerjaan" id="foto_saat_pengerjaan" > 
                    <?php  }
                      ?>
                          
                        </div>
                    </div>
                </div>
                </div>
      
         
                <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi Setelah Pengerjaan</label>
                        </div>
                    </div>
                <div class="col-lg-10">
                    <div class="form-group">
                        <label for="no_hp" class="col-sm-3 control-label"></label>
                        <div class="col-sm-5">
                        <?php
                      if($laporan['foto_sesudah_pengerjaan'] != null){?>
                         <img src="<?php echo base_url(); ?>public/images/har_network/<?= $laporan['foto_sesudah_pengerjaan'];?>" width="180" height="260" alt=" no images">
                         <br>
                         <br>
                         <input class="form-control"type="file" name="foto_sesudah_pengerjaan" id="foto_sesudah_pengerjaan"> 
                     
                           
                     <?php }

                     else {?>
                            <input class="form-control"type="file" name="foto_sesudah_pengerjaan" id="foto_sesudah_pengerjaan"> 
                       
                    <?php  }
                      ?>
                        </div>
                    </div>
                </div>
            </div>
                
        <!-- /.box-body -->
        <div class="box-footer">
                    <div class="pull-center">
                        <a href="<?php echo base_url(); ?>laporan/getDataHar" class="btn btn-danger">Kembali</a>
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