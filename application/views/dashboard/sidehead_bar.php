<!DOCTYPE html>
<html>
	<head>
		<title>Password Saver</title>
		<?php $this->load->view('include/css_file_links'); ?>		
		<link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/generate_button.css') ?>">
	</head>
	<body>
		<div class="wrapper">
			
			<nav id="sidebar">
				
				<div class="sidebar-header">
					<h3><strong>Password Vault</strong></h3>
				</div>
				<ul class="lisst-unstyled components">
					<!-- <p>Menu</p> -->
					<li class="active">
						<a href="<?= base_url('dashboard_area/dashboard') ?>"><i class="fas fa-home"></i> Home</a>
						
					</li>
					<li>
						<a href="<?= base_url('dashboard_area/dashboard/generate_password') ?>">Generate New Password</a>
					</li>
					<li>
						<a href="<?= base_url('dashboard_area/dashboard/add_new_form') ?>">Add New Password</a>
					</li>
					<li>
						<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user"></i> Profile</a>
						<ul class="collapse list-unstyled" id="pageSubmenu">
							<li>
								<a href="<?= base_url('dashboard_area/profile/getProfileData')?>">Update Profile</a>
							</li>
							<li>
								<a href="<?= base_url('dashboard_area/profile/deleteProfilePage') ?>">Delete Account</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= base_url('Logout') ?>"><i class="fas fa-sign-out" aria-hidden="true"></i> Log out</a>
					</li>
					
				</ul>
			</nav>
			<div id="content">
				<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
					<!-- Brand/logo -->
					<a class="navbar-brand" href="#"><button type="button" id="sidebarCollapse" class="btn  btn-info">
						<i class="fas fa-align-left"></i>
					</button></a>
					
					<!-- Links -->
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="navbar-brand" href="#"><i class="fas fa-user-circle" aria-hidden="true"></i> Welcome,
							<?php echo $name;?>
						</a>
						</li>
						<li class="nav-item">
							<a class="navbar-brand btn btn-warning" href="<?= base_url('Logout') ?>"><i class="fas fa-sign-out" aria-hidden="true"></i> Logout</a>
						</li>
					</ul>
				</nav>
				<!-- Writing area -->
				<!-- writing area -->
			