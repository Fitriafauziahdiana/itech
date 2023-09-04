<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="<?php echo base_url('assets/img/Integral.png') ?>" rel="icon" />
	<title>Integraltechnology</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    
</head>
<body>



<div class="container">
<a href="<?php echo base_url('arsip') ?>" class="btn btn-flat btn-danger btn-sm"><i class="fa fa-arrow-left "></i> Kembali</a>
	<h1 class="page-header text-center">File Data E-Arsip</h1>
		
	<div class="row">
		<div class="col-sm-4">
			<h3>Pilih File Upload</h3>
			<form method="POST" action="<?php echo base_url(); ?>file1/insert" enctype="multipart/form-data">
			<div class="form-group">
        		<label for="nama_kegiatan" class="control-label col-md-3">Nama Kegiatan :</label>
        		<div class="col-md-9">
        			<select name="nama_kegiatan" id="nama_kegiatan"  class="form-control">
        				<option value="">-- Belum Ditentukan --</option>
                        <?php foreach ($datanamakeg as $key => $row) {?>
                        <option value="<?php echo $row->nama_kegiatan ?>"><?php echo $row->nama_kegiatan ?> </option>
                        <?php } ?>
        			</select>
        		</div>
        	</div>

			
				<div class="form-group">
					<label>Descriptiion:</label>
					<input type="text" name="description" class="form-control" required>
				</div>

				<div class="form-group">
					<label>File:</label>
					<input type="file" name="upload" required>
				</div>
				<button type="submit" class="btn btn-primary">SIMPAN</button>
			</form>
			<?php
				if($this->session->flashdata('success')){
					?>
					<div class="alert alert-success text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php
				}
 
			?>
		</div>
		<div class="col-sm-8">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama File</th>
						<th>Deskripsi</th>
						<th>Nama Kegiatan</th>
						<th>Download</th>
                        <th>Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($file1 as $file){
						?>
						<tr>
							<td><?php echo $file->id; ?></td>
							<td><?php echo $file->filename; ?></td>
							<td><?php echo $file->description; ?></td>
							<td><?php echo $file->datanamakeg; ?></td>
							<td><a href="<?php echo base_url().'file1/download/'.$file->id; ?>" class="btn btn-success"title="download"><i class="fa fa-user-times"></i> Download</button>
                            <td width="10%" align="center">
							<a href="<?php echo base_url('file1/del_file/'.$file->id) ?>">
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
</body>
</html>

