<!DOCTYPE html>
<html><head>
<title>Integraltechnology</title>



</head>
<body>
    <h3 style="text-align: center;" >LAPORAN BIG DATA</h3>
    <table border="1" width="100%" style="text-align:center;">
    <tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Jenis Kegiatan</th>
		<th>Nama Kegiatan</th>
        <th>Bidang Penyelenggara</th>
		<th>Jumlah Peserta</th>
		<th>Link Sertifikat</th>

	</tr>

    <?php $no=1; foreach ($bigdata as $key=>$row){ ?>
		<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row->tanggal ?></td>
		<td><span class="text-success"></i></span> <?php echo $row->jeniskegiatan ?></td>
		<td><?php echo $row->namakegiatan ?></td>
        <td><?php echo $row->bidangpenyelenggara ?></td>
		<td><?php echo $row->jumlahpeserta ?></td>
		<td><?php echo $row->linksertifikat ?></td>
		</tr>
	<?php } ?>
    </table>

</body></html>