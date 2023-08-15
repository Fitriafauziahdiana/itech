<div class="content-wrapper">
	<div class="content">
	<a href="<?php echo base_url('services') ?>" class="btn btn-flat btn-danger btn-sm"><i class="fa fa-arrow-left "></i> Kembali</a>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="box">
						<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Detail Data E-Services</div>
						<div class="box-body">
							

							<div class="col-md-12" style="margin-top: 20px;">
								<form class="form-horizontal">
									<div class="form-group">
										<div class="col-md-6 text-right">Tanggal</div>
										<div class="col-md-6"><?php echo $detail['tgl_kegiatan'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Nama Kegiatan</div>
										<div class="col-md-6"><?php echo $detail['nama_kegiatan'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Jumlah Peserta</div>
										<div class="col-md-6"><?php echo $detail['jumlah_peserta'] ?></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

	</div>
</div>








