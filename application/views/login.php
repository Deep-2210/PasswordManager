<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php $this->load->view('include/css_file_links'); ?>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
<div class="container-fluid">
  <div class="container">
    <div class="row pb-5">
      
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
      <div class="col-lg-6 col-sm-12 col-md-12 p-3  mt-5"> 
        
        <form class="login_form_border" action="<?= site_url('login/loginAuth') ?>" method="post">
          <div class="font-weight-bold text-center mb-4">
          <h5 class="login_heading">Login</h5>
        </div>
        <?php
          if($this->session->flashdata('login_error')){
          ?>
          <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('login_error'); ?>
          </div>
          <?php
          }
          if ($this->session->flashdata('Email_Not')) {
            ?>
          <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('Email_Not'); ?>
          </div>
          <?php
          }
          elseif ($this->session->flashdata('Wrong_Password')) {
            ?>
          <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('Wrong_Password'); ?>
          </div>
          <?php
          }
          elseif ($this->session->flashdata('mail_send')) {
            ?>
          <div class="alert alert-success">
            <strong>Hurrah!</strong> <?php echo $this->session->flashdata('mail_send'); ?>
          </div>
          <?php
          }
          elseif ($this->session->flashdata('pswd_changed_success')) {
            ?>
          <div class="alert alert-success">
            <strong>Password Changed Successfully!</strong> <?php echo $this->session->flashdata('pswd_changed_success'); ?>
          </div>
          <?php
          }
          ?>
          <div class="form-group input_gap">
            <input type="text" class="form-control  form-control-lg input_field" placeholder="Enter your E-mail" name="username" value="<?= set_value('username') ?>">
            <small><?php echo form_error("username" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>
          <div class="form-group input_gap">
            <input type="password" class="form-control form-control-lg  input_field" placeholder="Enter password" name="password" value="<?= set_value('password') ?>">
            <small><?php echo form_error("password" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>
            <p class="text-right"><a href="<?php echo site_url('Send_email') ?>">Forget Password</a></p>
          <button type="submit" class="btn btn-success mx-auto d-block mt-3 form_button">Login</button>
          <p class="mx-auto form_footer text-center mt-2">Don't have an Account <a href="<?= base_url('signup') ?>">Create Account</a></p>
        </form>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
    </div>
  </div>
</div>
  <?php $this->load->view('include/js_file_links'); ?>

</body>
</html>