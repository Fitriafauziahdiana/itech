<div class="content-wrapper">
	<section class="content">
		
		<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="box">
						<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Detail Big Data</div>
						<div class="box-body">

							<div class="col-md-6 text-right">
								<a href="<?php echo base_url('./media/bigdata/'.$views['berkas']) ?>" title="File Big Data">
								<h1 style="font-size: 100px;"><i class="fas fa-file-archive"></i></h1>
								</a>
								<h4>Foto Kegiatan</h4>
							</div>

							<div class="col-md-6 text-left">
								<a href="<?php echo base_url('./media/bigdata/'.$views['berkas2']) ?>" title="File Big Data">
								<h1 style="font-size: 100px;"><i class="fas fa-file-archive"></i></h1>
								</a>
								<h4>Data Peserta</h4>
							</div>

							<div class="col-md-12" style="margin-top: 20px;">
								<form class="form-horizontal">
								<div class="form-group">
										<div class="col-md-6 text-right">Jenis Kegiatan</div>
										<div class="col-md-6"><span class="text-success"></i></span> <?php echo $views['jeniskegiatan'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Tanggal Surat</div>
										<div class="col-md-6"><?php echo $views['tanggal'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Nama Kegiatan</div>
										<div class="col-md-6"><?php echo $views['namakegiatan'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Bidang Penyelenggara</div>
										<div class="col-md-6"><?php echo $views['bidangpenyelenggara'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Jumlah Peserta</div>
										<div class="col-md-6"><?php echo $views['jumlahpeserta'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Link Sertifikat</div>
										<div class="col-md-6"><?php echo $views['linksertifikat'] ?></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

	</section>
</div>



