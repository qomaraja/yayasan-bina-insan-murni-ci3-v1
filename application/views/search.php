<!DOCTYPE html>
<html>

<head>
    <link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
    <title>Search</title>
    <?php $this->load->view('layout/css'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>

<body class="w-auto p-3 pt-5">

    <?php $this->load->view('layout/header'); ?>

    <?php if (isset($results)) { ?>
        <div class="results-container p-5">
            <h1 style="color: #139e55;">Hasil Pencarian:</h1>
            <?php if (count($results) > 0) { ?>
                <div class="row">
                    <?php foreach ($results as $row) { ?>
                        <div class="col-md-4" id="search">
                            <a href="<?php echo base_url('/donasi/detail/' . $row->id_donasi); ?>">
                                <div class="card mb-4" id="card">
                                    <img src="<?php echo base_url('assets/' . $row->img1); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row->nama_donasi; ?></h5>
                                        <p class="card-text text-truncate-2"><?php echo $row->deskripsi_donasi; ?></p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-link"><?php echo $row->masa_aktif; ?><br>Hari Lagi</p>
                                            </div>
                                            <div class="col">
                                                <p class="card-link text-end">Terkumpul<br><?php echo 'Rp.' . nominal($row->perolehan_donasi); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <p>Tidak ada hasil ditemukan.</p>
            <?php } ?>
        </div>
    <?php } ?>

    <?php $this->load->view('layout/ingin'); ?>

    <?php $this->load->view('layout/footer'); ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <?php $this->load->view('layout/js'); ?>

</body>

</html>