<!DOCTYPE html>
<html>

<head>
    <link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
    <title>Bukti Transaksi Pembayaran</title>
    <?php $this->load->view('layout/css'); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body class="w-auto p-3 pt-5">
    <?php $this->load->view('layout/header'); ?>
    <br>
    <div class="container " id="bukti">
        <h1>Bukti Transaksi Pembayaran Donasi</h1>
        <div class="content">
            <div class="alert alert-info" role="alert">
                Terima kasih atas donasinya <b>Yayasan Bina Insan Murni</b>
            </div>
            <div class="transaction-details">
                <h4><b>Detail Transaksi:</b></h4>
                <ul>
                    <li>Nama: <b><?php echo $nama_donatur; ?></b></li>
                    <li>Nominal Donasi: <b><?php echo 'Rp.' . number_format($jumlah_donasi, 0, ',', '.'); ?></b></li>
                    <li>Kode Transaksi: <b><?php echo $kode_transaksi; ?></b></li>
                    <li>Status: <b><?php echo $status_transaksi; ?></b></li>
                    <li>Metode Pembayaran: <b><?php echo $metode_pembayaran; ?></b></li>
                    <li>Tanggal Transaksi: <b><?php echo $tanggal_transaksi; ?></b></li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <p>&copy; 2023 Yayasan Bina Insan Murni. All Rights Reserved.</p>
        </div>
    </div>
    <?php $this->load->view('layout/ingin'); ?>
    <?php $this->load->view('layout/footer'); ?>
    <?php $this->load->view('layout/js'); ?>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js'); ?>"></script>
    <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>