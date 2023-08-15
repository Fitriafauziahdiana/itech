<div class="content-wrapper">
	<section class="content">
	<a href="<?php echo base_url('publikasi') ?>" class="btn btn-flat btn-danger btn-sm"><i class="fa fa-arrow-left "></i> Kembali</a>
		<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="box">
						<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Detail Publikasi</div>
						<div class="box-body">
							<div class="col-md-12 text-center">
								<h4>RINCIAN DATA PUBLIKASI </h4>
							</div>
							<div class="col-md-12" style="margin-top: 20px;">
								<form class="form-horizontal">
									<div class="form-group">
										<div class="col-md-6 text-right">Tanggal</div>
										<div class="col-md-6"><?php echo $view['tanggal'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Nama Kegiatan</div>
										<div class="col-md-6"><?php echo $view['nama_kegiatan'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Judul Flyer</div>
										<div class="col-md-6"><?php echo $view['judul_flyer'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Link Publikasi InternaL</div>
										<div class="col-md-6"><?php echo $view['linkinter'] ?></div>
									</div>
                                    <div class="form-group">
										<div class="col-md-6 text-right">Link Publikasi Eksternal</div>
										<div class="col-md-6"><?php echo $view['linkekster'] ?></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

	</section>
</div>




