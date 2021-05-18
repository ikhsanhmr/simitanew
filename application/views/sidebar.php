 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
       <div class="pull-left image">
         <img src="<?php echo base_url(); ?>public/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
       </div>
       <div class="pull-left info">
         <?php if ($this->session->userdata('role') == 1) { ?>
           <p>Admin SIMITA</p>
         <?php } else if ($this->session->userdata('role') == 2) { ?>
           <p>EOS ICON+ SIMITA</p>
         <?php } else if ($this->session->userdata('role') == 3) { ?>
           <p>IT Support SIMITA</p>
         <?php } else if ($this->session->userdata('role') == 4) { ?>
           <p>Pegawai STI SIMITA</p>
         <?php } ?>
         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       <?php if ($this->session->userdata('role') == 1 || $this->session->userdata('role') == 4) {
          //sidebar admin dan pegawai STI 
        ?>
         <li class="header">MAIN NAVIGATION</li>
         <li class="<?php if ($this->uri->segment(2) == "index") {
                      echo 'active';
                    } ?>">
           <a href="<?php echo site_url('admin/index'); ?>">
             <i class="fa fa-dashboard"></i><span>Dashboard <?php  ?></span>
           </a>
         </li>
         <!--
          <li class="treeview <?php //if( $this->uri->segment(2)=="unit_sumut1_view" || $this->uri->segment(2)=="unit_sumut2_view" || $this->uri->segment(2)=="users_view" || $this->uri->segment(2)=="vendor_view" || $this->uri->segment(2)=="merek_view"){echo 'active';}
                              ?>">
            <a href="#">
              <i class="fa fa-heartbeat"></i> <span>Health Index</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="treeview">
               

               
          <li class="<?php //if( $this->uri->segment(2)=="hi" || $this->uri->segment(2)=="hi_view" || $this->uri->segment(2)=="hi_add" || $this->uri->segment(2)=="hi_edit"){echo 'active';}
                      ?>">
            <a href="<?php //echo site_url('admin/hi'); 
                      ?>">
              <i class="fa fa-microchip"></i> <span>List Maintenance</span>
            </a>
          </li>

          <li class="<?php //if( $this->uri->segment(2)=="gangguan" || $this->uri->segment(2)=="gangguan_add" || $this->uri->segment(2)=="gangguan_view" || $this->uri->segment(2)=="gangguan_edit"){echo 'active';}
                      ?>">
            <a href="<?php //echo site_url('admin/gangguan'); 
                      ?>">
              <i class="fa fa-wrench"></i> <span>List Gangguan</span>
            </a>
          </li>
              
            </li>

          </ul>
        </li>
-->
         <li class="treeview <?php if ($this->uri->segment(2) == "unit_sumut1_view" || $this->uri->segment(2) == "unit_sumut2_view" || $this->uri->segment(2) == "users_view" || $this->uri->segment(2) == "vendor_view" || $this->uri->segment(2) == "merek_view") {
                                echo 'active';
                              } ?>">
           <a href="#">
             <i class="fa fa-share"></i> <span>Master Data</span>
             <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
             </span>
           </a>
           <ul class="treeview-menu">
             <li class="<?php if ($this->uri->segment(2) == "unit_view") {
                          echo 'active';
                        } ?>">
               <a href="<?= base_url('admin/unit_view'); ?>"><i class="fa fa-building"></i> Unit
                 <span class="pull-right-container"></span>
               </a>
             </li>

             <li class="<?php if ($this->uri->segment(1) == "support") {
                          echo 'active';
                        } ?>">
               <a href="<?= base_url('support'); ?>"><i class="fa fa-users"></i> IT Support
                 <span class="pull-right-container"></span>
               </a>
             </li>

             <li class="<?php if ($this->uri->segment(1) == "pegawai") {
                          echo 'active';
                        } ?>">
               <a href="<?= base_url('pegawai'); ?>"><i class="fa fa-users"></i> Pegawai
                 <span class="pull-right-container"></span>
               </a>
             </li>

             <li class="<?php if ($this->uri->segment(2) == "users_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/users_view'); ?>"><i class="fa fa-users"></i> User
                 <span class="pull-right-container">
                 </span>
               </a>
             </li>

             <li class="<?php if ($this->uri->segment(2) == "vendor_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/vendor_view'); ?>"><i class="fa fa-clipboard"></i> Vendor
                 <span class="pull-right-container">
                 </span>
               </a>
             </li>

             <li class="<?php if ($this->uri->segment(2) == "merek_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/merek_view'); ?>"><i class="fa fa-book"></i> Merek Perangkat
                 <span class="pull-right-container">
                 </span>
               </a>
             </li>
             <!--
                <li class="<?php //if( $this->uri->segment(1)=="kpi"){echo 'active';}
                            ?>"> 
                  <a href="<?php //echo site_url('kpi'); 
                            ?>"><i class="fa fa-book"></i> KPI
                  </span>
                  </a>
                </li>
			-->
             <li class="<?php if ($this->uri->segment(2) == "data_network_view" || $this->uri->segment(2) == "data_network_filter") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/data_network_view'); ?>"><i class="fa fa-book"></i> Kontrak Jaringan Icon+
                 </span>
               </a>
             </li>

             <li class="<?php if ($this->uri->segment(2) == "kategori_gangguan_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/kategori_gangguan_view'); ?>"><i class="fa fa-book"></i> Kategori Gangguan Jaringan
                 </span>
               </a>
             </li>

             <li class="<?php if ($this->uri->segment(2) == "kategori_gangguan_perangkat_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/kategori_gangguan_perangkat_view'); ?>"><i class="fa fa-book"></i> Kategori Gangguan Perangkat
                 </span>
               </a>
             </li>

             <li class="<?php if ($this->uri->segment(2) == "tingkat_kerawanan_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/tingkat_kerawanan_view'); ?>"><i class="fa fa-book"></i> Tingkat Kerawanan
                 </span>
               </a>
             </li>

             <li class="<?php if ($this->uri->segment(2) == "stok_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/stok_view'); ?>"><i class="fa fa-book"></i> Stok Perangkat
                 </span>
               </a>
             </li>

             <li class="<?php if ($this->uri->segment(2) == "pop_icon_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/pop_icon_view'); ?>"><i class="fa fa-book"></i> Data POP ICON+
                 </span>
               </a>
             </li>

           </ul>
         </li>

         <li class="treeview <?php if ($this->uri->segment(2) == "laptop_view" || $this->uri->segment(2) == "komputer_view" || $this->uri->segment(2) == "monitor_view" || $this->uri->segment(2) == "printer_view" || $this->uri->segment(2) == "aplikasi_lokal_view" || $this->uri->segment(2) == "server_view" || $this->uri->segment(2) == "network_device_view" || $this->uri->segment(2) == "vicon_view") {
                                echo 'active';
                              } ?>">
           <a href="#">
             <i class="fa fa-archive"></i> <span>Inventory</span>
             <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
             </span>
           </a>
           <ul class="treeview-menu">
             <li class="treeview">
             <li class="<?php if ($this->uri->segment(2) == "laptop_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/laptop_view'); ?>"><i class="fa fa-laptop"></i> Laptop
                 <span class="pull-right-container"></span>
               </a>
             </li>
             <li class="<?php if ($this->uri->segment(2) == "komputer_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/komputer_view'); ?>"><i class="fa fa-microchip"></i> PC / Komputer
                 <span class="pull-right-container"></span>
               </a>
             </li>
             <li class="<?php if ($this->uri->segment(2) == "monitor_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/monitor_view'); ?>"><i class="fa fa-tv"></i> Monitor
                 <span class="pull-right-container"></span>
               </a>
             </li>
             <li class="<?php if ($this->uri->segment(2) == "printer_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/printer_view'); ?>"><i class="fa fa-print"></i> Printer / Scanner
                 <span class="pull-right-container"></span>
               </a>
             </li>
             <li class="<?php if ($this->uri->segment(2) == "aplikasi_lokal_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/aplikasi_lokal_view'); ?>"><i class="fa fa-gears"></i> Aplikasi Lokal
                 <span class="pull-right-container"></span>
               </a>
             </li>
             <li class="<?php if ($this->uri->segment(2) == "server_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/server_view'); ?>"><i class="fa fa-server"></i> Server
                 <span class="pull-right-container"></span>
               </a>
             </li>
             <li class="<?php if ($this->uri->segment(2) == "network_device_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/network_device_view'); ?>"><i class="fa fa-feed"></i> Network Device
                 <span class="pull-right-container"></span>
               </a>
             </li>
             <li class="<?php if ($this->uri->segment(2) == "vicon_view") {
                          echo 'active';
                        } ?>">
               <a href="<?php echo site_url('admin/vicon_view'); ?>"><i class="fa fa-video-camera"></i> Video Conference
                 <span class="pull-right-container"></span>
               </a>
             </li>
         </li>
     </ul>
     </li>
     <li class="treeview <?php if ($this->uri->segment(2) == "unit_sumut1_view" || $this->uri->segment(2) == "unit_sumut2_view" || $this->uri->segment(2) == "users_view" || $this->uri->segment(2) == "vendor_view" || $this->uri->segment(2) == "merek_view") {
                            echo 'active';
                          } ?>">
       <a href="#">
         <i class="fa fa-cogs"></i> <span>Data HAR</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li class="treeview">

         <li class="<?php if ($this->uri->segment(2) == "jadwal_har_view") {
                      echo 'active';
                    } ?>">
           <a href="<?php echo site_url('laporan/jadwal_har_view'); ?>">
             <i class="fa fa-calendar"></i> <span>Jadwal HAR</span>
           </a>
         </li>

         <li class="<?php if ($this->uri->segment(2) == "getLaporan") {
                      echo 'active';
                    } ?>">
           <a href="<?php echo site_url('laporan/getLaporan'); ?>">
             <i class="fa fa-credit-card"></i> <span>HAR Perangkat</span>
           </a>
         </li>

         <li class="<?php if ($this->uri->segment(2) == "getLaporan") {
                      echo 'active';
                    } ?>">
           <a href="<?php echo site_url('laporan/getDataHar'); ?>">
             <i class="fa fa-assistive-listening-systems"></i> <span>Inspeksi Peralatan</span>
           </a>
         </li>

     </li>
     </ul>
     </li>
     <li class="<?php if ($this->uri->segment(2) == "lgangguan_view" || $this->uri->segment(2) == "lgangguan_add" || $this->uri->segment(2) == "lgangguan_edit" || $this->uri->segment(2) == "lgangguan_filter") {
                  echo 'active';
                } ?>">
       <a href="<?php echo site_url('admin/lgangguan_view'); ?>">
         <i class="fa fa-book"></i> <span>Log Gangguan</span>
       </a>
     </li>
     <li class="<?php if ($this->uri->segment(2) == "corrective_maintenance") {
                  echo 'active';
                } ?>">
       <a href="<?php echo site_url('admin/corrective_maintenance'); ?>">
         <i class="fa fa-cog"></i> <span>Corrective Maintenance</span>
       </a>
     </li>
     <li class="<?php if ($this->uri->segment(2) == "kesiapan_pop_scada_up2d_view") {
                  echo 'active';
                } ?>">
       <a href="<?php echo site_url('admin/kesiapan_pop_scada_up2d_view'); ?>">
         <i class="fa fa-book"></i> <span>Kesiapan POP SCADA UP2D</span>
       </a>
     </li>

   <?php } else if ($this->session->userdata('role') == 2) {
          //sidebar EOS ICON+ 
    ?>
     <li class="header">MAIN NAVIGATION</li>
     <li class="<?php if ($this->uri->segment(2) == "index") {
                  echo 'active';
                } ?>">
       <a href="<?php echo site_url('eosicon/index'); ?>">
         <i class="fa fa-dashboard"></i><span>Dashboard <?php  ?></span>
       </a>
     </li>
     <li class="<?php if ($this->uri->segment(2) == "lgangguan_view" || $this->uri->segment(2) == "lgangguan_add" || $this->uri->segment(2) == "lgangguan_edit" || $this->uri->segment(2) == "lgangguan_filter") {
                  echo 'active';
                } ?>">
       <a href="<?php echo site_url('admin/lgangguan_view'); ?>">
         <i class="fa fa-book"></i> <span>Log Gangguan</span>
       </a>
     </li>
   <?php } else if ($this->session->userdata('role') == 3) {
          //sidebar IT SUPPORT 
    ?>
     <li class="header">MAIN NAVIGATION</li>
     <li class="<?php if ($this->uri->segment(2) == "index_dashboard") {
                  echo 'active';
                } ?>">
       <a href="<?php echo site_url('support/index_dashboard'); ?>">
         <i class="fa fa-dashboard"></i><span>Dashboard <?php  ?></span>
       </a>
     </li>

     <li class="treeview <?php if ($this->uri->segment(2) == "unit_sumut1_view" || $this->uri->segment(2) == "unit_sumut2_view" || $this->uri->segment(2) == "users_view" || $this->uri->segment(2) == "vendor_view" || $this->uri->segment(2) == "merek_view") {
                            echo 'active';
                          } ?>">
       <a href="#">
         <i class="fa fa-cogs"></i> <span>Data HAR</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li class="treeview">

         <li class="<?php if ($this->uri->segment(2) == "jadwal_har_view") {
                      echo 'active';
                    } ?>">
           <a href="<?php echo site_url('laporan/jadwal_har_view'); ?>">
             <i class="fa fa-calendar"></i> <span>Jadwal HAR</span>
           </a>
         </li>

         <li class="<?php if ($this->uri->segment(2) == "getLaporan") {
                      echo 'active';
                    } ?>">
           <a href="<?php echo site_url('laporan/getLaporan'); ?>">
             <i class="fa fa-credit-card"></i> <span>HAR Perangkat</span>
           </a>
         </li>

         <li class="<?php if ($this->uri->segment(2) == "getLaporan") {
                      echo 'active';
                    } ?>">
           <a href="<?php echo site_url('laporan/getDataHar'); ?>">
             <i class="fa fa-assistive-listening-systems"></i> <span>HAR Network</span>
           </a>
         </li>
     </li>
     </ul>
     </li>
   <?php } ?>
   </ul>
   </section>
   <!-- /.sidebar -->
 </aside>