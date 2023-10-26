<div class="content-wrapper">

    <body>
        <div class="content">
            <section class="content container-fluid">
                <div class="row">
                    <form method="POST" action="" class="text-center">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Dari Tanggal</label>
                                    <input class="form-control" type="date" name="tanggal1" value="<?= isset($_POST['tanggal1']) ?
                                    $_POST['tanggal1'] : date('Y-m-d') ?>" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Hingga Tanggal</label>
                                    <input class="form-control" type="date" name="tanggal2" value="<?= isset($_POST['tanggal2']) ?
                                      $_POST['tanggal2'] : date('Y-m-d') ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-2">
                                <a href="<?php echo base_url('services') ?>" class="btn btn-danger form-control"><i class="fa fa-arrow-left "></i> Kembali</a>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary form-control" name="btampilkan"><i class="fa fa-search"></i> Tampilkan</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['btampilkan'])) :
                    ?>

                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Data E-Services</div>
                                <div class="box-body table-responsive">
                                    <table class="table table-bordered table-striped data">
                                        <thead>
                                            <td align=center>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Nama Kegiatan</th>
                                                    <th>Jumlah Peserta</th>
                                                    <th><i class="fas fa-cogs"></i></th>
                                                </tr>
                                            </td>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $tgl1 = $_POST['tanggal1'];
                                                $tgl2 = $_POST['tanggal2'];
                                            

                                                // SELECT field1, field2 FROM tablename WHERE age BETWEEN $age1 AND $age2
                                             
                                                $no = 1;
                                                
                                                foreach ($services as $key => $row) { ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $row->tgl_kegiatan ?></td>
                                                    <td><?php echo $row->nama_kegiatan ?></td>
                                                    <td><?php echo $row->jumlah_peserta ?></td>

                                                    <td width="15%" align="center">
                                                        <a href="<?php echo base_url('services/detail/' . $row->id) ?>" title="Update">
                                                            <button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                        </a>

                                                        <a href="<?php echo base_url('services/update/' . $row->id) ?>" title="Update">
                                                            <button class="btn btn-flat btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                                        </a>

                                                        <a href="<?php echo base_url('services/delete/' . $row->id) ?>">
                                                            <button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')" class="btn btn-flat btn-sm btn-danger" title="Delete"><i class="fa fa-user-times"></i></button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        </div>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

            <link href="<?php echo base_url('assets/img/Integral.png') ?>" rel="icon" />

            <title><?= $title ?></title>

            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fontawesome-all.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/AdminLTE.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/_all-skins.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datepicker3.css">

    </body>
</div>