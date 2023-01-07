 <div class="container-fluid">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
      <div class="col-lg-6 col-sm-12 col-md-12">
        
        <form class="form_border" action="<?= site_url('dashboard_area/profile/profileUpdate') ?>" method="post">
          <h2 class="text-center mb-5"><strong>Update Profile</strong></h2>
          <?php
          if($this->session->flashdata('pswd_update_error')){
          ?>
           <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('pswd_update_error'); ?>
          </div>
          <?php
          }
          ?>

          <div class="form-group">
            <label class="font-weight-bold">First Name:</label>
            <input type="text" class="form-control"name="fname" placeholder="First Name" value="<?=  $profile_data->first_name ?>" >
             <small><?php echo form_error("fname" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>

          <div class="form-group">
            <label class="font-weight-bold">Last Name:</label>
            <input type="text" class="form-control"  name="lname" placeholder="Last Name" value="<?=  $profile_data->last_name ?>">
             <small><?php echo form_error("lname" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>

          <div class="form-group">
            <label class="font-weight-bold">Email:</label>
            <input type="text" class="form-control" name="emailid" placeholder="Email" value="<?=  $profile_data->email ?>" disabled="">
             <small><?php echo form_error("emailid" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>

           <div class="form-group">
            <label class="font-weight-bold">Password:</label>
            <input type="text" class="form-control" name="passwords" value="<?=  $profile_data->password ?>" placeholder="Password">
             <small><?php echo form_error("passwords" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>

           <div class="text-right">
            <button type="submit" class="btn btn-success"><b>Update</b></button>
          </div>
        </form>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
    </div>
  </div>
</div>