<div class="content-wrapper">

	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				
				<form action="<?php echo base_url('Inbox/update_inbox') ?>" method="post" class="form-horizontal">
					<div class="box box-solid">
						<div class="box-body">
							<input type="hidden" name="id" value="<?php echo $view['id'] ?>">
							<div class="form-group">
				        		<label for="tanggal" class="control-label col-md-3 text-right">Tanggal :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control tanggal" name="tanggal" id="tanggal" value="<?php echo $view['tanggal'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="nama_aplikasi" class="control-label col-md-3 text-right">Nama Aplikasi :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control" name="nama_aplikasi" id="nama_aplikasi" value="<?php echo $view['nama_aplikasi'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="deskripsi" class="control-label col-md-3 text-right">Deskripsi :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?php echo $view['deskripsi'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="link_aplikasi" class="control-label col-md-3 text-right">Link Aplikasi :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control" name="link_aplikasi" id="link_aplikasi" value="<?php echo $view['link_aplikasi'] ?>" autocomplete="off" required>
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