<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Point of Blended System</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link rel="shortcut icon" href="<?= base_url()?>/assets/img/logo/logo.png">
	<link href="<?=base_url()?>assets/css/material/font.css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
	<link href="<?=base_url()?>assets/css/material/icon.css?family=Material+Icons" rel="stylesheet" />
	<link href="<?=base_url()?>assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/plugins/font-awesome/css/all.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css/material/style.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css/material/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css/material/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url()?>assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url()?>assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />

	<link href="<?php echo base_url();?>asset/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/@danielfarrell/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
</head>
<body>
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
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar show page-sidebar-minified">
		<!-- begin #header -->

		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed navbar-toggle-left" data-click="sidebar-minify">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">
					<b>POINT OF BLENDED SYSTEM</b>
				</a>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<!--
				<li>
					<a href="#" data-toggle="navbar-search" class="icon">
						<i class="material-icons">search</i>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle icon">
						<i class="material-icons">inbox</i>
						<span class="label">5</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS (5)</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-bug media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
									<div class="text-muted f-s-11">3 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="<?=base_url()?>assets/img/user/user-1.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">John Smith</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">25 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="<?=base_url()?>assets/img/user/user-2.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Olivia</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">35 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-plus media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New User Registered</h6>
									<div class="text-muted f-s-11">1 hour ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-envelope media-object bg-silver-darker"></i>
									<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New Email From John</h6>
									<div class="text-muted f-s-11">2 hour ago</div>
								</div>
							</a>
						</li>
						<li class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</li>
					</ul>
				</li>
			-->
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle">
						<span class="d-none d-md-inline">Hi, <?= $this->fungsi->user_login()->name?></span>
						<!--<img src="<?=base_url()?>assets/img/user/user-14.jpg" alt="" /> -->
					</a>
					<div class="dropdown-menu dropdown-menu-right">
					</div>
				</li>

			</ul>
			<!-- end header navigation right -->
			
			<div class="search-form">
				<button class="search-btn" type="submit"><i class="material-icons">search</i></button>
				<input type="text" class="form-control" placeholder="Search Something..." />
				<a href="#" class="close" data-dismiss="navbar-search"><i class="material-icons">close</i></a>
			</div>
		</div>
		<!-- end #header -->
		
		<!-- begin #top-menu -->
		<div id="top-menu" class="top-menu">
			<!-- begin top-menu nav -->
			<ul class="nav">
				<?php if ($this->session->userdata('level') != 2) { ?>
					<li><a href="<?= site_url('dashboard')?>"><i class="material-icons">home</i> <span>Dashboard</span></a></li>
				<?php } ?>
			<!--
				<?php if($this->fungsi->user_login()->level == 1) { ?>
				<li class="has-sub">
					<a href="<?= site_url('dashboard')?>">
						<b class="caret"></b>
						<i class="material-icons">apps</i>
						<span>Master Data<span class="label label-theme m-l-5">4</span></span> 
					</a>
					<ul class="sub-menu">
						<li><a href="<?= site_url('c_product')?>">Product<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						<li><a href="<?= site_url('c_uom')?>">Uom<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						<li><a href="<?= site_url('c_ingredients')?>">Ingredients<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						<li><a href="<?= site_url('c_qrcode')?>">QR-Code Label<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
					</ul>
				</li>

				<?php } ?>
				<?php if($this->session->userdata('level') == 1) { ?>
				<li class="has-sub">
					<a href="javascript:;">
						<b class="caret"></b>
						<i class="material-icons">shopping_bag</i>

						<span>Preparation<span class="label label-theme m-l-5">2</span>
					</a>
					<ul class="sub-menu">
						<li><a href="<?=site_url('c_preparation')?>">Preparation of WIP<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						<li><a href="<?=base_url()?>frontend/template/template_forum/index.html" target="_blank">View Preparations WIP<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
					</ul>
				</li>
				<?php } ?>

			<?php if ($this->session->userdata('level') != 5 && $this->session->userdata('level') != 4) { ?>
				<li class="has-sub">
					<a href="javascript:;">
						<b class="caret"></b>
						<i class="material-icons">shopping_cart</i>
						<span>Transaction</span>
					</a>
					<ul class="sub-menu">
						<li><a href="<?=site_url('c_transaction2')?>">Transaction of WIP<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>

						<li><a href="email_newsletter.html">View WIP Transactions<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
					</ul>
				</li>
			<?php } ?>


				<?php if($this->fungsi->user_login()->level == 1) { ?>
				<li><a href="calendar.html"><i class="material-icons">date_range</i> <span>Status</span></a></li>
				<?php } ?>
				-->
				<!--
				<?php if($this->fungsi->user_login()->level == 1) { ?>
				<li class="has-sub">
					<a href="javascript:;">
						<b class="caret"></b>
						<i class="material-icons">insert_chart</i>
						<span>Report<span class="label label-theme m-l-5">4</span>
					</a>
					<ul class="sub-menu">
						<li><a href="map_vector.html">Daily<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						<li><a href="map_google.html">Weekly<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						<li><a href="map_vector.html">Monthly<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						<li><a href="map_google.html">Years to Date<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
					</ul>
				</li>
				<?php } ?>
				-->
				
				<li class="has-sub">
					<!--
					<a href="javascript:;">
						<b class="caret"></b>
						<i class="material-icons">help</i>
						<span>Help</span>
					</a>
					<ul class="sub-menu">
						<li><a href="#">Call Me: Irpan Hidayat Pamil<br><center>(085216008066)<i class="fa fa-paper-plane text-theme m-l-5"></i></center></br></a></li>
					</ul>
				-->
					<li class="has-sub pull-right">
					<a href="javascript:;">
						<b class="caret"></b>
						<i class="material-icons">lock</i>
						<span>Acount</span>
					</a>
					<ul class="sub-menu">
							<li><a href="<?= site_url('c_user/edit_user/').$this->session->userdata('userid')?>">Account Setting<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						<li><a href="<?=site_url('dashboard/logout')?>">Log-Out<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
					</ul>
				</li>
				</li>
							
			</ul>
			<!-- end top-menu nav -->
		</div>
		<!-- end #top-menu -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar" data-disable-slide-animation="true">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				</br>
					</br>
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="<?=base_url()?>assets/img/user/user-14.jpg" alt="" />
							</div>
							<div class="info">
								<?= $this->fungsi->user_login()->name?>
								<small>Your login as: <?= $this->fungsi->user_login()->username?> </small>
							</div>
						</a>
					</li>
				<!--
					<li>
						<ul class="nav nav-profile">
							<li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
							<li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
							<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
						</ul>
					</li>
				-->
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
				<!--
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="material-icons">apps</i>
							<span>Master Data<span class="label label-theme m-l-5">4</span></span> 
						</a>
						<ul class="sub-menu">
							<li><a href="ui_general.html">Product<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							<li><a href="ui_typography.html">Uom<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							<li><a href="ui_tabs_accordions.html">Ingredienst<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							<li><a href="ui_tabs_accordions.html">QR-Code Label<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						</ul>
					</li>
				-->
				<?php if ($this->session->userdata('level') != 2 && $this->session->userdata('level') != 5) { ?>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="material-icons">apps</i>
							<span>Master Data<span class="label label-theme m-l-5">4</span></span> 
						</a>
						<ul class="sub-menu">
							<li><a href="<?= site_url('c_user')?>">User Management<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						</ul>
					</li>
				<?php } ?>
					<li class="has-sub">
						<?php if ($this->session->userdata('level') != 5 && $this->session->userdata('level') != 4) { ?>
							<a href="javascript:;">
								<b class="caret"></b>
								<i class="material-icons">shopping_cart</i>
								<span>Transaction</span> 
							</a>
							<ul class="sub-menu">
								<li><a href="<?=site_url('c_transaction2')?>">Transaction of WIP - VERSI 1<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
								<!-- <li><a href="<?=site_url('c_transaction2/okp_validasi')?>">Transaction of WIP - VERSI 2<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li> -->
						<!--
							<li><a href="#">View WIP Transactions<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						-->
						</ul>
						<?php } ?>
					</li>
				<!--

					<li><a href="calendar.html"><i class="material-icons">date_range</i> <span>Status</span></a></li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="material-icons">insert_chart</i>
							<span>Report<span class="label label-theme m-l-5">4</span></span> 
						</a>
						<ul class="sub-menu">
							<li><a href="form_elements.html">Daily<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							<li><a href="form_plugins.html">Weekly<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							<li><a href="form_elements.html">Monthly<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							<li><a href="form_plugins.html">Years to Date<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="material-icons">help</i>
							<span>Help</span>
						</a>
						<ul class="sub-menu">
							<li><a href="#"><center>Call Me: Irpan Hidayat Pamil
							<br>(085216008066)<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						</ul></center>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="material-icons">lock</i>
							<span>Acount</span>
						</a>
						<ul class="sub-menu">
							<li><a href="login.html">Account Setting</a></li>
							<li><a href="login_v2.html">Log-Out</a></li>
						</ul>
					</li>
				-->
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		<!-- Pemanggilan contents coyy -->
			<?php echo $contents?>
		
		<!-- begin theme-panel -->
		<div class="theme-panel theme-panel-lg">
			<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content">
				<h5 class="m-t-0">Color Theme</h5>
				<ul class="theme-list clearfix">
					<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="<?= base_url()?>assets/css/material/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="<?= base_url()?>assets/css/material/theme/pink.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="<?= base_url()?>assets/css/material/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="<?= base_url()?>assets/css/material/theme/yellow.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="<?= base_url()?>assets/css/material/theme/lime.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="<?= base_url()?>assets/css/material/theme/green.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-teal" data-theme="teal" data-theme-file="<?= base_url()?>assets/css/material/theme/teal.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Teal">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-aqua" data-theme="default" data-theme-file="<?= base_url()?>assets/css/material/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
					<li class="active"><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="<?= base_url()?>assets/css/material/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="<?= base_url()?>assets/css/material/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="<?= base_url()?>assets/css/material/theme/indigo.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="<?= base_url()?>assets/css/material/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
				</ul>
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="material-icons">keyboard_arrow_up</i></a>
		<!-- end scroll to top btn -->
	</div>

	<!-- end page container -->
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?= base_url()?>assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?= base_url()?>assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?= base_url()?>assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?= base_url()?>assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?= base_url()?>assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?= base_url()?>assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?= base_url()?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?= base_url()?>assets/js/theme/material.min.js"></script>
	<script src="<?= base_url()?>assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<!--<script src="<?= base_url()?>assets/plugins/gritter/js/jquery.gritter.js"></script>-->
	<script src="<?= base_url()?>assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?= base_url()?>assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?= base_url()?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?= base_url()?>assets/js/demo/dashboard.min.js"></script>
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?= base_url()?>assets/plugins/d3/d3.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/nvd3/build/nv.d3.js"></script>
	<script src="<?= base_url()?>assets/plugins/clipboard/clipboard.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/highlight/highlight.common.js"></script>
	<script src="<?= base_url()?>assets/js/demo/widget.demo.min.js"></script>
	<script src="<?= base_url()?>assets/js/demo/render.highlight.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<!-- ================== END PAGE LEVEL JS ================== -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?= base_url()?>assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?= base_url()?>assets/plugins/d3/d3.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/nvd3/build/nv.d3.js"></script>
	<script src="<?= base_url()?>assets/plugins/clipboard/clipboard.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/highlight/highlight.common.js"></script>
	<script src="<?= base_url()?>assets/js/demo/widget.demo.min.js"></script>
	<script src="<?= base_url()?>assets/js/demo/render.highlight.js"></script>
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?= base_url()?>assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?= base_url()?>assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?= base_url()?>assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url()?>assets/js/demo/table-manage-default.demo.min.js"></script>

	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-autofill/js/dataTables.autofill.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-autofill-bs4/js/autofill.bootstrap4.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/js/demo/table-manage-autofill.demo.js"></script>
	
	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-colreorder/js/dataTables.colreorder.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-colreorder-bs4/js/colreorder.bootstrap4.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/js/demo/table-manage-colreorder.demo.js"></script>
	
	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-fixedheader/js/dataTables.fixedheader.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-fixedheader-bs4/js/fixedheader.bootstrap4.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/js/demo/table-manage-fixed-header.demo.js"></script>


	<script src="<?php echo base_url();?>asset/plugins/jquery-migrate/dist/jquery-migrate.min.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/pwstrength-bootstrap/dist/pwstrength-bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/@danielfarrell/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/tag-it/js/tag-it.min.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/select2/dist/js/select2.min.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/bootstrap-show-password/dist/bootstrap-show-password.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
	<script src="<?php echo base_url();?>asset/plugins/clipboard/dist/clipboard.min.js"></script>
	<script src="<?php echo base_url();?>asset/js/demo/form-plugins.demo.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		jQuery(function() {
		  jQuery('.showSingle').click(function() {
		    jQuery('.targetDiv').hide();
		    jQuery('#' + $(this).attr('target')).show();
		  });
		});

		$(document).ready(function() {
		    $("#ReadyScan").hide();
		    $("#CompleteScan").hide();
		    $("#Canceled").hide();

			App.init();
			Dashboard.init();
			TableManageDefault.init();
			// TableManageResponsive.init();
			Highlight.init();
			Widget.init();
		});
	</script>
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
