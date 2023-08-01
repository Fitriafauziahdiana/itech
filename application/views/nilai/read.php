<div class="content-wrapper">

	<div class="content-header">
		<a href="#exampleModal" data-toggle="modal" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
	</div>


	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
					<div class="box-header bg-yellow"><i class="fas fa-clipboard-list"></i> Arsip Nilai Siswa</div>
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped data">
							<thead>
								<tr>
									<th>No</th>
									<th>Kelas / Kompetensi Keahlian</th>
									<th>Semester</th>
                                    <th>TA</th>
									<th>Wali Kelas</th>
									<th><i class="fas fa-cogs"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($nilai as $key=>$row){ ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $row->kelas, "-", $row->kode, "/", $row->jurusan ?></td>
										<td><?php echo $row->semester ?></td>
                                        <td><?php echo $row->tahun_ajaran ?></td>
										<td><?php echo $row->guru ?></td>
										<td align="center">
											<a href="<?php echo base_url('./media/nilai/'. $row->berkas1) ?>" title="Download" class="btn btn-sm btn-warning"><i class="fas fa-cloud-download-alt "></i></a>

											<a href="<?php echo base_url('nilai/update/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-success"><i class="fas fa-edit"></i></button>
											</a>

											<a href="<?php echo base_url('nilai/delete/'. $row->id) ?>">
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


<!-- Modal Tambah Surat Masuk -->
<form action="<?php echo base_url('Nilai/add') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope-open"></i> Tambah Surat Keluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="form-group">
        		<label for="jurusan" class="control-label col-md-3">Kompetensi Keahlian :</label>
        		<div class="col-md-9">
        			 <select name="jurusan" id="jurusan" class="form-control">
                        <option value="">...</option>
                        <?php foreach ($jurusan as $key=>$row){ ?>
                            <option value="<?php echo $row->kode ?>"><?php echo $row->jurusan ?></option>
                        <?php } ?>       
                    </select>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="kelas" class="control-label col-md-3">Kelas :</label>
        		<div class="col-md-4">
        			 <select name="kelas" id="kelas" class="form-control">
                        <option value="Kelas 10">Kelas X (10)</option>   
                        <option value="Kelas 11">Kelas XI (11)</option>
                        <option value="Kelas 12">Kelas XII (12)</option>      
                    </select>
        		</div>
                <div class="col-md-4">
                    <select name="kode" id="kode" class="form-control">
                        <option value="A">A</option>   
                        <option value="B">B</option>
                        <option value="C">C</option>    
						<option value="-">-</option>     
                    </select>
                </div>
        	</div>
        	<div class="form-group">
        		<label for="semester" class="control-label col-md-3">Semester :</label>
        		<div class="col-md-9">
        			<select name="semester" id="semester" class="form-control">
                        <option value="1 (Satu)">1 (Satu)</option>   
                        <option value="2 (Dua)">2 (Dua)</option>      
                    </select>
        		</div>
        	</div>
            <div class="form-group">
                <label for="tahun_ajaran" class="control-label col-md-3">Tahun Pelajaran :</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="tahun_ajaran" id="tahun_ajaran" placeholder="Tahun Ajaran" autocomplete="off" required>
                </div>
            </div>
            <div class="form-group">
                <label for="guru" class="control-label col-md-3">Wali Kelas :</label>
                <div class="col-md-9">
                     <input type="text" class="form-control" name="guru" id="guru" placeholder="Wali Kelas" autocomplete="off" required>
                </div>
            </div>
        	<div class="form-group">
        		<label for="berkas1" class="control-label col-md-3">Upload Nilai :</label>
        		<div class="col-md-9">
        			<input type="file" class="form-control" name="berkas1" id="berkas1" required>
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