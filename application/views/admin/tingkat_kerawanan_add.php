<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tingkat Kerawanan
			<small>Add Data</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Admin</a></li>
			<li class="active">Add Tingkat Kerawanan</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<?= $this->session->flashdata('pesan'); ?>
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->


				<!-- Form Element sizes -->
				<div class="box box-success">
					<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/tingkat_kerawanan_add_action" enctype="multipart/form-data">

						<div class="box-header with-border">
							<h3 class="box-title">Add Data</h3>
						</div>
						<div class="box-body">
							<div class="col-lg-10">
								<div class="form-group">
									<label for="kategori" class="col-sm-3 control-label">Tingkat Kerawanan</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" id="tingkat_kerawanan" name="tingkat_kerawanan" required />
									</div>
								</div>
							</div>
							<div class="col-lg-10">
								<div class="form-group">
									<label for="kategori" class="col-sm-3 control-label">Status Kerawanan</label>
									<div class="col-sm-5">
										<?php
										$data = ["Low", "Medium", "High"];
										?>
										<select name="status_kerawanan" class="form-control" required>
											<option disabled selected>Pilih Status</option>
											<?php foreach ($data as $d) : ?>
												<option value="<?= $d ?>"><?= $d; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-10">
								<div class="form-group">
									<label for="kategori" class="col-sm-3 control-label">Solusi Tingkat Kerawanan</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" id="solusi_kerawanan" name="solusi_kerawanan" required />
									</div>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<div class="pull-center">

								<a href="<?php echo base_url(); ?>admin/tingkat_kerawanan_view" class="btn btn-danger">Kembali</a>
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