<div class="content-wrapper">

	<div class="content-header">
		<a href="#exampleModal" data-toggle="modal" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
		<a href="<?php echo base_url('arsip/pdf') ?>" class="btn btn-flat btn-danger btn-sm"><i class="fas fa fa-download "></i> Export PDF</a>


	</div>


	<!-- Isi Kontent -->
	<section class="content container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
					<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Data E-Arsip</div>
					<div class="box-body table-responsive">
					<table class="table table-bordered table-striped data">
							<thead>
								<td align=center>
									<tr>
										<th>No</th>
										<th>Nama File</th>
										<th>Nama Kegiatan</th>
										<th>Download</th>
										<th>Hapus</th>
									</tr>
								</td>
							</thead>
							<tbody>
								<?php foreach ($arsip as $file) {

								?>
									<tr>
										<td><?php echo $file->id; ?></td>
										<td><?php echo $file->filename; ?></td>
										<td><?php echo $file->description; ?></td>
										<td><a href="<?php echo base_url() . 'arsip/download/' . $file->id; ?>" class="btn btn-success" title="download"><i class="fa fa-user-times"></i> Download</button>
										<td width="10%" align="center">
											<a href="<?php echo base_url('arsip/del_file/' . $file->id) ?>">
												<button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')" class="btn btn-flat btn-sm btn-danger" title="Delete"><i class="fa fa-user-times"></i> Hapus</button>
											</a>
										</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- Akhir isi Kontent -->
</div>


<!-- Modal Tambah Data E-Arsip -->
<a href="<?php echo base_url('arsip') ?>"></a>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" action="<?php echo base_url(); ?>arsip/insert" enctype="multipart/form-data">

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope"></i> Tambah Data E-arsip</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div>
						<div class="modal-body">
							<div class="form-group">
								<label for="description" class="control-label col-md-3">Nama Kegiatan:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="description" placeholder="Masukan Nama Kegiatan " autocomplete="off" required>
								</div>
							</div>
						</div>	

						<div class="modal-body">
							<div class="form-group">
								<label for="upload" class="control-label col-md-3">File :</label>
								<div class="col-md-9">
									<input type="file" class="form-control" name="upload" placeholder="Masukan File" autocomplete="off" required>
								</div>
							</div>
						</div>
				</div>

				<div>
						<div class="modal-footer">
							<button type="submit" name="submit" class="btn btn-flat btn-primary"><i class="fas fa-save"></i> SIMPAN</button>
						</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>