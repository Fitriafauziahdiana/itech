<div class="content-wrapper">

	<div class="content-header">
		<a href="#exampleModal" data-toggle="modal" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
		<a href="<?php echo base_url('Excel_bigdata') ?>" class="btn btn-flat btn-success btn-sm"><i class="fas fa-file-excel "></i> Simpan Ke Excel</a>
	</div>


	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
					<div class="box-header bg-yellow"><i class="fas fa-envelope-open"></i> Big Data</div>
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped data">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal</th>
									<th>Jenis Kegiatan</th>
									<th>Nama Kegiatan</th>
                                    <th>Bidang Penyelenggara</th>
									<th>Jumlah Peserta</th>
									<th>Link Sertifikat</th>
									<th>Download</th>
									<th><i class="fas fa-cogs"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($bigdata as $key=>$row){ ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $row->tanggal ?></td>
										<td><span class="text-success"></i></span> <?php echo $row->jeniskegiatan ?></td>
										<td><?php echo $row->namakegiatan ?></td>
                                        <td><?php echo $row->bidangpenyelenggara ?></td>
										<td><?php echo $row->jumlahpeserta ?></td>
										<td><?php echo $row->linksertifikat ?></td>
										<td align="center">

											<a href="<?php echo base_url('./media/bigdata/'. $row->berkas) ?>" title="Download" 
											class="btn btn-sm btn-warning"><i class="fas fa-cloud-download-alt "></i> Foto</a> 

											<p></p>

											<a href="<?php echo base_url('./media/bigdata2/'. $row->berkas2) ?>" title="Download" 
											class="btn btn-sm btn-primary"><i class="fas fa-cloud-download-alt "></i> Data</a> 
											
											<td width="15%" align="center">

											<td align="center">

											

											<a href="<?php echo base_url('Bigdata/detail/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-eye"></i></button>
											</a>

											<a href="<?php echo base_url('Bigdata/update/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-success"><i class="fas fa-edit"></i></button>
											</a>

											<a href="<?php echo base_url('Bigdata/delete/'. $row->id) ?>">
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


<!-- Modal Tambah Big Data -->
<form action="<?php echo base_url('Bigdata/add') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope-open"></i> Tambah Big Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="form-group">
        		<label for="jeniskegiatan" class="control-label col-md-3">Jenis Kegiatan :</label>
        		<div class="col-md-9">
        			<select name="jeniskegiatan" id="jeniskegiatan" class="form-control" required>
        				<option value="">-- Belum Ditentukan --</option>
                        <?php foreach ($jeniskegiatan as $key => $row) {?>
                        <option value="<?php echo $row->jeniskegiatan ?>"><?php echo $row->jeniskegiatan ?></option>
                        <?php } ?>
        			</select>
        		</div>
        	</div>

        	<div class="form-group">
        		<label for="tanggal" class="control-label col-md-3">Tanggal :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control tanggal" name="tanggal" id="tanggal" placeholder="Tanggal" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="namakegiatan" class="control-label col-md-3">Nama Kegiatan:</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="namakegiatan" id="namakegiatan" placeholder="Nama Kegiatan" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="bidangpenyelenggara" class="control-label col-md-3">Bidang Penyelenggara :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="bidangpenyelenggara" id="bidangpenyelenggara" placeholder="Bidang Penyelenggara" autocomplete="off" required>
        		</div>
        	</div>
            <div class="form-group">
                <label for="jumlahpeserta" class="control-label col-md-3">Jumlah Peserta :</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="jumlahpeserta" id="jumlahpeserta" placeholder="Jumlah Peserta" autocomplete="off" required>
                </div>
            </div>
            <div class="form-group">
                <label for="linksertifikat" class="control-label col-md-3">Link Sertifikat :</label>
                <div class="col-md-9">
                    <textarea name="linksertifikat" id="linksertifikat" class="form-control" rows="2" placeholder="Link Sertifikat"></textarea>
                </div>
            </div>
        	<div class="form-group">
        		<label for="berkas" class="control-label col-md-3">Upload Foto Kegiatan  :</label>
        		<div class="col-md-9">
        			<input type="file" class="form-control" name="berkas" id="berkas" required>
        		</div>
        	</div>
			<div class="form-group">
        		<label for="berkas2" class="control-label col-md-3">Upload Data Peserta :</label>
        		<div class="col-md-9">
        			<input type="file" class="form-control" name="berkas2" id="berkas2" required>
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



