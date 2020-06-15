<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>College Management System</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <script src="<?php echo base_url('assets/js/jquery-3.1.0.js'); ?>"></script>
  <style type="text/css">
    .buttons{
      color: #2196f3;
      border: 1px solid#cabdbd;
      border-radius: 5px;
      padding: 1px 10px 2px 10px;
    }
  </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
  	<div class="navbar-header col-lg-10">
  		<a class="navbar-brand" style="color: #fff;" href="#">College Management System</a>
  	</div>

  	<div class="col-lg-2" style="background-color: #fff; margin: 15px;" id="bs-example-navbar-collapse-2">
  		<div class="btn-group">
  			<a href="#" class="btn btn-default">Setting</a>
  			<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
  			<ul class="dropdown-menu">
          
            <?php $user_id = $this->session->userdata('user_id'); ?>
          <?php if ( $user_id == '1' ): ?>
            <li> <?php echo anchor("admin/dashboard",'Dashboard'); ?></li>
          <li> <?php echo anchor("admin/coadmins",'View Co Admins'); ?></li>
          <li> <?php echo anchor("welcome/logout",'Logout'); ?></li>
          <?php else: ?>
            <li> <?php echo anchor("welcome/logout",'Logout'); ?></li>
          <?php endif; ?>

  			</ul>
  		</div>
  	</div>

  </div>
  </nav>