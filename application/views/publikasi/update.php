<div class="content-wrapper">

	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				
				<form action="<?php echo base_url('Publikasi/update_publikasi') ?>" method="post" class="form-horizontal">
					<div class="box box-solid">
						<div class="box-body">
							<input type="hidden" name="id" value="<?php echo $detail['id'] ?>">
							<div class="form-group">
								<label for="tgl_kegiatan" class="control-label col-md-3">Tanggal :</label>
								<div class="col-md-9">
									<input type="text" class="form-control tanggal" name="tgl_kegiatan" id="tgl_kegiatan" placeholder="Masukan Tanggal" autocomplete="off" required>
								</div>
							</div>
				        	
				             <div class="form-group">
				                <label for="nama_kegiatan" class="control-label col-md-3">Nama Kegiatan :</label>
				                <div class="col-md-9">
				                     <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan" value="<?php echo $detail['nama_kegiatan'] ?>" autocomplete="off" required>
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="judul_flyer" class="control-label col-md-3">Judul Flyer :</label>
				                <div class="col-md-9">
				                    <input type="text" class="form-control" name="judul_flyer" id="judul_flyer" value="<?php echo $detail['judul_flyer'] ?>" autocomplete="off" required>
				                </div>
				            </div>
				           
							<div class="form-group">
								<label for="linkinter" class="control-label col-md-3">Link Publikasi Internal :</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="linkinter" id="linkinter" placeholder="linkinter" autocomplete="off" required>
								</div>
							</div>
							<div class="form-group">
								<label for="linkekster" class="control-label col-md-3">Link Publikasi Eksternal:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="linkekster" id="linkekster" placeholder="linkekster" autocomplete="off" required>
								</div>
							</div>

				        	<div class="form-group">
				        		<label for="" class="control-label col-md-3"></label>
				        		<div class="col-md-8">
				        			<button type="submit" name="submit" class="btn btn-flat btn-success"><i class="fas fa-sync"></i> UPDATE</button>
				        		</div>
				        	</div>
						</div>
					</div>
				</form>
					
			</div>
		</div>

	</section>
	<!-- Akhir isi Kontent -->
</div>







