<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="<?php echo base_url('assets/img/Integral.png') ?>" rel="icon" />
	<title>Integraltechnology</title>
<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
</style>   
</head>
<body>
    <h3 style="text-align: center;" >LAPORAN DATA APLIKASI</h3>
    <table style="width:100%">
         <tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Nama Aplikasi</th>
        <th>Deskripsi</th>
		<th>Link Aplikasi</th>
		</tr>

        <?php $no=1; foreach ($aplikasi as $key=>$row){ ?>
            <tr>
			<td align=center><?php echo $no++ ?></td>
			<td align=center><?php echo $row->tanggal ?></td>
			<td align=center><?php echo $row->nama_aplikasi ?></td>
            <td align=center><?php echo $row->deskripsi ?></td>
			<td align=center><?php echo $row->link_aplikasi ?></td>
			</tr>
	<?php } ?>
    </table>

</body></html>