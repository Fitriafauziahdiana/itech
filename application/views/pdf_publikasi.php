<!DOCTYPE html>
<html>

<head>
    <title>Integraltechnology</title>



</head>

<body>
    <h3 style="text-align: center;">LAPORAN DATA PUBLIKASI</h3>
    <table border="1" width="100%" style="text-align:center;">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Kegiatan</th>
            <th>Judul Flyer</th>
            <th>Link Publikasi Internal</th>
            <th>Link Publikasi Eksternal</th>
            <th><i class="fas fa-cogs"></i></th>
        </tr>

        <?php $no = 1;
        foreach ($publikasi as $key => $row) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->tanggal ?></td>
                <td><?php echo $row->nama_kegiatan ?></td>
                <td><?php echo $row->judul_flyer ?></td>
                <td><?php echo $row->linkinter ?></td>
                <td><?php echo $row->linkekster ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>