<!DOCTYPE html>
<html>

<head>
    <link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
    <title>Artikel</title>
    <?php $this->load->view('layout/css'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>

<body>

    <?php $this->load->view('layout/header'); ?>

    <!--main-->
    <div class="container-fluid-full">
        <br><br><br>

        <center><img src="<?php echo base_url('assets/front/images/maintenance.png'); ?>" width="45%"></center>

        <?php $this->load->view('layout/footer'); ?>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <?php $this->load->view('layout/js'); ?>

</body>

</html>