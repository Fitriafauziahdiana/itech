<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="<?php echo base_url('assets/img/Integral.png') ?>" rel="icon" />
    <title>Integraltechnology</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <h3 style="text-align: center;">LAPORAN DATA E-ARSIP</h3>
    <table style="width:100%">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama File</th>
            <th>Nama Kegiatan</th>
        </tr>

        <?php $no=1; foreach ($arsip as $file){ ?>
            <tr>
                <td align=center><?php echo $no++ ?></td>
                <td align=center><?php echo $file->tanggal; ?></td>
                <td align=center><?php echo $file->filename; ?></td>
                <td align=center><?php echo $file->description; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>