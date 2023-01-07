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
      <div class="col-lg-6 col-sm-12 col-md-12 p-3 mt-5"> 
      <form class="login_form_border" action="<?= site_url('signup/createAccount') ?>" method="post">
        <div class="font-weight-bold text-center mb-4">
          <h5 class="login_heading">SignUp</h5>
        </div>
          <?php
          if($this->session->flashdata('error')){
          ?>
          <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('error'); ?>
          </div>
          <?php
          }
          ?>
          <div class="form-group input_gap">
            <input type="text" class="form-control form-control-lg input_field" placeholder="First Name" name="fname" value="<?= set_value('fname') ?>">
            <small><?php echo form_error("fname" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>
          <div class="form-group input_gap">
            <input type="text" class="form-control form-control-lg  input_field" placeholder="Last Name" name="lname" value="<?= set_value('lname') ?>">
            <small><?php echo form_error("lname" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>
          <div class="form-group input_gap">
            <input type="text" class="form-control  form-control-lg input_field" placeholder="Enter your E-mail" name="email" value="<?= set_value('email') ?>">
            <small><?php echo form_error("email" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>
          <div class="form-group input_gap">
            <input type="password" class="form-control form-control-lg  input_field" placeholder="Enter password" name="pswd" value="<?= set_value('pswd') ?>">
            <small><?php echo form_error("pswd" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>
          <div class="form-group input_gap">
            <input type="password" class="form-control form-control-lg  input_field" placeholder="Confirm password" name="confirm_pswd" value="<?= set_value('confirm_pswd') ?>">
            <small><?php echo form_error("confirm_pswd" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>
          <button type="submit" class="btn btn-success mx-auto d-block mt-4 form_button" name="submit">Submit</button>

          <p class="mx-auto form_footer text-center mt-2">Already have an Account <a href="<?= base_url('login') ?>">Login</a></p>
        </form>
        
        
      </div>
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
    </div>
  </div>
</div>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
    </div>
  </div>
</div>
  <?php $this->load->view('include/js_file_links'); ?>

</body>
</html>