 
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
        
        <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nama unit</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="nama_unit" id="nama_unit"
                            > 
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label"> Lokasi</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="lokasi" id="lokasi"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Waktu Pelaksanaan</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="date" name="waktu_pelaksanaan" id="waktu_pelaksanaan"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nama Perangkat</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="nama_perangkat" id="nama_perangkat"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Serial Number</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="serial_number" id="serial_number"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Type</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="type" id="type"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Id Address</label>
                            <div class="col-sm-5">
                            <input type="text" id="id_address" name="id_address" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">MAC Address</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="text" name="mac_address" id="mac_address"> 
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
                    </div>
                <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Tampak Fisik</label>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="tampak_fisik" id="tampak_fisik1" value="Normal"  >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="tampak_fisik" id="tampak_fisik2" value="Ada error">
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="tampak_fisik" id="tampak_fisik3" value="Rusak" >
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
                                <input type="radio" name="indikator_lampu" id="indikator_lampu1" value="Normal"  >
                                Normal
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="indikator_lampu" id="indikator_lampu2" value="Ada error">
                                Ada Error 
                                </label>
                            </div>
                            <div class="radio col-sm-2">
                                <label>
                                <input type="radio" name="indikator_lampu" id="indikator_lampu3" value="Rusak" >
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
                <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Perangkat Software</label>
                        </div>
                    </div>
                </div>
                <div class="box-body">
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


                <div class="box-body">
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

                <div class="box-body">
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
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi Setelah Pengerjaan</label>
                            <div class="col-sm-5">
                            <input class="form-control"type="file" name="foto_sesudah_pengerjaan" id="foto_sesudah_pengerjaan" required> 
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