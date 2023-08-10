<!DOCTYPE html>
<html><head>
<title>Integraltechnology</title>
<link href="<?php echo base_url('assets/img/Integral.png') ?>" rel="icon" />

</head>
<body>
    <h3 style="text-align: center;" >LAPORAN DATA APLIKASI</h3>
    <table border="1" width="100%" style="text-align:center;">
    <link href="<?php echo base_url('assets/img/Integral.png') ?>" rel="icon" />
         <tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Nama Aplikasi</th>
        <th>Deskripsi</th>
		<th>Link Aplikasi</th>
		</tr>

        <?php $no=1; foreach ($aplikasi as $key=>$row){ ?>
            <tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row->tanggal ?></td>
			<td><?php echo $row->nama_aplikasi ?></td>
            <td><?php echo $row->deskripsi ?></td>
			<td><?php echo $row->link_aplikasi ?></td>
			</tr>
	<?php } ?>
    </table>

</body></html>