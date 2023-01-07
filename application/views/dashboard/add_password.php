
<div class="container-fluid">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
      <div class="col-lg-6 col-sm-12 col-md-12">

        <form class="form_border" action="<?= site_url('dashboard_area/dashboard/StorePassword') ?>" method="post">

  <h2 class="text-center mb-5"><strong>Add Accounts</strong></h2>
  
          <?php
          if($this->session->flashdata('pswd_store_error')){
          ?>
          <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('pswd_store_error'); ?>
          </div>
          <?php
          }
          ?>
          <div class="form-group">
            <label class="font-weight-bold">Site Title:</label>
            <input type="text" class="form-control" name="title" placeholder="Site Title" value="<?= set_value('title') ?>">
            <small><?php echo form_error("title" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Email / Usename:</label>
            <input type="text" class="form-control" name="euname" placeholder="Email or Username" value="<?= set_value('euname') ?>">
            <small><?php echo form_error("euname" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Password:</label>
            <input type="text" class="form-control" name="passwords" placeholder="Passwords" value="<?= set_value('passwords') ?>">
            <small><?php echo form_error("passwords" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>
         
         <div class="text-right">
            <button type="submit" class="btn btn-success mt-2"><strong>Save Password</strong></button>
         </div>
        </form>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
    </div>
  </div>
</div>