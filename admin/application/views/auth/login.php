<!DOCTYPE html>
<html lang="en">

<head>
  <link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
  <?php $this->load->view('layout/meta'); ?>
  <title>Login</title>
  <?php $this->load->view('layout/css'); ?>

<body class="body-bg-color">
  <div class="wrapper">
    <?php
    if ($this->session->flashdata('message')) {
    ?>

      <div role="alert" class="alert alert-danger alert-dismissible">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
        <center><strong><?php echo $this->session->flashdata('message'); ?></strong></center>
      </div>

    <?php
    } ?>

    <div class="form-body">
      <form action="<?php echo base_url('admin/login/auth'); ?>" method="post" class="col-form" novalidate="">
        <div class="col-logo"><img alt="" src="<?php echo base_url('assets/admin/img/binsani_logo_full.png'); ?>" width="85%"></a></div>
        <fieldset>
          <section>
            <div class="form-group has-feedback">
              <label class="control-label">Username</label>
              <input class="form-control" name="username" value="admin" placeholder="Username" type="text" />
              <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
            </div>
          </section>
          <section>
            <div class="form-group has-feedback">
              <label class="control-label">Password</label>
              <input class="form-control" name="password" value="admin" placeholder="Password" type="password" />
              <span class="fa fa-lock form-control-feedback" aria-hidden="true"></span>
            </div>
          </section>
        </fieldset>
        <footer class="text-center">
          <button type="submit" class="btn btn-success pull-center">Login</button>
      </form>
      <br>
    </div>

  </div>
  <?php $this->load->view('layout/js'); ?>
</body>

</html>