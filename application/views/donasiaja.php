<!DOCTYPE html>
<html>

<head>
    <link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
    <title>Kampanye</title>
    <?php $this->load->view('layout/css'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>

<body class="w-auto p-3 pt-5">

    <?php $this->load->view('layout/header'); ?>

    <!--main-->
    <div class="container-fluid-full">
        <div class="row p-5" id="city">
            <div class="section">
                <div class="col-md-12 text-center">
                    <h1 class="font-purple font-bold font-xl">Mari Bantu Mereka Yang Membutuhkan</h1>
                    <p class="font-medium font-md">"Kami siap menerima dan menyalurkan donasi anda"</p>
                    <br>
                </div>

                <!-- wilayah urutkan -->
                <!-- <div class="dropdown col-md-12 mb-3">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                        urutkan
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('/') ?>">Waktu</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('home/ascending') ?>">A-Z</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('home/descending') ?>">Z-A</a></li>
                    </ul>
                </div> -->
                <!--wilayah urutkan-->

                <!-- wilayah donasi -->
                <div class="row">
                    <?php foreach ($donasi as $row) { ?>
                        <div class="col-3">
                            <a href="<?php echo base_url('/donasi/detail/' . $row->id_donasi); ?>">
                                <div class="card mx-2">
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
                <!-- wilayah donasi -->

            </div>
        </div>

        <?php $this->load->view('layout/ingin'); ?>

        <?php $this->load->view('layout/footer'); ?>

    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <?php $this->load->view('layout/js'); ?>

</body>

</html>