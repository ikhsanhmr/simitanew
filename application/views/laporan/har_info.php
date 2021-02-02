 
 <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    HAR Network 
    <small>Info Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Master Data</a></li>
    <li><a href="#">Laporan Kerusakan</a></li>
    <li class="active">Detail Info</li>
  </ol>
</section>

<style>
/* hide url when printing */
a[href]:after {
        content: none !important;
    }
</style>

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
     

      <!-- Form Element sizes -->
      <div class="box box-success">
       <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>laporan/approval" enctype="multipart/form-data">
            
        <div class="box-header with-border">
          <h3 class="box-title">Detail Info</h3>
        </div>
        


        <div class="section">
        
        
       
        <input type="hidden" id = "id" name="id" value="<?= $data['id'];?>">
        <div class="box-body">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kantor Induk</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $unit['nama_kantor_induk'];?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Unit Level 2</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $unit2['nama_unit_level2'];?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Unit Level 3</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $unit3['nama_unit_level3'];?> </div>
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
                            <div class="form-control"><?= $waktu['tanggal_pergi']?> -- <?= $waktu['tanggal_pulang']?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Working Permit</label>
                            <div class="col-sm-5">
                                <div class="form-control">
                                    <a href="<?= base_url(); ?>laporan/downloadFile/<?= $data['working_permit']; ?>"><?= $data['working_permit'];?></a>
                                </div>
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
                            <label for="no_hp" class="col-sm-3 control-label">Device Type</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['type'];?> </div>
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
                    </div>
                  
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Perangkat Hardware</label>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="form-group">
                    <table  class="table-bordered table-striped"  align = "center" width="660px" height = "80px">
                        <thead>
                            <tr>
                                <th class="text-center">Tampak Fisik</th>
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
                             <td class="text-center">
                                    <?php 
                                    if($data['tampak_fisik'] == 'Normal'){ ?>
                                        <a class="btn btn-success">Normal </a>
                                <?php }
                                else if($data['tampak_fisik'] == 'Ada error'){?>
                                        <a class="btn btn-warning">Ada Error </a>
                                <?php }
                                else { ?>
                                        <a class="btn btn-danger">Rusak</a>
                                <?php }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if($data['indikator_lampu'] == 'Normal'){ ?>
                                        <a class="btn btn-success">Normal </a>
                                <?php }
                                else if($data['indikator_lampu'] == 'Ada error'){?>
                                        <a class="btn btn-warning">Ada Error </a>
                                <?php }
                                else { ?>
                                        <a class="btn btn-danger">Rusak</a>
                                <?php }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if($data['power_supply'] == 'Normal'){ ?>
                                        <a class="btn btn-success">Normal </a>
                                <?php }
                                else if($data['power_supply'] == 'Ada error'){?>
                                        <a class="btn btn-warning">Ada Error </a>
                                <?php }
                                else { ?>
                                        <a  class="btn btn-danger">Rusak</a>
                                <?php }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if($data['lan'] == 'Normal'){ ?>
                                        <a  class="btn btn-success">Normal </a>
                                <?php }
                                else if($data['lan'] == 'Ada error'){?>
                                        <a  class="btn btn-warning">Ada Error </a>
                                <?php }
                                else { ?>
                                        <a  class="btn btn-danger">Rusak</a>
                                <?php }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if($data['port'] == 'Normal'){ ?>
                                        <a  class="btn btn-success">Normal </a>
                                <?php }
                                else if($data['port'] == 'Ada error'){?>
                                        <a  class="btn btn-warning">Ada Error </a>
                                <?php }
                                else { ?>
                                        <a  class="btn btn-danger">Rusak</a>
                                <?php }
                                    ?>
                                </td>
                            </tr>
                             <?php
                                $no++;
                            ?>
                        </tbody>
                    </table>
                        </div>    
                    </div>
                  
              

            
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Perangkat Software</label>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                        <table  class="table-bordered table-striped"  align = "center" width="500px" height ="80px">
                        <thead>
                            <tr>
                                <th class="text-center">Konfigurasi</th>
                                <th class="text-center">Backup Setting</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                             <tr>
                             <td class="text-center">
                                <?php 
                                 if($data['konfigurasi'] == 'Normal'){ ?>
                                    <a class="btn btn-success">Normal </a>
                               <?php }
                               else if($data['konfigurasi'] == 'Ada error'){?>
                                    <a class="btn btn-warning">Ada Error </a>
                              <?php }
                              else { ?>
                                    <a  class="btn btn-danger">Rusak</a>
                             <?php }
                                ?>
                            </td>

                            <td class="text-center">
                                <?php 
                                 if($data['backup_setting'] == 'Normal'){ ?>
                                    <a  class="btn btn-success">Normal </a>
                               <?php }
                               else if($data['backup_setting'] == 'Ada error'){?>
                                    <a  class="btn btn-warning">Ada Error </a>
                              <?php }
                              else { ?>
                                    <a  class="btn btn-danger">Rusak</a>
                             <?php }
                                ?>
                            </td>
                                
                            </tr>
                             <?php
                                $no++;
                            ?>
                        </tbody>
                         </table>
                    </div>
                </div>
                    
             
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Backup Power</label>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                        <table  class="table-bordered table-striped"  align = "center" width="500px" height="80px">
                        <thead>
                            <tr>
                                <th class="text-center">Genset</th>
                                <th class="text-center">UPS</th>
                                <th class="text-center">Inverter</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                             <tr>
                                <td class="text-center">
                                <?php 
                                 if($data['genset'] == 'Normal'){ ?>
                                    <a  class="btn btn-success">Normal </a>
                               <?php }
                               else if($data['genset'] == 'Ada error'){?>
                                    <a class="btn btn-warning">Ada Error </a>
                              <?php }
                              else { ?>
                                    <a  class="btn btn-danger">Rusak</a>
                             <?php }
                                ?>
                                </td>
                                <td class="text-center">
                                <?php 
                                 if($data['ups'] == 'Normal'){ ?>
                                    <a  class="btn btn-success">Normal </a>
                               <?php }
                               else if($data['ups'] == 'Ada error'){?>
                                    <a  class="btn btn-warning">Ada Error </a>
                              <?php }
                              else { ?>
                                    <a class="btn btn-danger">Rusak</a>
                             <?php }
                                ?>
                                </td>
                                <td class="text-center">
                                <?php 
                                 if($data['inverter'] == 'Normal'){ ?>
                                    <a href="" class="btn btn-success">Normal </a>
                               <?php }
                               else if($data['inverter'] == 'Ada error'){?>
                                    <a href="" class="btn btn-warning">Ada Error </a>
                              <?php }
                              else { ?>
                                    <a href="" class="btn btn-danger">Rusak</a>
                             <?php }
                                ?>
                                </td>
                                
                            </tr>
                             <?php
                                $no++;
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>
                    
         
                <div class="col-lg-10">
                    <br><br>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Tingkat Kerawanan</label>
                            <div class="col-sm-5">
                            <div class="form-control"><?= $data['tingkat_kerawanan'];?> </div>
                            </div>
                        </div>
                    </div>
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
               

                <div class="col-lg-10">
                    <div class="form-group">
                        <label for="no_hp" class="col-sm-3 control-label">Kondisi</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" id="catatan" readonly name="catatan" rows="5" placeholder="Contoh : Baterai laptop sudah tidak dapat berfungsi dengan baik." ><?php echo $data['catatan']; ?>
                                </textarea>
                            </div>
                    </div>
                </div>
                
                <div class="col-lg-10">
                    <div class="form-group">
                        <label for="no_hp" class="col-sm-3 control-label">Solusi</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" id="solusi" readonly name="solusi" rows="5"  ><?php echo $data['solusi']; ?>
                                </textarea>
                            </div>
                    </div>
                </div>

               
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
                
             
            
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi Saat Pengerjaan</label>
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
                                <img src="<?php echo base_url(); ?>public/images/har_network/<?= $data['foto_saat_pengerjaan'];?>" width="180" height="260" alt=" no images">
                                </td>
                            </tr>
                             <?php
                                $no++;
                            ?>
                        </tbody>
                    </table>
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
                        <a onclick="window.print()" style="float:right;margin-left : 3px; " class="btn btn-primary">Print</a> 
                        
                        <?php if ($data['approval'] == 'approved') {?>

                    <?php  }
                       else { ?>
                            <button type="submit" class="btn btn-success" value="Approve" style="float: right;">Approve</button>
                    <?php }; ?>
                        
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