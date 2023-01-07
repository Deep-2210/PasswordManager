<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pass</title>
    <?php $this->load->view('include/css_file_links'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/generate_button.css'); ?>">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg main_color">
      <a class="navbar-brand font-weight-bold text-center text-white heading" href="#">Password Generator</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link text-white active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">About Us</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Password Vault
            </a>
            <div class="dropdown-menu dropdown_color" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-white" href="<?= base_url('login') ?>">Login</a>
              <a class="dropdown-item text-white " href="<?= base_url('signup') ?>">SignUp</a>
            </div>
          </li>
          
        </ul>
      </div>
    </nav>
    
     