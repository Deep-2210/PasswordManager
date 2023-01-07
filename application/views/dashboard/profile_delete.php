
<div class="container-fluid">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
      <div class="col-lg-6 col-sm-12 col-md-12">
        

        <form class="form_border" action="<?= site_url('dashboard_area/profile/deleteProfile') ?>" method="post">
          <h2 class="text-center mb-4"><strong>Delete Your Account</strong></h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          <div class="text-right">
            <a href="<?= site_url('dashboard_area/dashboard') ?>" class="btn btn-danger">Cancel</a>
            <button type="submit" onclick="return  confirm('Read All Instruction Carefully')" class="btn btn-success">Delete</button>
         </div>
        </form>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-12"></div>
    </div>
  </div>
</div>