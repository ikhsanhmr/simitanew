<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo $menghitung_jumlah_perangkat['jumlah_laptop']; ?></h3>

            <p>Unit</p>
          </div>
          <div class="icon">
            <i class="ion ion-laptop"></i>
          </div>
          <a href="<?php echo site_url('admin/laptop_view'); ?>" class="small-box-footer">Laptop di Sumatera Utara <i class="fa fa-building"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $menghitung_jumlah_perangkat['jumlah_server']; ?></h3>

            <p>Unit</p>
          </div>
          <div class="icon">
            <i class="ion ion-archive"></i>
          </div>
          <a href="<?php echo site_url('admin/server_view'); ?>" class="small-box-footer">Server di Sumatera Utara <i class="fa fa-building"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $menghitung_rata_rata_durasi['rata_rata']; ?></h3>

            <p>Menit</p>
          </div>
          <div class="icon">
            <i class="ion ion-monitor"></i>
          </div>
          <a href="<?php echo site_url('admin/komputer_view'); ?>" class="small-box-footer " style="font-size:10px">Rata-rata Durasi Gangguan Scada NR STI SUMUT <i class="fa fa-building"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?php echo $menghitung_jumlah_perangkat['jumlah_network_device']; ?></h3>

            <p>Unit</p>
          </div>
          <div class="icon">
            <i class="ion ion-wifi"></i>
          </div>
          <a href="<?php echo site_url('admin/network_device_view'); ?>" class="small-box-footer">Network Device di Sumatera Utara <i class="fa fa-building"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
          <div class="inner">
            <div>
              <div class="row h4">
                <div class="col-md-6">Switch</div>
                <div class="col-md-1"><?php echo ($jumlah_terganggu['switch']); ?></div>
                <div class="col-md-3">buah</div>
              </div>
              <div class="row h4">
                <div class="col-md-6">Access Point</div>
                <div class="col-md-1"><?php echo ($jumlah_terganggu['access_point']); ?></div>
                <div class="col-md-3">buah</div>
              </div>
              <div class="row h4">
                <div class="col-md-6">Router</div>
                <div class="col-md-1"><?php echo ($jumlah_terganggu['router']); ?></div>
                <div class="col-md-3">buah</div>
              </div>
            </div>
          </div>
          <div class="icon">
            <i class="ion ion-wifi"></i>
          </div>
          <a href="<?php echo site_url('laporan/getDataHar'); ?>" class="small-box-footer">Jumlah perangkat yang ganguan<i class="fa fa-wifi"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3><?php echo $menghitung_jumlah_perangkat['jumlah_log']; ?></h3>

            <p>Log Gangguan</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-book"></i>
          </div>
          <a href="<?php echo site_url('admin/lgangguan_view'); ?>" class="small-box-footer">Log Gangguan dengan status Open <i class="fa fa-book"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">

            <h3><b>Sumut 1</b></h3>

            <h6><?php echo $menghitung_jumlah_service_wilayah['ipvpn_s1']; ?> IPVPN,
              <?php echo $menghitung_jumlah_service_wilayah['metronet_s1']; ?> Metronet, <?php echo $menghitung_jumlah_service_wilayah['vsatip_s1']; ?> VSAT IP, <?php echo $menghitung_jumlah_service_wilayah['clearchannel_s1']; ?> Clear Channel, <?php echo $menghitung_jumlah_service_wilayah['internet_s1']; ?> Internet</h6>

          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="#" class="small-box-footer">Wilayah Kerja Sumut 1 <i class="fa fa-users"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">

            <h3><b>Sumut 2</b></h3>

            <h6><?php echo $menghitung_jumlah_service_wilayah['ipvpn_s2']; ?> IPVPN, <?php echo $menghitung_jumlah_service_wilayah['metronet_s2']; ?> Metronet, <?php echo $menghitung_jumlah_service_wilayah['vsatip_s2']; ?> VSAT IP, <?php echo $menghitung_jumlah_service_wilayah['clearchannel_s2']; ?> Clear Channel, <?php echo $menghitung_jumlah_service_wilayah['internet_s2']; ?> Internet</h6>

          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="#" class="small-box-footer">Wilayah Kerja Sumut 2 <i class="fa fa-users"></i></a>
        </div>
      </div>
      <!-- ./col -->


      <!-- ./col -->
    </div>

    <!-- /.row -->




    <!-- Main content -->
    <div class="row">

      <!--
     <div class="col-xs-12">
		<H3>DATA SLA UIW SUMATERA UTARA TAHUN 2020</H3>
        <table class="zebra-table">
				<thead>
				<tr>
				<th>LAYANAN</th>
				<th>STANDARD SLA(%)</th>
				<th> JANUARI </th>
				<th> FEBRUARI </th>
				<th> MARET </th>
				<th> APRIL </th>
				<th> MEI </th>
				<th> JUNI </th>
				<th> JULI </th>
				<th> AGUSTUS </th>
				<th> SEPTEMBER </th>
				<th> OKTOBER </th>
				<th> NOVEMBER </th>
				<th> DESEMBER </th>
				</tr>
				</thead>
				<tbody>
				<tr>
				<td>INTERNET</td>
				<td>99</td>
					<td><?php //echo $januari_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $februari_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $maret_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $april_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $mei_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $juni_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $juli_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $agustus_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $september_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $oktober_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $november_internet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $desember_internet_uiwsu_ok; 
              ?></td>
				</tr>
				<tr>
				<td>IPVPN</td>
				<td>99</td>
					<td><?php //echo $januari_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $februari_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $maret_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $april_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $mei_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $juni_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $juli_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $agustus_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $september_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $oktober_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $november_ipvpn_uiwsu_ok; 
              ?></td>
					<td><?php //echo $desember_ipvpn_uiwsu_ok; 
              ?></td>
				</tr>
				<tr>
				<td>METRONET</td>
				<td>99</td>
					<td><?php //echo $januari_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $februari_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $maret_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $april_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $mei_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $juni_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $juli_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $agustus_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $september_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $oktober_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $november_metronet_uiwsu_ok; 
              ?></td>
					<td><?php //echo $desember_metronet_uiwsu_ok; 
              ?></td>
				</tr>
				<tr>
					<td>VSAT IP</td>
					<td>99</td>
						<td><?php //echo $januari_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $februari_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $maret_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $april_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $mei_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $juni_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $juli_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $agustus_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $september_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $oktober_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $november_vsat_uiwsu_ok; 
                ?></td>
						<td><?php //echo $desember_vsat_uiwsu_ok; 
                ?></td>			
					</tr>
				
				</tbody>
				</table>
      </div>
	  -->

      <div class="col-xs-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">SLA NETWORK (UIW SUMATERA UTARA) TAHUN 2020</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-6">
              <canvas id="myChart1"></canvas>
            </div>
            <div class="col-xs-6">
              <canvas id="myChart2"></canvas>
            </div>
            <div class="col-xs-6">
              <canvas id="myChart3"></canvas>
            </div>
            <div class="col-xs-6">
              <canvas id="myChart4"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>

      </div>

      <div class="col-xs-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">SLA NETWORK (UIK SUMATERA BAGIAN UTARA) TAHUN 2020</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-6">
              <canvas id="myChart5"></canvas>
            </div>
            <div class="col-xs-6">
              <canvas id="myChart6"></canvas>
            </div>

          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-xs-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">SLA NETWORK (UIP SUMATERA BAGIAN UTARA) TAHUN 2020</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-6">
              <canvas id="myChart7"></canvas>
            </div>
            <div class="col-xs-6">
              <canvas id="myChart8"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-xs-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">SLA NETWORK (UIP KITSUM) TAHUN 2020</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-6">
              <canvas id="myChart9"></canvas>
            </div>
            <div class="col-xs-6">
              <canvas id="myChart10"></canvas>
            </div>
            <div class="col-xs-6">
              <canvas id="myChart11"></canvas>
            </div>

          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-md-6">
        <!-- PIE CHART SID BERMASALAH-->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Unit dan Jumlah Gangguan</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-12">
              <canvas id="chartSID"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-md-6">
        <!-- PIE CHART GANGGUANG TERBANYAK-->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">5 Penyebab Gangguan Terbanyak</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-12">
              <canvas id="chartGangguan"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-md-6">
        <!-- PIE CHART NETWORK DEVICE -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Aset STI Sumut</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-12">
              <canvas id="chartNetworkDeviceList"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-md-6">
        <!-- PIE CHART NETWORK DEVICE HAR-->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">HAR NETWORK DEVICE</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-12">
              <canvas id="chartNetwork"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-md-6">
        <!-- PIE CHART PERANGKAT KERUSAKAN -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">LAPORAN PERANGKAT RUSAK</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-12">
              <canvas id="chartPerangkatKerusakan"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-md-6">
        <!-- PIE CHART 10 SID SCADA -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">10 SID yang Paling Sering Bermasalah</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-12">
              <canvas id="chartSidScada"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-md-6">
        <!-- PIE CHART GANGGUAN JARINGAN -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">GANGGUAN JARINGAN</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">

            <div class="form-group">
              <label for="">Filter Wilayah</label>
              <select class="form-control select2" name="filter_asman" id="filter_asman_chart_gangguan" style="width: 100%;">
                <option value="" selected> -- Pilih Asman -- </option>
                <option value="SUMUT 1">STI Sumut 1</option>
                <option value="SUMUT 2">STI Sumut 2</option>
              </select>
            </div>

            <div class="col-xs-12">
              <canvas id="chartGangguanJaringan"></canvas>
            </div>

          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-md-6">
        <!-- PIE CHART 10 SID SCADA -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Pencapaian SLA SCADA LOG GANGGUAN TAHUN <?= date('Y'); ?></h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-xs-12">
              <canvas id="chartScadaPerBulan"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <!-- TABEL HAR NETWORK -->
      <div class="col-xs-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">BERITA ACARA PERFORMANSI JARINGAN ICON+ MARET <?= date('Y'); ?></h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-12">
              <table id="tabel-berita-acara-performasi-jaringan" class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Unit PLN</th>
                    <th>Link</th>
                    <th>Product</th>
                    <th>Bandwith</th>
                    <th>Service ID</th>
                    <th>Asman</th>
                    <th>Kategori Layanan</th>
                    <th>Jumlah Gangguan</th>
                    <th>Durasi Gangguan (Menit)</th>
                    <th>Standard Availability (%)</th>
                    <th>Realisasi Availability (%)</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach ($dashboard_berita_acara_perfomasi as $key => $row) : ?>
                    <?php $realisasi_availability = ((60 * 24 * 30) - $row['durasi']) / (60 * 24 * 30) * 100 ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['nama_kantor_induk']; ?></td>
                      <td><?= $row['nama_service']; ?></td>
                      <td><?= $row['layanan']; ?></td>
                      <td><?= $row['kapasitas']; ?></td>
                      <td><?= $row['sid']; ?></td>
                      <td><?= $row['asman']; ?></td>
                      <td><?= $row['scada'] == 0 ? 'NON SCADA' : 'SCADA NON REDUNDANT';  ?></td>
                      <td><?= $row['jumlah_gangguan']; ?></td>
                      <td><?= $row['durasi'] ? $row['durasi'] : 0 ?></td>
                      <td>99</td>
                      <?php if ($realisasi_availability < 99.0) : ?>
                        <td class="bg-red"><?= number_format($realisasi_availability, 2) ?></td>
                      <?php elseif ($realisasi_availability < 100) : ?>
                        <td class="bg-warning"><?= number_format($realisasi_availability, 2) ?></td>
                      <?php else : ?>
                        <td><?= number_format($realisasi_availability, 2) ?></td>
                      <?php endif; ?>
                    </tr>

                    <?php $no++ ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <!-- TABEL HAR NETWORK -->
      <div class="col-xs-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">10 SID Scada yang Bermasalah</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-12">
              <table id="tabel-sid-paling-bermasalah" class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Service ID</th>
                    <th>Nama Service</th>
                    <th>Jumlah Gangguan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($dashboard_sid_scada->result_array() as $row) : ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $row['sid']; ?></td>
                      <td><?= $row['nama_service']; ?></td>
                      <td><?= $row['jumlah']; ?></td>
                    </tr>
                    <?php $no++ ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>



      <!-- TABEL HAR NETWORK -->
      <div class="col-xs-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Har Network</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-12">
              <table id="example5" class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Unit</th>
                    <th>Nama Perangkat</th>
                    <th>Device Type</th>
                    <th>Indikator Tampak Fisik</th>
                    <th>Indikator Indikator Lampu</th>
                    <th>Indikator Power Supply</th>
                    <th>Indikator Port</th>
                    <th>Indikator LAN</th>
                    <th>Indikator Konfigurasi</th>
                    <th>Indikator Backup Setting</th>
                    <th>Indikator Genset</th>
                    <th>Indikator UPS</th>
                    <th>Indikator Inverter</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($data_gangguan as $data) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data['nama_unit']; ?></td>
                      <td><?= $data['serial_number']; ?></td>
                      <td><?= $data['type']; ?></td>

                      <?php if ($data['tampak_fisik'] != 'Normal') { ?>
                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" class="btn btn-danger"><?= $data['tampak_fisik']; ?></a></td>
                      <?php
                      } else {  ?>

                        <td><button type="button" class=" btn btn-success"><?= $data['tampak_fisik']; ?></button></td>
                      <?php } ?>


                      <?php
                      if ($data['indikator_lampu'] != 'Normal') { ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" type="button" class="btn btn-danger"><?= $data['indikator_lampu']; ?></a></td>

                      <?php
                      } else {
                      ?>

                        <td><button type="button" class=" btn btn-success"><?= $data['indikator_lampu']; ?></button></td>

                      <?php } ?>

                      <?php
                      if ($data['power_supply'] != 'Normal') { ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" type="button" class="btn btn-danger"><?= $data['power_supply']; ?></a></td>

                      <?php
                      } else {
                      ?>

                        <td><button type="button" class=" btn btn-success"><?= $data['power_supply']; ?></button></td>

                      <?php } ?>

                      <?php
                      if ($data['PORT'] != 'Normal') { ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" type="button" class="btn btn-danger"><?= $data['PORT']; ?></a></td>

                      <?php
                      } else {
                      ?>

                        <td><button type="button" class=" btn btn-success"><?= $data['PORT']; ?></button></td>

                      <?php } ?>

                      <?php
                      if ($data['lan'] != 'Normal') { ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" type="button" class="btn btn-danger"><?= $data['lan']; ?></a></td>

                      <?php
                      } else {
                      ?>

                        <td><button type="button" class=" btn btn-success"><?= $data['lan']; ?></button></td>

                      <?php } ?>

                      <?php
                      if ($data['konfigurasi'] != 'Normal') { ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" class="btn btn-danger"><?= $data['konfigurasi']; ?></a></td>

                      <?php
                      } else {
                      ?>

                        <td><button type="button" class=" btn btn-success"><?= $data['konfigurasi']; ?></button></td>

                      <?php } ?>

                      <?php
                      if ($data['backup_setting'] != 'Normal') { ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" class="btn btn-danger"><?= $data['backup_setting']; ?></a></td>

                      <?php
                      } else {
                      ?>

                        <td><button type="button" class=" btn btn-success"><?= $data['backup_setting']; ?></button></td>

                      <?php } ?>

                      <?php
                      if ($data['genset'] != 'Normal') { ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" class="btn btn-danger"><?= $data['genset']; ?></a></td>

                      <?php
                      } else {
                      ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" class=" btn btn-success"><?= $data['genset']; ?></a></td>

                      <?php } ?>

                      <?php
                      if ($data['ups'] != 'Normal') { ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" class="btn btn-danger"><?= $data['ups']; ?></a></td>

                      <?php
                      } else {
                      ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" class=" btn btn-success"><?= $data['ups']; ?></a></td>

                      <?php } ?>

                      <?php
                      if ($data['inverter'] != 'Normal') { ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" class="btn btn-danger"><?= $data['inverter']; ?></a></td>

                      <?php
                      } else {
                      ?>

                        <td><a href="<?= base_url() ?>laporan/detailDataHar/<?= $data['id']; ?>" class=" btn btn-success"><?= $data['inverter']; ?></a></td>

                      <?php } ?>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>



      <!-- /.col (LEFT) -->

      <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->


    <!-- /.content -->
    <!-- /.box -->
    <br><br><br><br><br><br><br><br>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->