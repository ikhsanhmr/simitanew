 
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
       <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>laporan/action_editData" enctype="multipart/form-data">
            
        <div class="box-header with-border">
          <h3 class="box-title">Detail Info</h3>
        </div>
        
        <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nama unit</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['nama_unit'];?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label"> Lokasi</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['lokasi'];?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Waktu Pelaksanaan</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['waktu_pelaksanaan'];?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nama Perangkat</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['nama_perangkat'];?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Serial Number</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['serial_number'];?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Type</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['type'];?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Id Address</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['id_address'];?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">MAC Address</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['mac_address'];?> </div>
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
                    <table  class="table-bordered table-striped"  align = "center" width="660px">
                        <thead>
                            <tr>
                                <th class="center">Tampak Fisik</th>
                                <th class="text-center">Indikator Lampu</th>
                                <th class="text-center">Power Supply</th>
                                <th class="text-center">LAN</th>
                                <th class="text-center">Port</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                             <tr>
                                <td class="text-center"><?= $data['tampak_fisik'] ?></td>
                                <td class="text-center"><?= $data['indikator_lampu'] ?></td>
                                <td class="text-center"><?= $data['power_supply']; ?></td>
                                <td class="text-center"><?= $data['lan']; ?></td>
                                <td class="text-center"><?= $data['port']; ?></td>
                            </tr>
                             <?php
                                $no++;
                            ?>
                        </tbody>
                    </table>
                        </div>    
                    </div>
                  
                </div>

               <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Perangkat Software</label>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                        <table  class="table-bordered table-striped"  align = "center" width="500px">
                        <thead>
                            <tr>
                                <th class="center">Konfigurasi</th>
                                <th class="text-center">Backup Setting</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                             <tr>
                                <td class="text-center"><?= $data['konfigurasi'] ?></td>
                                <td class="text-center"><?= $data['backup_setting'] ?></td>
                                
                            </tr>
                             <?php
                                $no++;
                            ?>
                        </tbody>
                    </table>
                        </div>
                    </div>
                    
                 
                    <!-- <div class="col-sm-9" style="font-weight:normal">
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="backup_setting" id="optionsRadios1" value="Normal" <?php if($data['backup_setting'] == 'Normal'){ echo "checked";}?> readonly>
                            Normal
                            </label>
                        </div>
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="backup_setting" id="optionsRadios2" value="Ada error" <?php if($data['backup_setting'] == 'Ada Error'){ echo "checked";}?>>
                            Ada Error 
                            </label>
                        </div>
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="backup_setting" id="optionsRadios3" value="Rusak" <?php if($data['backup_setting'] == 'Rusak'){ echo "checked";}?>>
                            Rusak 
                            </label>
                        </div>
                    </div> -->
                    
                </div>
                <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Pengawas Pekerjaan</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['pengawas_pekerjaan'];?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Pelaksana Pekerjaan</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['pelaksana_pekerjaan'];?> </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi</label>
                            <div class="col-sm-5">
                            <textarea class="form-control" id="catatan" readonly name="catatan" rows="3" placeholder="Contoh : Baterai laptop sudah tidak dapat berfungsi dengan baik." ><?php echo $data['catatan']; ?></textarea>
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
                        <table  class="table-bordered table-striped"  align = "center" width="500px">
                        <thead>
                            <tr>
                                <th class="text-center">Gambar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                             <tr>
                                <td class="text-center">
                                <img src="<?php echo base_url(); ?>public/images/har_network/<?= $data['foto_sebelum_pengerjaan'];?>" width="180" height="260" alt=" no images">
                                </td>
                            </tr>
                             <?php
                                $no++;
                            ?>
                        </tbody>
                    </table>
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
                        <table  class="table-bordered table-striped"  align = "center" width="500px" >
                        <thead>
                            <tr>
                                <th class="text-center">Gambar</th>
                             
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                             <tr>
                             <td class="text-center">
                             <img src="<?php echo base_url(); ?>public/images/har_network/<?= $data['foto_sesudah_pengerjaan'];?>" width="180" height="260" alt=" no images">
                             </td>
                            </tr>
                             <?php
                                $no++;
                            ?>
                        </tbody>
                    </table>
                        </div>
                    </div>
                
                </div>
         
             <br>
             <br>
            
               
               

        <!-- /.box-body -->
        <div class="box-footer">
                    <div class="pull-center">
                        <a href="<?php echo base_url(); ?>laporan/getDataHar" class="btn btn-danger">Kembali</a>
                      
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