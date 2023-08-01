<div class="content-wrapper">

	<div class="content-header">
		<a href="#exampleModal" data-toggle="modal" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
	</div>


	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
					<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Data E-Services</div>
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped data">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal</th>
									<th>Nama Kegiatan</th>
                                    <th>Jumlah Peserta</th>
                                    <th>Unduh</th>
									<th><i class="fas fa-cogs"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($services as $key=>$row){ ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $row->tgl_kegiatan ?></td>
										<td><?php echo $row->nama_kegiatan ?></td>
                                        <td><?php echo $row->jumlah_peserta?></td>
                                        <td align="center">
                                            <a href="<?php echo base_url('./media/services/'. $row->berkas) ?>" title="Download" class="btn btn-sm btn-warning"><i class="fas fa-cloud-download-alt "></i> Jadwal Kegiatan</a>

                                            <a href="<?php echo base_url('./media/services/'. $row->skhun) ?>" title="Download" class="btn btn-sm btn-primary"><i class="fas fa-cloud-download-alt "></i> Data Peserta</a>
                                        </td>
										<td width="15%" align="center">
											<a href="<?php echo base_url('services/detail/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-eye"></i></button>
											</a>

											<a href="<?php echo base_url('services/update/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-success"><i class="fas fa-edit"></i></button>
											</a>

											<a href="<?php echo base_url('services/delete/'. $row->id) ?>">
												<button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')" class="btn btn-flat btn-sm btn-danger" title="Delete"><i class="fa fa-user-times"></i></button>
											</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- Akhir isi Kontent -->
</div>


<!-- Modal Tambah Data E-Services -->
<form action="<?php echo base_url('services/add') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope"></i> Tambah Data E-Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="form-group">
        		<label for="tgl_kegiatan" class="control-label col-md-3">Tanggal :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control tanggal" name="tgl_kegiatan" id="tgl_kegiatan" placeholder="Masukan Tanggal Kegiatan " autocomplete="off" required>
        		</div>
        	</div>

        	<div class="form-group">
        		<label for="nama_kegiatan" class="control-label col-md-3">Nama Kegiatan :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan" placeholder="Masukan Nama Kegiatan" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="jumlah_peserta" class="control-label col-md-3">Jumlah Peserta :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="jumlah_peserta" id="jumlah_peserta" placeholder="Masukan Jumlah Peserta" autocomplete="off" required>
        		</div>
        	</div>

        	<div class="form-group">
        		<label for="berkas" class="control-label col-md-3">Upload Jadwal Kegiatan :</label>
        		<div class="col-md-9">
        			<input type="file" class="form-control" name="berkas" id="berkas" required>
        		</div>
        	</div>
            <div class="form-group">
                <label for="berkas" class="control-label col-md-3">Upload Data Peserta :</label>
                <div class="col-md-9">
                    <input type="file" class="form-control" name="berkas2" id="berkas" required>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-flat btn-primary"><i class="fas fa-save"></i> SIMPAN</button>
      </div>
    </div>
  </div>
</div>
</form>









<!-- /**
 * Aplikasi e-Arsip Untuk Sekolah versi GRATIS 
 * untuk sekolah SD/Sederajat, SMP/Sederajat, SMA/Sederajat
 * @version    1.0
 * @author     Puguh Sulistyo Pambudi | https://facebook.com/puguhsulistyo.pambudi | puguh.polijen@gmail.com | 0822 7440 4756
 * @copyright  (c) 2018
 * @link       https://codepackid.com
 * @since      Version 1.0
 *
 * PERINGATAN :
 * 1. TIDAK DIPERKENANKAN MEMPERJUALBELIKAN APLIKASI INI TANPA SEIZIN DARI PIHAK PENGEMBANG APLIKASI.
 * 2. TIDAK DIPERKENANKAN MENGHAPUS KODE SUMBER APLIKASI.
 */ -->