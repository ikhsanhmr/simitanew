 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       <?= $judul; ?>
       <small>Manage <?= $judul; ?></small>
     </h1>
     <ol class="breadcrumb">
       <li class='active'><a href="#"><i class="fa fa-cog"></i> Manage <?= $judul; ?></a></li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <?= $this->session->flashdata('pesan'); ?>

     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title"><?= $judul; ?></h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table class="table table-bordered table-responsive">
               <thead>
                 <tr class="bg-success">
                   <th class="text-center">Nama Perangkat</th>
                   <th class="text-center">Solusi</th>
                   <th class="text-center">Rencana selanjutnya</th>
                 </tr>
               </thead>
               <tbody>
                 <?php foreach ($waktu as $data) { ?>
                   <?php foreach ($stok_view->result_array() as $stok) { ?>
                     <tr>
                       <td width="15%" class="text-center">
                         <label for="no_hp" class="control-label"><?= $data['nama_perangkat']; ?></label>
                       </td>
                       <td width="40%">
                         <ul class="">
                           <!-- //PERANGKAT HARDWARE -->
                           <?php
                            if ($data['solusi_tampak_fisik'] != null) { ?>
                             <b>Solusi Tampak fisik : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px"><?php echo $data['solusi_tampak_fisik']; ?></li>
                           <?php }
                            ?>
                           <?php
                            if ($data['solusi_indikator_lampu'] != null) { ?>
                             <b>Solusi Indikator Lampu : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px"><?php echo $data['solusi_indikator_lampu']; ?></li>
                           <?php }
                            ?>
                           <?php
                            if ($data['solusi_power_supply'] != null) { ?>
                             <b>Solusi Power Supply : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px"><?php echo $data['solusi_power_supply']; ?></li>
                           <?php }
                            ?>
                           <?php
                            if ($data['solusi_lan'] != null) { ?>
                             <b>Solusi LAN : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px"><?php echo $data['solusi_lan']; ?></li>
                           <?php }
                            ?>
                           <?php
                            if ($data['solusi_port'] != null) { ?>
                             <b>Solusi Port : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px"><?php echo $data['solusi_port']; ?></li>
                           <?php }
                            ?>
                           <?php
                            if ($data['solusi_konfigurasi'] != null) { ?>
                             <b>Solusi Konfigurasi : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px"><?php echo $data['solusi_konfigurasi']; ?></li>
                           <?php }
                            ?>
                           <?php
                            if ($data['solusi_backup_setting'] != null) { ?>
                             <b>Solusi Backup Setting : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px"><?php echo $data['solusi_backup_setting']; ?></li>
                           <?php }
                            ?>
                           <?php
                            if ($data['solusi_genset'] != null) { ?>
                             <b>Solusi Genset : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px"><?php echo $data['solusi_genset']; ?></li>
                           <?php }
                            ?>
                           <?php
                            if ($data['solusi_ups'] != null) { ?>
                             <b>Solusi UPS : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px"><?php echo $data['solusi_ups']; ?></li>
                           <?php }
                            ?>
                           <?php
                            if ($data['solusi_inverter'] != null) { ?>
                             <b>Solusi Inverter : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px"><?php echo $data['solusi_inverter']; ?></li>
                           <?php }
                            ?>
                         </ul>
                       </td>
                       <td width="40%">
                         <ul class="">
                           <!-- TINDAK LANJUT -->
                           <?php if ($data['solusi_tampak_fisik'] == 'Penggantian tampilan fisik dari perangkat.') { ?>
                             <b>Tindak Lanjut Tampak fisik : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 ganti perangkat
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan perangkat
                               <?php } ?>
                             </li>
                           <?php } elseif ($data['solusi_tampak_fisik'] == 'Perbaikan tampilan fisik dari perangkat') { ?>
                             <b>Tindak Lanjut Tampak fisik : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 perbaikan perangkat
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan perangkat
                               <?php } ?>
                             </li>
                           <?php } ?>

                           <!-- INDIKATOR -->
                           <?php if ($data['solusi_indikator_lampu'] == 'Penggantian pada perangkat indikator lampu') { ?>
                             <b>Tindak Lanjut Indikator Lampu : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 ganti indikator
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan indikator
                               <?php } ?>
                             </li>
                           <?php } elseif ($data['solusi_indikator_lampu'] == 'Perbaikan pada perangkat indikator lampu') { ?>
                             <b>Tindak Lanjut Indikator Lampu : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 perbaikan indikator
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan indikator
                               <?php } ?>
                             </li>
                           <?php } ?>

                           <!-- POWER SUPPLY -->
                           <?php if ($data['solusi_power_supply'] == 'Penggantian Power Supply dari perangkat.') { ?>
                             <b>Tindak Lanjut Power Supply : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 ganti power supply
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan power supply
                               <?php } ?>
                             </li>
                           <?php } elseif ($data['solusi_power_supply'] == 'Perbaikan pada perangkat Power Supply lampu') { ?>
                             <b>Tindak Lanjut Power supply : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 perbaikan power supply
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan power supply
                               <?php } ?>
                             </li>
                           <?php } ?>

                           <!-- LAN -->
                           <?php if ($data['solusi_lan'] == 'Penggantian LAN pada perangkat.') { ?>
                             <b>Tindak Lanjut LAN : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 ganti LAN
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan LAN
                               <?php } ?>
                             </li>
                           <?php } elseif ($data['solusi_lan'] == 'Perbaikan LAN pada perangkat') { ?>
                             <b>Tindak Lanjut LAN : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 perbaikan LAN
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan LAN
                               <?php } ?>
                             </li>
                           <?php } ?>

                           <!-- PORT -->
                           <?php if ($data['solusi_port'] == 'Penggantian Port pada perangkat.') { ?>
                             <b>Tindak Lanjut Port : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 ganti Port
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan Port
                               <?php } ?>
                             </li>
                           <?php } elseif ($data['solusi_port'] == 'Perbaikan Port pada perangkat') { ?>
                             <b>Tindak Lanjut Port : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 perbaikan Port
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan Port
                               <?php } ?>
                             </li>
                           <?php } ?>

                           <!-- Konfigurasi -->
                           <?php if ($data['solusi_konfigurasi'] == 'Penggantian settingan konfigurasi pada perangkat.') { ?>
                             <b>Tindak Lanjut Konfigurasi : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 ganti settingan konfigurasi
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan settingan konfigurasi
                               <?php } ?>
                             </li>
                           <?php } elseif ($data['solusi_konfigurasi'] == 'Perbaikan konfigurasi pada perangkat') { ?>
                             <b>Tindak Lanjut Konfigurasi : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 perbaikan settingan konfigurasi
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan settingan konfigurasi
                               <?php } ?>
                             </li>
                           <?php } ?>

                           <!-- BACKUP SETTING -->
                           <?php if ($data['solusi_backup_setting'] == 'Penggantian Backup Setting pada perangkat.') { ?>
                             <b>Tindak Lanjut Backup Setting : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 ganti bakup setting
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan bakup setting
                               <?php } ?>
                             </li>
                           <?php } elseif ($data['solusi_backup_setting'] == 'Perbaikan Backup Setting pada perangkat') { ?>
                             <b>Tindak Lanjut Backup Setting : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 perbaikan backup setting
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan backup setting
                               <?php } ?>
                             </li>
                           <?php } ?>

                           <!-- GENSET -->
                           <?php if ($data['solusi_genset'] == 'Disarankan untuk menambahkan Genset') { ?>
                             <b>Tindak Lanjut Genset : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 Tambah genset
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan genset
                               <?php } ?>
                             </li>
                           <?php } ?>

                           <!-- UPS -->
                           <?php if ($data['solusi_ups'] == 'Disarankan untuk menambahkan UPS') { ?>
                             <b>Tindak Lanjut UPS : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 Tambah UPS
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan UPS
                               <?php } ?>
                             </li>
                           <?php } ?>

                           <!-- INVERTER -->
                           <?php if ($data['solusi_inverter'] == 'Disarankan untuk menambahkan Inverter') { ?>
                             <b>Tindak Lanjut Inverter : </b>
                             <li class="form-control" style="height: 50px;margin-bottom: 10px">
                               <?php if ($stok['jumlah_perangkat'] > 0) { ?>
                                 Tambah Inverter
                               <?php } else { ?>
                                 stok kosong, harap lakukan pengadaan Inverter
                               <?php } ?>
                             </li>
                           <?php } ?>

                         </ul>
                       </td>
                     </tr>
                   <?php } ?>
                 <?php } ?>
               </tbody>
             </table>
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