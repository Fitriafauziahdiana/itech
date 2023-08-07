<div class="content-wrapper">
	<section class="content">
		
		<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="box">
						<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Cetak Data Multimedia</div>
						<div class="box-body">
							<div class="col-md-12 text-center">
								<h4><?php echo $view['nama_aplikasi'] ?></h4>
							</div>
							<div class="col-md-12" style="margin-top: 20px;">
								<form class="form-horizontal">

									<div class="form-group">
										<div class="col-md-6 text-right">Tanggal</div>
										<div class="col-md-6"><?php echo $view['tanggal'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Nama Kegiatan</div>
										<div class="col-md-6"><?php echo $view['deskripsi'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Link Video</div>
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




