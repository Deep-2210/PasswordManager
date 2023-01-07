<div class="container-fluid mt-3">
	<h2 class="text-center"><strong>Your Saved Accounts</strong></h2><hr>
</div>
<div class="container-fluid">
	<?php
	if($this->session->flashdata('del_success')){
	?>
	<script type="text/javascript">
	alert("<?php echo $this->session->flashdata('del_success') ?>");
	</script>
	<?php
	}
	if($this->session->flashdata('update_success')){
	?>
	<script type="text/javascript">
	alert("<?php echo $this->session->flashdata('update_success') ?>");
	</script>
	<?php
	}
	if($this->session->flashdata('profile_update_success')){
	?>
	<script type="text/javascript">
	alert("<?php echo $this->session->flashdata('profile_update_success') ?>");
	</script>
	<?php
	}
	?>
	<div class="row">
		<?php
		if(!empty($password_data)){
		foreach ($password_data as $row) { ?>
		<div class="col-lg-4 col-sm-6 col-md-6 col-12 pb-4">
			
			<div class="card card_round mx-auto mx-auto"style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title font-weight-bold text-center pswd_heading mb-3"><?php echo $row->site_name; ?></h5>
					<p class="card-text font-weight-bold pswd_user_pswd mb-0">Username:</p>
					<p class="card-text pswd_user_pswd"><?php echo $row->email_username;?> </p>
					<p class="card-text font-weight-bold pswd_user_pswd mb-0">Password:</p>
					<p class="card-text pswd_user_pswd"><?php echo $row->passwords;?> </p>
					<div class="text-right">
						<a  href="<?php echo(site_url('dashboard_area/dashboard/accountUpdateId/'.$row->id)) ?>" class="btn btn-success font-weight-bold">Update</a>
						<a  href="<?php echo(site_url('dashboard_area/dashboard/delete_data/'.$row->id)) ?>" onclick="return  confirm('Are You Sure')" class="btn btn-danger font-weight-bold"><i class="far fa-trash-alt"></i></a>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		}
		else{
		?>
		<button class="btn btn-warning btn-block" style="font-size: 18px;">No Account Found</button>
		<?php
		}
		?>
		
	</div>
</div>
