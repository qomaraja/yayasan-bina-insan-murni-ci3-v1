<!DOCTYPE html>
<html>

<head>
    <link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
    <title>Detail Donasi</title>
    <?php $this->load->view('layout/css'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="w-auto p-3 pt-5">

    <?php $this->load->view('layout/header'); ?>

    <br>
    <div class="container-fluid" id="detail">
        <?php if (!empty($donasi)) : ?>
            <?php foreach ($donasi as $row) : ?>
                <div class="row mt-inner">
                    <h1 class="font-bold py-4"><?php echo $row->nama_donasi; ?></h1>

                    <div class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo base_url('assets/' . $row->img1); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url('assets/' . $row->img2); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url('assets/' . $row->img3); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url('assets/' . $row->img4); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url('assets/' . $row->img5); ?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="thumbnail col-md-6">
                        <h3 class="eclip text-left mt-inner">Tercapai: <b><?php echo 'Rp ' . nominal($row->perolehan_donasi); ?></b></h3>
                        <br>
                        <h3 class="eclip text-left mt-inner">Target: <?php echo 'Rp ' . nominal($row->target_donasi); ?></h3>
                        <br>
                        <h3 class="eclip text-left mt-inner">Berakhir Tgl: <?php echo tgl_indo($row->masa_donasi); ?></h3>
                        <br>
                        <h3 class="eclip text-left mt-inner">Sisa Hari: <?php echo $row->masa_aktif; ?> Hari</h3>
                        <br>
                        <a href="<?php echo base_url('/Donatur/register/' . $row->id_donasi); ?>" class="btn btn-success btn-lg btn-block" role="button">Donasi Sekarang</a>
                    </div>
                </div>

                <ul class="nav nav-tabs pt-5" id="navtabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#deskripsi_donasi" data-toggle="tab">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pengeluaran_donasi" data-toggle="tab">Pengeluaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pesan_donatur" data-toggle="tab">Pesan</a>
                    </li>
                </ul>

                <div class="tab-content mt-4">
                    <div class="tab-pane fade show active" id="deskripsi_donasi">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="eclip text-left mt-inner"><?php echo $row->deskripsi_donasi; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pengeluaran_donasi">
                        <?php if (!empty($pengeluaran)) : ?>
                            <div class="col-md-12 mt-4">
                                <h5 class="font-bold mb-3">Detail Pengeluaran</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>Pengeluaran</th>
                                                <th>Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pengeluaran as $r) : ?>
                                                <tr>
                                                    <td><?php echo tgl_indo($r->tgl_pengeluaran); ?></td>
                                                    <td><?php echo $r->nama_pengeluaran; ?></td>
                                                    <td><?php echo 'Rp ' . nominal($r->perolehan_pengeluaran); ?></td>
                                                    <td><?php echo $r->deskripsi_pengeluaran; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php else : ?>
                            <p>Data pengeluaran tidak tersedia.</p>
                        <?php endif; ?>
                    </div>

                    <div class="tab-pane fade" id="pesan_donatur">
                        <!-- Looping melalui data_transaksi -->
                        <?php if (!empty($transaksi)) : ?>
                            <!-- Pesan Donatur -->
                            <div class="comments-container">
                                <h3>Pesan dari Para Donatur</h3>
                                <?php foreach ($transaksi as $tr) : ?>
                                    <div class="comment">
                                        <div class="comment-header">
                                            <!-- <img src="path/to/user-avatar.jpg" alt="Avatar" class="avatar"> -->
                                            <div class="comment-user-info">
                                                <strong><?php echo $tr->nama_donatur; ?></strong>
                                                <span class="comment-time"><?php echo date('j M Y, H:i', strtotime($tr->tgl_transaksi)); ?></span>
                                            </div>
                                        </div>
                                        <div class="comment-body">
                                            <p><?php echo htmlspecialchars($tr->pesan_donatur); ?></p>
                                            <div class="donation-amount">Donasi: Rp <?php echo number_format($tr->jumlah_donasi, 0, ',', '.'); ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else : ?>
                            <p>Pesan Dari Donatur Tidak Ada.</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Data donasi tidak tersedia.</p>
        <?php endif; ?>
    </div>

    <?php $this->load->view('layout/ingin'); ?>
    <?php $this->load->view('layout/footer'); ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '+1d',
            todayHighlight: true
        });
    </script>

    <?php $this->load->view('layout/js'); ?>
</body>

</html>