<!DOCTYPE html>
<html>
    <head>
    <link href="<?php echo base_url('assets/img/Integral.png') ?>" rel="icon" />
    <title>Integraltechnology</title>



</head>
<body>
    
    <h3 style="text-align: center;" >LAPORAN DATA E-SERVICE</h3>
    <table border="1" width="100%" style="text-align:center;">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
			<th>Nama Kegiatan</th>
            <th>Jumlah Peserta</th>
        </tr>

        <?php $no=1; foreach ($services as $key=>$row){ ?>
			<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row->tgl_kegiatan ?></td>
			<td><?php echo $row->nama_kegiatan ?></td>
            <td><?php echo $row->jumlah_peserta?></td>
			</tr>
	<?php } ?>
    </table>

</body></html>