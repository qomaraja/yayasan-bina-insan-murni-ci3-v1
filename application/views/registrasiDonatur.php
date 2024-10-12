<!DOCTYPE html>
<html>

<head>
    <link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
    <title>Register Donatur</title>
    <?php $this->load->view('layout/css'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-BsxPYr_Cn0bGXdw4"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body class="w-auto p-3 pt-5">

    <?php $this->load->view('layout/header'); ?>

    <!--main-->

    <div class="bg">
        <div class="container-fluid">
            <div class="section py-5">
                <?php
                foreach ($donasi as $row) {
                ?>
                    <div class="mt-inner">
                        <div class="row px-5">
                            <h1 class="font-bold" style="color: #139e55;">Silakan Masukan Data Anda</h1>
                            <br>
                            <div class="alert alert-success col-md-6">

                                <form id="payment-form" method="post" action="<?php echo base_url('Donatur/create') ?>">
                                    <input type="hidden" name="id_donasi" value="<?php echo $row->id_donasi; ?>">
                                    <input type="hidden" name="result_type" id="result-type" value="">
                                    <input type="hidden" name="result_data" id="result-data" value="">

                                    <div class="form-group">
                                        <h4 class="elip font-bold" style="margin-bottom: 30px"><b><?php echo $row->nama_donasi; ?></b></h4>
                                        <label for="exampleInputEmail1">Donasi</label>
                                        <input type="text" name="jumlah_donasi" id="jumlah_donasi" class="form-control" placeholder="Rp." required />
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_donatur">Nama Lengkap</label>
                                        <input type="text" name="nama_donatur" id="nama_donatur" class="form-control" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="anonim" id="anonim">
                                        <label for="anonim">Donasi sebagai Anonim</label>
                                    </div>
                                    <div class="form-group">
                                        <label>No Telepon (WhatsApp)</label>
                                        <input type="text" name="no_telp_donatur" id="no_telp_donatur" class="form-control" class="no_telp_donatur" placeholder="No Telepon" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pesan</label>
                                        <textarea type="text" name="pesan_donatur" class="form-control" placeholder="Pesan" rows="3" required></textarea>
                                    </div>
                                    <button type="button" class="btn btn-success white btn-lg btn-block" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading">Lanjut Pembayaran</button>
                                </form>

                            <?php
                        }
                            ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 350px;">
                                <h1 class=" text-content font-bold font-xl">Dari kita untuk kita</h1>
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
    <?php $this->load->view('layout/js'); ?>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js'); ?>"></script>
    <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('#load').click(function(event) {
            event.preventDefault();

            var jumlah_donasi = $("#jumlah_donasi").val();
            var nama_donatur = $("#nama_donatur").val();
            var no_telp_donatur = $("#no_telp_donatur").val();

            $.ajax({
                type: 'POST',
                url: '<?= site_url('payment/token') ?>',
                data: {
                    jumlah_donasi: jumlah_donasi,
                    nama_donatur: nama_donatur,
                    no_telp_donatur: no_telp_donatur
                },
                cache: false,
                success: function(data) {
                    console.log('token = ' + data);

                    var resultType = document.getElementById('result-type');
                    var resultData = document.getElementById('result-data');

                    snap.pay(data, {
                        onSuccess: function(result) {
                            resultType.value = 'success';
                            resultData.value = JSON.stringify(result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                        },
                        onPending: function(result) {
                            resultType.value = 'pending';
                            resultData.value = JSON.stringify(result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                        },
                        onError: function(result) {
                            resultType.value = 'error';
                            resultData.value = JSON.stringify(result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                        }
                    });
                }
            });

        });
    </script>

</body>

</html>