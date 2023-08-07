<section class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header bg-yellow"><i class="fas fa-university"></i> Data Perusahaan</div>
					<div class="box-body">
						<div class="col-md-12">
							<form action="<?php echo base_url('Perusahaan/update_data') ?>" method="post" class="form-horizontal">
								<input type="hidden" class="form-control perusahaan" name="id" value="<?php echo $detail['id'] ?>">
								<div class="form-group">
									<label for="kasek" class="control-label col-md-3">Kepala :</label>
									<div class="col-md-9">
										<input type="text" class="form-control perusahaan" name="kepala_perusahaan" value="<?php echo $detail['kepala_perusahaan'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="nama-perusahaan" class="control-label col-md-3">Nama Perusahaan :</label>
									<div class="col-md-9">
										<input type="text" class="form-control perusahaan" name="nama_perusahaan" value="<?php echo $detail['nama_perusahaan'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="no_telp" class="control-label col-md-3">No Telp Perusahaan:</label>
									<div class="col-md-9">
										<input type="text" class="form-control perusahaan" name="no_telp" value="<?php echo $detail['no_telp'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="alamat" class="control-label col-md-3">Alamat Perusahaan :</label>
									<div class="col-md-9">
										<input type="text" class="form-control perusahaan" name="alamat" value="<?php echo $detail['alamat'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="website" class="control-label col-md-3">Website Perusahaan :</label>
									<div class="col-md-9">
										<input type="text" class="form-control perusahaan" name="website" value="<?php echo $detail['website'] ?>">
									</div>
								</div>

								<div class="form-group">
									<label for="website" class="control-label col-md-3"></label>
									<div class="col-md-9">
										<button type="submit" name="submit" class="btn btn-flat btn-success"><i class="fas fa-sync"></i> UPDATE</button>
									</div>
								</div>
							
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
