<div class="content-wrapper">

	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url('Bigdata/update_bigdata') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="box box-solid">
                        <div class="box-body">
                            <input type="hidden" name="id" value="<?php echo $views['id'] ?>">
                            <div class="form-group">
                                <label for="jeniskegiatan" class="control-label col-md-3">Jenis Kegiatan :</label>
                                <div class="col-md-8">
                                    <select name="jeniskegiatan" id="jeniskegiatan" class="form-control" required>
                                        <option value="<?php echo $views['jeniskegiatan'] ?>"><?php echo $views['jeniskegiatan'] ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tanggal" class="control-label col-md-3 text-right">Tanggal :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control tanggal" name="tanggal" id="tanggal" value="<?php echo $views['tanggal'] ?>" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namakegiatan" class="control-label col-md-3 text-right">Nama Kegiatan :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="namakegiatan" id="namakegiatan" value="<?php echo $views['namakegiatan'] ?>" autocomplete="off" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="bidangpenyelenggara" class="control-label col-md-3 text-right">Bidang Penyelenggara :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="bidangpenyelenggara" id="bidangpenyelenggara" value="<?php echo $views['bidangpenyelenggara'] ?>" autocomplete="off" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="jumlahpeserta" class="control-label col-md-3 text-right">Jumlah Peserta :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="jumlahpeserta" id="jumlahpeserta" value="<?php echo $views['jumlahpeserta'] ?>" autocomplete="off" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="linksertifikat" class="control-label col-md-3 text-right">Link Sertifikat:</label>
                                <div class="col-md-8">
                                    <textarea name="linksertifikat" id="linksertifikat" class="form-control" rows="2"><?php echo $views['linksertifikat'] ?></textarea>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="berkas" class="control-label col-md-3 text-right"> Upload Foto Kegiatan :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="berkas" id="berkas" value="<?php echo $views['berkas'] ?>" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="berkas2" class="control-label col-md-3 text-right"> Upload Data Peserta :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="berkas2" id="berkas2" value="<?php echo $views['berkas2'] ?>" autocomplete="off" readonly>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-3 text-right"></label>
                                <div class="col-md-8">
                                   <button type="submit" name="submit" class="btn btn-success btn-flat"><i class="fas fa-sync"></i> UPDATE</button>
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







