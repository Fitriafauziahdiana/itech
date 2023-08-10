<!DOCTYPE html>
<html>

<head>
    <title>Integraltechnology</title>



</head>

<body>
    <h3 style="text-align: center;">LAPORAN DATA MULTIMEDIA</h3>
    <table border="1" width="100%" style="text-align:center;">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Kegiatan</th>
            <th>Link Video</th>
            
        </tr>

        <?php $no = 1;
        foreach ($multimedia as $key => $row) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->tanggal ?></td>
                <td><?php echo $row->namakegiatan ?></td>
                <td><?php echo $row->linkvideo ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>