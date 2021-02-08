 
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
       <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>laporan/addDataHar_action" enctype="multipart/form-data">
            
        <div class="box-header with-border">
          <h3 class="box-title">Formulir HAR</h3>
        </div>
        
        <div class="box-body ">
                  
                    <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="kantor_induk" class="col-sm-3 control-label">Kantor Induk</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" id="kantor_induk" name="kantor_induk" style="width: 100%;">
                                            <option selected="selected" value=""> -- Pilih Unit Level 1 -- </option>
                                            <?php
                                            foreach ($unit as $value) {
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
                      
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label"> Lokasi Pekerjaan</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="lokasi" id="lokasi"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Waktu Pelaksanaan</label>
                            <div class="col-sm-5">
                            <!-- <input class="form-control"type="date" name="waktu_pelaksanaan" id="waktu_pelaksanaan">  -->
                            <select class="form-control select2" name="waktu_pelaksanaan" id="waktu_pelaksanaan">
                         <?php
                        
                         foreach($waktu as $value): ?>

                          <option value="<?php echo $value->id_jadwal;?>">
                          <?php 
                          echo date("d/M/Y", strtotime($value->tanggal_pergi));
                          echo "     -      ";
                          echo date("d/M/Y", strtotime($value->tanggal_pulang));
                          ?>
                           </option>
                            <?php
                         endforeach;
                              ?>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Working Permit</label>
                            <div class="col-sm-5">
                            <input class="form-control" type="file" name="working_permit" id="working_permit"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nama Perangkat</label>
                            <div class="col-sm-5" >
                            <select  class="form-control select2" name="nama_perangkat" id="nama_perangkat"> 
                            <option selected="selected" value=""> -- Pilih  Nama Perangkat -- </option>
                            <?php
                         foreach($network as $value):
                            echo "<option value='$value->device_type'>$value->device_type</option>";
                         endforeach;
                              ?>
                            
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                    <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Type Perangkat</label>
                            <div class="col-sm-5">
                            <select class="form-control select2" name="type" id="type">
                            <option selected="selected" value=""> -- Pilih  Type Perangkat -- </option>
                            </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Serial Number</label>
                            <div class="col-sm-5">
                            <select  class="form-control select2" name="serial_number" id="serial_number"> 
                            <option selected="selected" value=""> -- Pilih Serial Number -- </option>
                            </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Id Address</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="id_address" value = "" id="id_address"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">MAC Address</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="mac_address" value="" id="mac_address"> 
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
                                <input type="radio" name="tampak_fisik" id="tampak_fisik1" value="Normal"  class="tampak_fisik">
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="tampak_fisik" id="tampak_fisik2" value="Ada error" class="tampak_fisik">
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="tampak_fisik" id="tampak_fisik3" value="Rusak" class="tampak_fisik">
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
                                <input type="radio" name="indikator_lampu" id="indikator_lampu1" value="Normal" class="indikator_lampu">
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="indikator_lampu" id="indikator_lampu2" value="Ada error" class="indikator_lampu">
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="indikator_lampu" id="indikator_lampu3" value="Rusak" class="indikator_lampu">
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
                                <input type="radio" name="power_supply" id="power_supply1" value="Normal"  >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="power_supply" id="power_supply2" value="Ada error">
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="power_supply" id="power_supply3" value="Rusak" >
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
                                <input type="radio" name="lan" id="lan1" value="Normal"  >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="lan" id="lan2" value="Ada error">
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="lan" id="lan3" value="Rusak" >
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
                                <input type="radio" name="port" id="port1" value="Normal"  >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="port" id="port2" value="Ada error">
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="port" id="port3" value="Rusak" >
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
                                <input type="radio" name="konfigurasi" id="konfigurasi1" value="Normal"  >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="konfigurasi" id="konfigurasi2" value="Ada error">
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="konfigurasi" id="konfigurasi3" value="Rusak" >
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
                                <input type="radio" name="backup_setting" id="backup_setting1" value="Normal"  >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="backup_setting" id="backup_setting2" value="Ada error">
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="backup_setting" id="backup_setting3" value="Rusak" >
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
                            <label for="no_hp" class="col-sm-3 control-label">Genset</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="genset" id="genset1" value="Normal"  >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="genset" id="genset2" value="Tidak ada">
                                Tidak ada 
                                </label>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">UPS</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="ups" id="ups1" value="Normal"  >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="ups" id="ups2" value="Tidak ada">
                                Tidak ada 
                                </label>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Inverter</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="inverter" id="inverter1" value="Normal"  >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="inverter" id="inverter2" value="Tidak ada">
                                Tidak ada 
                                </label>
                            </div>
                        </div>
                     </div>
                </div>
             

                <div class="box-body">
				   <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Tingkat Kerawanan</label>
							 <div class="col-sm-5" >
                            <select  class="form-control select2" name="tingkat_kerawanan" id="tingkat_kerawanan"> 
                            <option selected="selected" value=""> -- Pilih  Tingkat Kerawanan -- </option>
                            <?php foreach ($kerawanan as $value) : ?>
                                <option value="<?= $value->tingkat_kerawanan ?>" data-solusi="<?= $value->solusi_tingkat_kerawanan ?>"><?= $value->tingkat_kerawanan ?> (<?= $value->status_kerawanan ?>)</option>
                            <?php endforeach; ?>
                               
                            
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Pengawas Pekerjaan</label>

                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="pengawas_pekerjaan" id="pengawas_pekerjaan"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Pelaksana Pekerjaan</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="pelaksana_pekerjaan" id="pelaksana_pekerjaan"> 
                            </div>
                        </div>
                    </div>
              

                <div class="col-lg-10">
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Catatan</label>
                            <div class="col-sm-5">
                            <textarea class="form-control" id="catatan"  name="catatan" rows="3" placeholder="Contoh : Baterai laptop sudah tidak dapat berfungsi dengan baik." ></textarea>
                        </div>
                    </div>
                </div>
                </div>

                <div class="box-body ">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi Sebelum Pengerjaan</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="file" name="foto_sebelum_pengerjaan" id="foto_sebelum_pengerjaan" required> 
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi Saat Pengerjaan</label>
                            <div class="col-sm-5">
                            <input class="form-control" type="file" name="foto_saat_pengerjaan" id="foto_saat_pengerjaan" required> 
                            </div>
                        </div>
                    </div>
               
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi Setelah Pengerjaan</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="file" name="foto_sesudah_pengerjaan" id="foto_sesudah_pengerjaan" required> 
                            </div>
                        </div>
                    </div>
                </div>
               
               <!-- SOLUSI -->
               <!-- PERANGKAT HARDWARE -->
               <input type="hidden" id="solusi_tingkat_kerawanan" name="solusi_tingkat_kerawanan">
               <input class="form-control" type="hidden" value="" name="solusi_tampak_fisik" id="solusi_tampak_fisik" >
               <input class="form-control" type="hidden" value="" name="solusi_indikator_lampu" id="solusi_indikator_lampu" >  
               <input class="form-control" type="hidden" value="" name="solusi_power_supply" id="solusi_power_supply" >  
               <input class="form-control" type="hidden" value="" name="solusi_lan" id="solusi_lan" >  
               <input class="form-control" type="hidden" value="" name="solusi_port" id="solusi_port" >  
               <!-- PERANGKAT SOFTWARE -->
               <input class="form-control" type="hidden" value="" name="solusi_konfigurasi" id="solusi_konfigurasi" > 
               <input class="form-control" type="hidden" value="" name="solusi_backup_setting" id="solusi_backup_setting" > 

               <!-- BACKUP POWER -->
               <input class="form-control" type="hidden" value="" name="solusi_genset" id="solusi_genset" > 
               <input class="form-control" type="hidden" value="" name="solusi_ups" id="solusi_ups" > 
               <input class="form-control" type="hidden" value="" name="solusi_inverter" id="solusi_inverter" > 
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