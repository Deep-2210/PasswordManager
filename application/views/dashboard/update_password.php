<div class="container-fluid">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
      <div class="col-lg-6 col-sm-12 col-md-12">
        <form class="form_border" action="<?= site_url('dashboard_area/dashboard/update_data') ?>" method="post">
         <h2 class="text-center mb-4"><strong>Update Accounts</strong></h2>
          <?php
          if($this->session->flashdata('pswd_update_error')){
          ?>
           <div class="alert alert-danger">
            <strong>Try Again!</strong> <?php echo $this->session->flashdata('pswd_update_error'); ?>
          </div>
          <?php
          }
          ?>

          <input type="hidden" name="id" value="<?= $account->id ?>">

          <div class="form-group">
            <label class="font-weight-bold">Site Title:</label>
            <input type="text" class="form-control"name="title" placeholder="Site Title" value="<?= $account->site_name ?>">
             <small><?php echo form_error("title" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>

          <div class="form-group">
            <label class="font-weight-bold">Email / Usename:</label>
            <input type="text" class="form-control"  name="email" placeholder="Email or Username" value="<?= $account->email_username ?>">
             <small><?php echo form_error("email" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>

          <div class="form-group">
            <label class="font-weight-bold">Password:</label>
            <input type="text" class="form-control" name="password" placeholder="Passwords" value="<?= $account->passwords ?>">
             <small><?php echo form_error("password" , "<div class='text-danger font-weight-bold'>" , "</div>") ?></small>
          </div>

           <div class="text-right">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </form>
        
      </div>
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
    </div>
  </div>
</div>