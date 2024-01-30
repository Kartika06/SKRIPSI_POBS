<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Point of Blended System</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link rel="shortcut icon" href="<?= base_url()?>/assets/img/logo/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/css/material/material-icon.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/css/material/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">Loading...</div>
		</div>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-v1">
			<!-- begin login-container -->
			<div class="login-container">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						<span class="f-w-600">POBS</span>
						<small>Point Of Blend System</small>
					</div>
					<div class="icon">
						<img src="<?= base_url()?>/assets/img/logo/logo.png">">
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-body -->
				<div class="login-body">
					<!-- begin login-content -->
					<div class="login-content">
						<h4 class=" text-center">Login Page</h4>
						<form action="" method="POST" class="margin-bottom-0">
							<div class="form-group m-b-20">
								<input type="text" class="form-control form-control-lg inverse-mode" placeholder="Username" name="username" autofocus required />
							</div>
							<div class="form-group m-b-20">
								<input type="password" class="form-control form-control-lg inverse-mode" placeholder="Password" name="password" required />
							</div>
							<div class="login-buttons">
								<button type="submit" name="login" class="btn btn-success btn-block btn-lg">Login</button>
							</div>
						</form>
					</div>
					<!-- end login-content -->
				</div>
				<!-- end login-body -->
			</div>
			<!-- end login-container -->
		</div>
		<!-- end login -->
		
		<!-- begin theme-panel -->
		<!-- end theme-panel -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url();?>asset/js/app.min.js"></script>
	<script src="<?php echo base_url();?>asset/js/theme/material.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</body>
</html>
