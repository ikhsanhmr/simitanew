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
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr class="bg-success">
										<th width="2%" class="text-center">No</th>
										<th width="10%" class="text-center">Nama Perangkat</th>
										<th width="10%" class="text-center">Device Type</th>
										<th width="10%" class="text-center">Serial Number</th>
										<th width="25%" class="text-center">Solusi</th>
										<th width="25%" class="text-center" rowa="2">Rencana selanjutnya</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($waktu as $data) { ?>
										<?php foreach ($stok_view->result_array() as $stok) { ?>
											<?php if (in_array("Ada error", $data) || in_array("Rusak", $data)) : ?>


												<tr>
													<td><?= $no++; ?></td>
													<td class="text-center">
														<p><?= $data['nama_perangkat']; ?></p>
													</td>
													<td class="text-center">
														<p><?= $data['type']; ?></p>
													</td>
													<td class="text-center">
														<p><?= $data['serial_number']; ?></p>
													</td>
													<td>
														<ul class="list-group">
															<!-- SOLUSI -->
															<?php if ($data['tampak_fisik'] != 'Normal') {
																if ($data['solusi_tampak_fisik'] != null) { ?>
																	<b>Solusi Tampak fisik : </b>
																	<li class="list-group-item" style="height: 70px;margin-bottom: 10px">
																		<?php echo $data['solusi_tampak_fisik']; ?></li>
															<?php }
															} ?>
															<?php
															if ($data['indikator_lampu'] != 'Normal') {
																if ($data['solusi_indikator_lampu'] != null) { ?>
																	<b>Solusi Indikator Lampu : </b>
																	<li class="list-group-item" style="height: 70px;margin-bottom: 10px">
																		<?php echo $data['solusi_indikator_lampu']; ?></li>
															<?php }
															}
															?>
															<?php
															if ($data['power_supply'] != 'Normal') {
																if ($data['solusi_power_supply'] != null) { ?>
																	<b>Solusi Power Supply : </b>
																	<li class="list-group-item" style="height: 70px;margin-bottom: 10px">
																		<?php echo $data['solusi_power_supply']; ?></li>
															<?php }
															}
															?>
															<?php
															if ($data['lan'] != 'Normal') {
																if ($data['solusi_lan'] != null) { ?>
																	<b>Solusi LAN : </b>
																	<li class="list-group-item" style="height: 70px;margin-bottom: 10px">
																		<?php echo $data['solusi_lan']; ?></li>
															<?php }
															}
															?>
															<?php
															if ($data['port'] != 'Normal') {
																if ($data['solusi_port'] != null) { ?>
																	<b>Solusi Port : </b>
																	<li class="list-group-item" style="height: 70px;margin-bottom: 10px">
																		<?php echo $data['solusi_port']; ?></li>
															<?php }
															}
															?>
															<?php
															if ($data['konfigurasi'] != "Normal") {
																if ($data['solusi_konfigurasi'] != null) { ?>
																	<b>Solusi Konfigurasi : </b>
																	<li class="list-group-item" style="height: 70px;margin-bottom: 10px">
																		<?php echo $data['solusi_konfigurasi']; ?></li>
															<?php }
															}
															?>
															<?php
															if ($data['backup_setting'] != "Normal") {
																if ($data['solusi_backup_setting'] != null) { ?>
																	<b>Solusi Backup Setting : </b>
																	<li class="list-group-item" style="height: 70px;margin-bottom: 10px">
																		<?php echo $data['solusi_backup_setting']; ?></li>
															<?php }
															}
															?>
															<?php
															if ($data['genset'] != 'Normal') {
																if ($data['solusi_genset'] != null) { ?>
																	<b>Solusi Genset : </b>
																	<li class="list-group-item" style="height: 70px;margin-bottom: 10px">
																		<?php echo $data['solusi_genset']; ?></li>
															<?php }
															}
															?>
															<?php
															if ($data['ups'] != "Normal") {
																if ($data['solusi_ups'] != null) { ?>
																	<b>Solusi UPS : </b>
																	<li class="list-group-item" style="height: 70px;margin-bottom: 10px">
																		<?php echo $data['solusi_ups']; ?></li>
															<?php }
															}
															?>
															<?php
															if ($data['inverter'] != "Normal") {
																if ($data['solusi_inverter'] != null) { ?>
																	<b>Solusi Inverter : </b>
																	<li class="list-group-item" style="height: 70px;margin-bottom: 10px">
																		<?php echo $data['solusi_inverter']; ?></li>
															<?php }
															}
															?>
														</ul>
													</td>
													<td>
														<ul class="list-group">
															<!-- TINDAK LANJUT -->
															<?php if ($data['tampak_fisik'] != "Normal") { ?>
																<?php if ($data['solusi_tampak_fisik'] == 'Penggantian tampilan fisik dari perangkat.') { ?>
																	<b>Tindak Lanjut Tampak fisik : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian perangkat
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk perangkat
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=tampak_fisik&solusi_field=solusi_tampak_fisik' ?>">finish</a>
																	</li>
																<?php } elseif ($data['solusi_tampak_fisik'] == 'Perbaikan tampilan fisik dari perangkat') { ?>
																	<b>Tindak Lanjut Tampak fisik : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian perangkat
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk perangkat
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=tampak_fisik&solusi_field=solusi_tampak_fisik' ?>">finish</a>
																	</li>
															<?php }
															} ?>

															<!-- INDIKATOR -->
															<?php if ($data['indikator_lampu'] != "Normal") { ?>
																<?php if ($data['solusi_indikator_lampu'] == 'Penggantian pada perangkat indikator lampu') { ?>
																	<b>Tindak Lanjut Indikator Lampu : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian indikator
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk indikator
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=indikator_lampu&solusi_field=solusi_indikator_lampu' ?>">finish</a>
																	</li>
																<?php } elseif ($data['solusi_indikator_lampu'] == 'Perbaikan pada perangkat indikator lampu') { ?>
																	<b>Tindak Lanjut Indikator Lampu : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian indikator
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk indikator
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=indikator_lampu&solusi_field=solusi_indikator_lampu' ?>">finish</a>
																	</li>
															<?php }
															} ?>

															<!-- POWER SUPPLY -->
															<?php if ($data['power_supply'] != "Normal") { ?>
																<?php if ($data['solusi_power_supply'] == 'Penggantian Power Supply dari perangkat.') { ?>
																	<b>Tindak Lanjut Power Supply : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian power supply
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk power supply
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=power_supply&solusi_field=solusi_power_supply' ?>">finish</a>
																	</li>
																<?php } elseif ($data['solusi_power_supply'] == 'Perbaikan pada perangkat Power Supply lampu') { ?>
																	<b>Tindak Lanjut Power supply : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian power supply
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk power supply
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=power_supply&solusi_field=solusi_power_supply' ?>">finish</a>
																	</li>
															<?php }
															} ?>

															<!-- LAN -->
															<?php if ($data['lan'] != "Normal") { ?>
																<?php if ($data['solusi_lan'] == 'Penggantian LAN pada perangkat.') { ?>
																	<b>Tindak Lanjut LAN : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian LAN
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk LAN
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=lan&solusi_field=solusi_lan' ?>">finish</a>
																	</li>
																<?php } elseif ($data['solusi_lan'] == 'Perbaikan LAN pada perangkat') { ?>
																	<b>Tindak Lanjut LAN : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian LAN
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk LAN
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=lan&solusi_field=solusi_lan' ?>">finish</a>
																	</li>
															<?php }
															} ?>

															<!-- PORT -->
															<?php if ($data['port'] != "Normal") { ?>
																<?php if ($data['solusi_port'] == 'Penggantian Port pada perangkat.') { ?>
																	<b>Tindak Lanjut Port : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian Port
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk Port
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=port&solusi_field=solusi_port' ?>">finish</a>
																	</li>
																<?php } elseif ($data['solusi_port'] == 'Perbaikan Port pada perangkat') { ?>
																	<b>Tindak Lanjut Port : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian Port
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk Port
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=port&solusi_field=solusi_port' ?>">finish</a>
																	</li>
															<?php }
															} ?>

															<!-- Konfigurasi -->
															<?php if ($data['konfigurasi'] != "Normal") { ?>
																<?php if ($data['solusi_konfigurasi'] == 'Penggantian settingan konfigurasi pada perangkat.') { ?>
																	<b>Tindak Lanjut Konfigurasi : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian settingan konfigurasi
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk settingan konfigurasi
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=konfigurasi&solusi_field=solusi_konfigurasi' ?>">finish</a>
																	</li>
																<?php } elseif ($data['solusi_konfigurasi'] == 'Perbaikan konfigurasi pada perangkat') { ?>
																	<b>Tindak Lanjut Konfigurasi : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian settingan konfigurasi
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk settingan konfigurasi
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=konfigurasi&solusi_field=solusi_konfigurasi' ?>">finish</a>
																	</li>
															<?php }
															} ?>

															<!-- BACKUP SETTING -->
															<?php if ($data['backup_setting'] != "Normal") { ?>
																<?php if ($data['solusi_backup_setting'] == 'Penggantian Backup Setting pada perangkat.') { ?>
																	<b>Tindak Lanjut Backup Setting : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian bakup setting
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk bakup setting
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=backup_setting&solusi_field=solusi_backup_setting' ?>">finish</a>
																	</li>
																<?php } elseif ($data['solusi_backup_setting'] == 'Perbaikan Backup Setting pada perangkat') { ?>
																	<b>Tindak Lanjut Backup Setting : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera melakukan pergantian backup setting
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk backup setting
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=backup_setting&solusi_field=solusi_backup_setting' ?>">finish</a>
																	</li>
															<?php }
															} ?>

															<!-- GENSET -->
															<?php if ($data['genset'] != "Normal") { ?>
																<?php if ($data['solusi_genset'] == 'Disarankan untuk menambahkan Genset') { ?>
																	<b>Tindak Lanjut Genset : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera menambah genset
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk genset
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=genset&solusi_field=solusi_genset' ?>">finish</a>
																	</li>
															<?php }
															} ?>

															<!-- UPS -->
															<?php if ($data['ups'] != "Normal") { ?>
																<?php if ($data['solusi_ups'] == 'Disarankan untuk menambahkan UPS') { ?>
																	<b>Tindak Lanjut UPS : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera menambah UPS
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk UPS
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=ups&solusi_field=solusi_ups' ?>">finish</a>
																	</li>
															<?php }
															} ?>

															<!-- INVERTER -->
															<?php if ($data['inverter'] != "Normal") { ?>
																<?php if ($data['solusi_inverter'] == 'Disarankan untuk menambahkan Inverter') { ?>
																	<b>Tindak Lanjut Inverter : </b>
																	<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px;margin-bottom: 10px">
																		<?php if ($stok['jumlah_perangkat'] > 0) { ?>
																			Diharapkan segera menambah Inverter
																		<?php } else { ?>
																			Diharapkan melakukan pengadaan untuk Inverter
																		<?php } ?>
																		<a class="badge" style="margin-top:10px;background-color:blue" href="<?= 'Pos?id=' . $data['id'] . '&field=Inverter&solusi_field=solusi_inverter' ?>">finish</a>
																	</li>
															<?php }
															} ?>

														</ul>

													</td>
												</tr>
											<?php endif ?>
										<?php } ?>
									<?php } ?>
								</tbody>
							</table>
						</div>
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