<div class="content-wrapper">

	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				
				<form action="<?php echo base_url('services/update_services') ?>" method="post" class="form-horizontal">
					<div class="box box-solid">
						<div class="box-body">
							<input type="hidden" name="id" value="<?php echo $detail['id'] ?>">
							<div class="form-group">
				        		<label for="tgl_kegiatan" class="control-label col-md-3">Tanggal:</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control tanggal" name="tgl_kegiatan" id="tgl_kegiatan" value="<?php echo $detail['tgl_kegiatan'] ?>" autocomplete="off" required>
				        		</div>
							</div>	
				        	<div class="form-group">
				        		<label for="nama_kegiatan" class="control-label col-md-3">Nama Kegiatan :</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan" value="<?php echo $detail['nama_kegiatan'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
							<div class="form-group">
				        		<label for="jumlah_peserta" class="control-label col-md-3">Jumlah Peserta :</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control" name="jumlah_peserta" id="jumlah_peserta"value="<?php echo $detail['jumlah_peserta'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        
				        	<div class="form-group">
				        		<label for="berkas" class="control-label col-md-3">Upload Jadwal Kegiatan :</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control" name="berkas" id="berkas" value="<?php echo $detail['berkas'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				            <div class="form-group">
				                <label for="bk" class="control-label col-md-3">Upload Data Peserta :</label>
				                <div class="col-md-9">
				                   <input type="text" class="form-control" name="bk" id="bk" value="<?php echo $detail['bk'] ?>" autocomplete="off" required>
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





