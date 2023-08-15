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
    <h3 style="text-align: center;">LAPORAN DATA MULTIMEDIA</h3>
    <table style="width:100%">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Kegiatan</th>
            <th>Link Video</th>
            
        </tr>

        <?php $no = 1;
        foreach ($multimedia as $key => $row) { ?>
            <tr>
                <td align=center><?php echo $no++ ?></td>
                <td align=center><?php echo $row->tanggal ?></td>
                <td align=center><?php echo $row->namakegiatan ?></td>
                <td align=center><?php echo $row->linkvideo ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>