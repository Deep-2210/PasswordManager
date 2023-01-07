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
        
        <form class="login_form_border" action="<?= site_url('send_email/change_password') ?>" method="post">
          
          <div class="font-weight-bold text-center mb-4">
          <h5 class="login_heading">Set New Password</h5>
        </div>
        <?php
          if ($this->session->flashdata('error_reset_pswd')) {
            ?>
          <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('error_reset_pswd'); ?>
          </div>
          <?php
          }
          ?>
          <?php
          if ($this->session->flashdata('pswd_changed_error')) {
            ?>
          <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('pswd_changed_error'); ?>
          </div>
          <?php
          }
          ?>
          <div class="form-group input_gap">
            <input type="text" class="form-control  form-control-lg input_field" placeholder="Enter your New Password" name="new_password" value="<?= set_value('new_password') ?>">
            <small><?php echo form_error("new_password" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>

          </div>

             <div class="form-group input_gap">
            <input type="text" class="form-control  form-control-lg input_field" placeholder="Enter your Confirm Password" name="con_new_password" value="<?= set_value('con_new_password') ?>">
            <small><?php echo form_error("con_new_password" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>

          </div>

          <button type="submit" class="btn btn-success mx-auto d-block mt-3 form_button">Set</button>
        </form>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
    </div>
  </div>
</div>
  <?php $this->load->view('include/js_file_links'); ?>

</body>
</html>