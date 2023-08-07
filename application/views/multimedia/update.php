<div class="content-wrapper">

	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				
				<form action="<?php echo base_url('multimedia/update_multimedia') ?>" method="post" class="form-horizontal">
					<div class="box box-solid">
						<div class="box-body">
							<input type="hidden" name="id" value="<?php echo $detail['id'] ?>">

							<div class="form-group">
				        		<label for="tanggal" class="control-label col-md-3">Tanggal:</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control tanggal" name="tangga" id="tanggal" value="<?php echo $detail['tanggal'] ?>" autocomplete="off" required>
				        		</div>
							</div>	

				        	 <div class="form-group">
				                <label for="namakegiatan" class="control-label col-md-3">Nama Kegiatan :</label>
				                <div class="col-md-7">
				                    <input type="text" class="form-control" name="namakegiatan" id="namakegiatan" value="<?php echo $detail['namakegiatan'] ?>" autocomplete="off" required>
				                </div>
				            </div>

				            <div class="form-group">
				                <label for="linkvideo" class="control-label col-md-3">Link Video :</label>
				                <div class="col-md-7">
				                     <input type="text" class="form-control" name="linkvideo" id="linkvideo" value="<?php echo $detail['linkvideo'] ?>" autocomplete="off" required>
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
