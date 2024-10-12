<!DOCTYPE html>
<html>

<head>
    <link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
    <title>Saran</title>
    <?php $this->load->view('layout/css'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>

<body class="w-auto p-3 pt-5" id="saran">

    <?php $this->load->view('layout/header'); ?>

    <!--main-->
    <div class="bg">
        <div class="container-fluid">
            <div class="section py-5">
                <div class="mt-inner">
                    <div class="row px-5">
                        <h1 class="font-bold" style="color: #139e55;">Beri Kami Masukan Anda</h1>
                        <br>
                        <div class="alert alert-success col-md-6">
                            <form method="post" action="<?php echo base_url('saran/tambah') ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input type="text" name="nama_feedback" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label>No Telepon (WhatsApp)</label>
                                    <input type="text" name="no_telp_feedback" class="form-control" placeholder="Nomor Whatsapp" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pesan</label>
                                    <textarea type="text" name="pesan_feedback" class="form-control" placeholder="Pesan" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg btn-block"><span class="text-white">Kirim Masukan</span></button>
                            </form>
                        </div>
                        <div class="col-md-6" style="margin-top: 250px;">
                            <h1 class="text-content font-bold font-xl">Dari kita untuk kita</h1>
                            <h2 class="text-content font-bold font-xl" style="color: #139e55;">#ManusiaDermawan </h2>
                            <p class="text-content font-lg">"Sedekah akan membuka pintu rezeki dari arah yang tidak di sangka sebelumnya"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('layout/ingin'); ?>

    <?php $this->load->view('layout/footer'); ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <?php $this->load->view('layout/js'); ?>


    <?php
    if ($this->session->flashdata('message_success')) {
    ?>
        <script>
            swal({
                text: "<?php echo $this->session->flashdata('message_success'); ?>",
                icon: "success",
                button: true,
                timer: 99999
            });
        </script>
    <?php
    }
    ?>

</body>

</html>