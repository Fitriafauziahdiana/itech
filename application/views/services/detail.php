<div class="content-wrapper">
	<div class="content">

			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="box">
						<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Detail Data E-Services</div>
						<div class="box-body">
							<div class="col-md-6 text-right">
								<a href="<?php echo base_url('./media/services/'.$detail['berkas']) ?>" title="Jadwal Kegiatan">
									<h1 style="font-size: 100px;"><i class="fas fa-file-archive"></i></h1>
								</a>
								<h4>Jadwal Kegiatan</h4>
							</div>
							<div class="col-md-6 text-left">
								<a href="<?php echo base_url('./media/services/'.$detail['berkas']) ?>" title="Data Peserta">
									<h1 style="font-size: 100px;"><i class="fas fa-file-archive"></i></h1>
								</a>
								<h4>Data Peserta</h4>
							</div>

							<div class="col-md-12" style="margin-top: 20px;">
								<form class="form-horizontal">
									<div class="form-group">
										<div class="col-md-6 text-right">Tanggal</div>
										<div class="col-md-6"><?php echo $detail['tgl_kegiatan'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Nama Kegiatan</div>
										<div class="col-md-6"><?php echo $detail['nama_kegiatan'] ?>/</div>
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







