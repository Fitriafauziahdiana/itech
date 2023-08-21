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
<a href="<?php echo base_url('services') ?>" class="btn btn-flat btn-danger btn-sm"><i class="fa fa-arrow-left "></i> Kembali</a>
	<h1 class="page-header text-center">File Data Peserta dan Kegiatan</h1>
		
	<div class="row">
		<div class="col-sm-4">
			<h3>Pilih File Upload</h3>
			<form method="POST" action="<?php echo base_url(); ?>files/insert" enctype="multipart/form-data">
				<div class="form-group">
					<label>Deskripsi:</label>
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
						<th>Download</th>
                        <th>Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($files as $file){
						?>
						<tr>
							<td><?php echo $file->id; ?></td>
							<td><?php echo $file->filename; ?></td>
							<td><?php echo $file->description; ?></td>
							<td><a href="<?php echo base_url().'files/download/'.$file->id; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt"></a></td>
                            <td width="10%" align="center">
							<a href="<?php echo base_url('files/del_file/'.$file->id) ?>">
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

