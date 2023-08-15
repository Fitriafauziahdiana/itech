<div class="content-wrapper">
	<section class="content">
	<a href="<?php echo base_url('aplikasi') ?>" class="btn btn-flat btn-danger btn-sm"><i class="fa fa-arrow-left "></i> Kembali</a>
		
		<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="box">
						<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Detail Aplikasi</div>
						<div class="box-body">
							<div class="col-md-12 text-center">
								<h4>RINCIAN DATA APLIKASI </h4>
							</div>
							<div class="col-md-12" style="margin-top: 20px;">
								<form class="form-horizontal">
									<div class="form-group">
										<div class="col-md-6 text-right">Nama Aplikasi</div>
										<div class="col-md-6"><?php echo $view['nama_aplikasi'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Tanggal</div>
										<div class="col-md-6"><?php echo $view['tanggal'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Deskripsi</div>
										<div class="col-md-6"><?php echo $view['deskripsi'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Link Aplikasi</div>
										<div class="col-md-6"><?php echo $view['link_aplikasi'] ?></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

	</section>
</div>




