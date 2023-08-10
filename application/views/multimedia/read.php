<div class="content-wrapper">

	<div class="content-header">
		<a href="#exampleModal" data-toggle="modal" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
		<a href="<?php echo base_url('multimedia/pdf') ?>" class="btn btn-flat btn-success btn-sm"><i class="fas fa fa-download "></i> Export PDF</a>
	</div>



	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
					<div class="box-header bg-yellow"><i class="fas fa-clipboard-list"></i> Data Multimedia</div>
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped data">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal</th>
                                    <th>Nama Kegiatan</th>
									<th>Link Video</th>
									<th><i class="fas fa-cogs"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($multimedia as $key=>$row){ ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $row->tanggal ?></td>
                                        <td><?php echo $row->namakegiatan ?></td>
										<td><?php echo $row->linkvideo ?></td>
										<td width="20%" align="center">
										<script>
											// cetak multimedia
											$('.cetak_kegiatan').on('click',function(){
												var id= $(this).attr("id");
												$.ajax({
													url: 'application/multimedia/cetak.php',
													method: 'POST',
													data: {id: id},
													success:function(data){
														$('#tampil_data').html(data);  
														document.getElementById("judul").innerHTML='Cetak Data';
													}
												});
												// Membuka modal
												$('#modal').modal('show');
											});
											</script>
											

											<a href="<?php echo base_url('Multimedia/detail/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-eye"></i></button>
											</a>

											<a href="<?php echo base_url('Multimedia/update/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-success"><i class="fas fa-edit"></i></button>
											</a>


											<a href="<?php echo base_url('Multimedia/delete/'. $row->id) ?>">
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


<!-- Modal Tambah  Data Multimedia-->
<form action="<?php echo base_url('Multimedia/add') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope"></i> Tambah Data Multimedia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="form-group">
        		<label for="tanggal" class="control-label col-md-3">Tanggal :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control tanggal" name="tanggal" id="tanggal" placeholder="Tanggal" autocomplete="off" required>
        		</div>
        	</div>

            <div class="form-group">
                <label for="namakegiatan" class="control-label col-md-3">Nama Kegiatan :</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="namakegiatan" id="namakegiatan" placeholder="Nama Kegiatan" autocomplete="off" required>
                </div>
            </div>
            <div class="form-group">
                <label for="linkvideo" class="control-label col-md-3">Link Video:</label>
                <div class="col-md-9">
                     <input type="text" class="form-control" name="linkvideo" id="linkvideo" placeholder="Link Video" autocomplete="off" required>
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


