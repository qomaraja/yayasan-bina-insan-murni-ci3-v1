<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
    <title>Artikel</title>
    <?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('layout/header') ?>
        <?php $this->load->view('layout/sidebar') ?>

        <center><img src="<?php echo base_url('assets/front/images/maintenance.png'); ?>" width="45%"></center>

        <?php $this->load->view('layout/footer'); ?>
    </div>

    <?php $this->load->view('layout/js'); ?>

</body>

</html>