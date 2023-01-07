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
        
        <form class="login_form_border" action="<?= site_url('send_email/sendEmail') ?>" method="post">
          <div class="font-weight-bold text-center mb-4">
          <h5 class="login_heading">Forget Password</h5>
        </div>
        <?php
          if($this->session->flashdata('mail_error')){
          ?>
          <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('mail_error'); ?>
          </div>
          <?php
          }
          if($this->session->flashdata('mail_not_found_error')){
             ?>
          <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('mail_not_found_error'); ?>
          </div>
          <?php
          }
          if($this->session->flashdata('mail_not_send')){
             ?>
          <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('mail_not_send'); ?>
          </div>
          <?php
          }

         ?>
          <div class="form-group input_gap">
            <input type="text" class="form-control  form-control-lg input_field" placeholder="Enter your E-mail" name="forget_mail" value="<?= set_value('forget_mail') ?>">
            <small><?php echo form_error("forget_mail" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>

          </div>
            <p class="text-right"><a href="#">Back to Login</a></p>
          <button type="submit" class="btn btn-success mx-auto d-block mt-3 form_button">Send Reset Link</button>
        </form>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
    </div>
  </div>
</div>
  <?php $this->load->view('include/js_file_links'); ?>

</body>
</html>