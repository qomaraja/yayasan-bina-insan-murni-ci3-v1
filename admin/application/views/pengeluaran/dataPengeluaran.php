<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
    <title>Data Pengeluaran</title>
    <?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('layout/header') ?>
        <?php $this->load->view('layout/sidebar') ?>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>Pengeluaran</h1>
                <ol class="breadcrumb">
                    <li><a href="../admin/Pengeluaran"><i class="fa fa-file"></i>Pengeluaran</a></li>
                    <li class="active"><i class="fa fa-dashboard"></i> Data</li>
                </ol>
            </section>

            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chart-box">
                            <div class="table-responsive m-top-2">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <!-- <th>Katagori</th>
                                            <th>Target</th> -->
                                            <th>Pengeluaran</th>
                                            <th>Donasi</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal</th>
                                            <!-- <th>Masa Habis</th>
                                            <th>Sisa Hari</th> -->
                                            <th>Gambar</th>
                                            <!-- <th>Gambar 2</th>
                                            <th>Gambar 3</th>
                                            <th>Gambar 4</th>
                                            <th>Gambar 5</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;

                                        foreach ($tmpPengeluaran as $rows) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $rows->nama_pengeluaran; ?></td>
                                                <!-- <td><?php echo $rows->kategori_donasi; ?></td> -->
                                                <!-- <td><?php echo 'Rp.' . nominal($rows->target_donasi); ?></td> -->
                                                <td><?php echo 'Rp.' . nominal($rows->perolehan_pengeluaran); ?></td>
                                                <td><?php echo $rows->nama_donasi; ?></td>
                                                <!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Klik Disini</button>
                                        <div id="demo" class="collapse">
                                        
                                        </div> -->
                                                <td><?php echo $rows->deskripsi_pengeluaran; ?></td>
                                                <td><?php echo tgl_indo($rows->tgl_pengeluaran); ?></td>
                                                <!-- <td><?php echo tgl_indo($rows->masa_donasi); ?></td> -->
                                                <!-- <td><?php echo $rows->masa_aktif; ?></td> -->
                                                <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/' . $rows->img); ?>" /></td>
                                                <!-- <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/' . $rows->img2); ?>" /></td>
                                                <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/' . $rows->img3); ?>" /></td>
                                                <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/' . $rows->img4); ?>" /></td>
                                                <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/' . $rows->img5); ?>" /></td> -->
                                                <td>

                                                    <center>
                                                        <a href="<?php echo base_url('admin/Pengeluaran/edit/' . $rows->id_pengeluaran); ?>" onclick="return confirm(' Apakah anda yakin EDIT DATA PENGELUARAN ini ? ');"><i class="fa fa-edit fa-lg"></i></a>
                                                        <span class="spasi">
                                                            <a href="<?php echo base_url('admin/Pengeluaran/delete/' . $rows->id_pengeluaran) ?>" onclick="return confirm(' Apakah anda yakin HAPUS DATA PENGELUARAN ini ? ');"></span><i class="fa fa-trash fa-lg "></a></i>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <?php $this->load->view('layout/footer'); ?>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?php $this->load->view('layout/js'); ?>

</body>

</html>