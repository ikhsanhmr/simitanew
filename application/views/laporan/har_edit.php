 
 <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Laporan Inspeksi Peralatan
    <small>Info Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Master Data</a></li>
    <li><a href="#">Laporan Inspeksi Peralatan</a></li>
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
                                    <label for="kantor_induk" class="col-sm-3 control-label">Kantor Induk</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" id="kantor_induk" name="kantor_induk" style="width: 100%;">
                                            
                                            <option  value=""> -- Pilih Kantor Induk -- </option>
                                            <?php
                                            foreach ($unit_induk as $value) {
                                                if($laporan['kantor_induk'] == $value->id_kantor_induk ){
                                                        $select = 'selected';
                                                }
                                                else {
                                                    $select = '';
                                                }
                                                echo "<option $select value='$value->id_kantor_induk'>$value->nama_kantor_induk</option>";
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
                                        <option selected="<?php echo $unit2['id_unit_level2']; ?>" value=""><?php echo $unit2['nama_unit_level2']; ?> </option>
                                            <option  value=""> -- Pilih Unit Level 2 -- </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="unit_level3" class="col-sm-3 control-label">Unit Level 3</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="unit_level3" id="unit_level3" style="width: 100%;">
                                        <option selected="<?php echo $unit3['id_unit_level3']; ?>" value=""><?php echo $unit3['nama_unit_level3']; ?> </option>
                                            <option  value=""> -- Pilih Unit Level 3 -- </option>
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
                            <input class="form-control" value="<?= $laporan['waktu_pelaksanaan'] ?>" type="date" name="waktu_pelaksanaan" id="waktu_pelaksanaan"> 
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
                            <select class="form-control select2" name="nama_perangkat" id="nama_perangkat" >
                         <?php
                         foreach($network as $value):
                            if($value->device_type ==  $laporan['nama_perangkat']){
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
                            <label for="no_hp" class="col-sm-3 control-label">Type Perangkat</label>
                            <div class="col-sm-5">
                            <select class="form-control select2" name="type" id="type">
                            <option selected="selected" value="<?=$laporan['type']?>"><?=$laporan['type']?></option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Serial Number</label>
                            <div class="col-sm-5">
                            <select  class="form-control select2" name="serial_number" id="serial_number"> 
                            <option selected="selected" value="<?=$laporan['serial_number']?>"> <?=$laporan['serial_number']?></option>
                            </select>
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
                            <label for="no_hp" class="col-sm-3 control-label">genset</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="genset" id="genset1" value="Normal" <?php if($laporan['genset'] == "Normal"){ echo "checked";}?> >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="genset" id="genset2"  value="Tidak ada" <?php if($laporan['genset'] == 'Tidak ada'){ echo "checked";}?>>
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
                                <input type="radio" name="ups" id="ups1" value="Normal" <?php if($laporan['ups'] == 'Normal'){ echo "checked";}?> >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="ups" id="ups2" value="Tidak ada" <?php if($laporan['ups'] == 'Tidak ada'){ echo "checked";}?>>
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
                                <input type="radio" name="inverter" id="inverter1" value="Normal" <?php if($laporan['inverter'] == 'Normal'){ echo "checked";}?>>
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="inverter" id="inverter2" value="Tidak ada" <?php if($laporan['inverter'] == 'Tidak ada'){ echo "checked";}?>>
                                Tidak ada 
                                </label>
                            </div>
                            
                        </div>
                     </div>

                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Backup POP</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="pop" id="pop1" value="Ada" <?php if($laporan['pop'] == 'Ada'){ echo "checked";}?>>
                                Ada
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="pop" id="pop2" value="Tidak ada" <?php if($laporan['pop'] == 'Tidak ada'){ echo "checked";}?>>
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
                            <div class="col-sm-5">
                            <select  class="form-control select2" name="tingkat_kerawanan" id="tingkat_kerawanan"> 
                            <option selected="selected" value=""> -- Pilih  Tingkat Kerawanan -- </option>
                            <?php foreach ($kerawanan as $value) : ?>
                            
                            <?php if($laporan["tingkat_kerawanan"] === $value["tingkat_kerawanan"]) : ?>
                                <option value="<?= $value["tingkat_kerawanan"] ?>" selected data-solusi="<?= $value["solusi_tingkat_kerawanan"] ?>"><?= $value["tingkat_kerawanan"] ?> (<?= $value["status_kerawanan"] ?>)</option>
                            <?php else: ?>
                                <option value="<?= $value["tingkat_kerawanan"] ?>" data-solusi="<?= $value["solusi_tingkat_kerawanan"] ?>"><?= $value["tingkat_kerawanan"] ?> (<?= $value["status_kerawanan"] ?>)</option>
                            <?php endif; ?>

                            <?php endforeach; ?>
                               
                            
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Solusi</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="solusi_tingkat_kerawanan" id="solusi_tingkat_kerawanan" value="<?= $laporan["solusi_tingkat_kerawanan"]; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Pengawas Pekerjaan</label>
                            <div class="col-sm-5">
                            <!-- <input class="form-control"type="text" name="pengawas_pekerjaan" id="pengawas_pekerjaan" value = "<?php echo $laporan['pengawas_pekerjaan']; ?>"> -->
                            <select class="form-control select2" id="pengawas_pekerjaan" name="pengawas_pekerjaan" style="width: 100%;">
                                <?php foreach($pegawainya as $p) : ?>
                                    <?php if($laporan['pengawas_pekerjaan'] == $p['nama']) : ?>
                                    <option selected="selected" value="<?php echo $p['nama']; ?>"><?php echo $p['nama']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                                <option value=""> -- Pilih Pengawas -- </option>
                                <?php foreach($pegawainya as $p) : ?>
                                    <option value="<?php echo $p['nama']; ?>"><?php echo $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Pelaksana Pekerjaan</label>
                            <div class="col-sm-5">
                            <!-- <input class="form-control"type="text" name="pelaksana_pekerjaan" id="pelaksana_pekerjaan" value = "<?php echo $laporan['pelaksana_pekerjaan']; ?>"> -->
                            <select class="form-control select2" id="pelaksana_pekerjaan" name="pelaksana_pekerjaan" style="width: 100%;">
                                <?php foreach($pegawainya as $p) : ?>
                                    <?php if($laporan['pelaksana_pekerjaan'] == $p['nama']) : ?>
                                    <option selected="selected" value="<?php echo $p['nama']; ?>"><?php echo $p['nama']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                                <option value=""> -- Pilih Pengawas -- </option>
                                <?php foreach($pegawainya as $p) : ?>
                                    <option value="<?php echo $p['nama']; ?>"><?php echo $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Catatan</label>
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
                
                <!-- SOLUSI -->
               <!-- PERANGKAT HARDWARE -->
               <input class="form-control" type="text" value="<?= $laporan['solusi_tampak_fisik']; ?>" name="solusi_tampak_fisik" id="solusi_tampak_fisik" >
               <input class="form-control" type="hidden" value="<?= $laporan['solusi_indikator_lampu']; ?>" name="solusi_indikator_lampu" id="solusi_indikator_lampu" >  
               <input class="form-control" type="hidden" value="<?= $laporan['solusi_power_supply']; ?>" name="solusi_power_supply" id="solusi_power_supply" >  
               <input class="form-control" type="hidden" value="<?= $laporan['solusi_lan']; ?>" name="solusi_lan" id="solusi_lan" >  
               <input class="form-control" type="hidden" value="<?= $laporan['solusi_port']; ?>" name="solusi_port" id="solusi_port" >  
               <!-- PERANGKAT SOFTWARE -->
               <input class="form-control" type="hidden" value="<?= $laporan['solusi_konfigurasi']; ?>" name="solusi_konfigurasi" id="solusi_konfigurasi" > 
               <input class="form-control" type="hidden" value="<?= $laporan['solusi_backup_setting']; ?>" name="solusi_backup_setting" id="solusi_backup_setting" > 

               <!-- BACKUP POWER -->
               <input class="form-control" type="hidden" value="<?= $laporan['solusi_genset']; ?>" name="solusi_genset" id="solusi_genset" > 
               <input class="form-control" type="hidden" value="<?= $laporan['solusi_ups']; ?>" name="solusi_ups" id="solusi_ups" > 
               <input class="form-control" type="hidden" value="<?= $laporan['solusi_inverter']; ?>" name="solusi_inverter" id="solusi_inverter" > 

               <!-- BACKUP POP -->
               <input class="form-control" type="hidden" value="<?= $laporan['solusi_pop']; ?>" name="solusi_pop" id="solusi_pop" > 
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