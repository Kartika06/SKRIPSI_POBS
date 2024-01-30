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
				<a href="javascript:;" class="navbar-brand">
					<b>POINT OF BLENDED SYSTEM</b>
				</a>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav 
			
			<ul class="navbar-nav navbar-right">
				<li>
					<a href="#" data-toggle="navbar-search" class="icon">
						<i class="material-icons">search</i>
					</a>
				</li>
				<li class="badge-defaul">
					<a href="#" class="fas fa-lock"> Login
					</a>
				</li>
			</ul>
			 
			 end header navigation right -->
			
			<div class="search-form">
				<button class="search-btn" type="submit"><i class="material-icons">search</i></button>
				<input type="text" class="form-control" placeholder="Search Something..." />
				<a href="#" class="close" data-dismiss="navbar-search"><i class="material-icons">close</i></a>
			</div>
		</div>
		<!-- end #header -->

		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar" data-disable-slide-animation="true">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="<?php= base_url()?>assets/img/user/user-14.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								POBS
								<small>Point Of Blend System</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							<li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
							<li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
							<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
						</ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="javascript:;">
							<i class="material-icons">home</i>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="#modal-alert" data-toggle="modal">
							<i class="material-icons">vpn_key</i>
							<span>Login </span> 
						</a>
					</li>
					
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
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">PT Kalbe Morinaga Indonesia ||<small> Production Digital Bussiness</small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">WEIGHING PROCESS</div>
							<div class="stats-number">
								<?php echo $proses->num_rows();?> OKP
							</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 100%;"></div>
							</div>
						<div class="stats-link">
							<a target="OnWeighing" class="showSingle">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-teal">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">WAIT TO BLEND</div>
							<div class="stats-number">
								<?php echo $ready->num_rows()-$complete->num_rows();?> OKP
							</div>
							<div class="stats-progress progress">
							<div class="progress-bar" style="width: 100%;"></div>
							</div>
						<div class="stats-link">
							<a target="ReadyScan" class="showSingle">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-black">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">COMPLETED BLEND</div>
							<div class="stats-number">
								<?php echo $complete->num_rows();?> OKP
							</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 100%;"></div>
							</div>
						<div class="stats-link">
							<a target="CompleteScan" class="showSingle">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-red">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">AVERAGE DAILY BLEND</div>
							<div class="stats-number">
								<?php echo round($complete->num_rows()/date('d'),2);?> OKP
							</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 100%;"></div>
							</div>
						<div class="stats-link">
						</div>
					</div>
				</div>
			</div>
				<!-- end col-3 -->
			<div class="col-md-12">

				<div class="panel panel-inverse targetDiv" id="OnWeighing">
					<!-- begin panel-heading -->
					<div class="panel-heading">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
						<h4 class="panel-title">Data Transaction of WIP </h4>
					</div>
					<!-- end panel-heading -->
					<!-- begin panel-body -->
					<div class="panel-body table-responsive">
						<table id="data-table-default" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th width="panel-body table-responsive1%">No</th>
									<th class="text-nowrap">OKP</th>
									<th class="text-nowrap">Item</th>
									<th class="text-nowrap">Item Description</th>
									<th class="text-nowrap">Uom</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$no=1; 
								foreach ($proses->result() as $data) { 
							?>
								<tr class="odd gradeX">
									<td width="1%" class="f-s-600 text-inverse"><?php echo $no++;?></td>
									<td class="text-nowrap"><?php echo $data->batch_no;?></td>
									<td><?php echo $data->item_code;?></td>
									<td><?php echo $data->item_description;?></td>
									<td><?php echo $data->uom_scale;?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
					<!-- end panel-body -->
				<div class="panel panel-inverse targetDiv" id="ReadyScan">
					<!-- begin panel-heading -->
					<div class="panel-heading">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
						<h4 class="panel-title">Data Transaction of WIP </h4>
					</div>
					<!-- end panel-heading -->
					<!-- begin panel-body -->
					<div class="panel-body table-responsive">
						<table id="data-table-autofill" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th width="panel-body table-responsive1%">No</th>
									<th class="text-nowrap">OKP</th>
									<th class="text-nowrap">Item</th>
									<th class="text-nowrap">Item Description</th>
									<th class="text-nowrap">Uom</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$no=1; 
								foreach ($ready->result() as $data) { 
							?>
								<tr class="odd gradeX">
									<td width="1%" class="f-s-600 text-inverse"><?php echo $no++;?></td>
									<td class="text-nowrap"><?php echo $data->batch_no;?></td>
									<td><?php echo $data->item_code;?></td>
									<td><?php echo $data->item_description;?></td>
									<td><?php echo $data->uom_scale;?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="panel panel-inverse targetDiv" id="CompleteScan">
					<!-- begin panel-heading -->
					<div class="panel-heading">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
						<h4 class="panel-title">Data Transaction of WIP </h4>
					</div>
					<!-- end panel-heading -->
					<!-- begin panel-body -->
					<div class="panel-body table-responsive">
						<table id="data-table-colreorder" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th width="panel-body table-responsive1%">No</th>
									<th class="text-nowrap">OKP</th>
									<th class="text-nowrap">Item</th>
									<th class="text-nowrap">Item Description</th>
									<th class="text-nowrap">Total Qty</th>
									<th class="text-nowrap">Uom</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$no=1; 
								foreach ($complete->result() as $data) { 
							?>
								<tr class="odd gradeX">
									<td width="1%" class="f-s-600 text-inverse"><?php echo $no++;?></td>
									<td class="text-nowrap"><?php echo $data->batch_no;?></td>
									<td><?php echo $data->item_code;?></td>
									<td><?php echo $data->item_description;?></td>
									<td><?php echo $data->total_weight." ".$data->uom_ingredient;?></td>
									<td><?php echo $data->uom_scale;?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="panel panel-inverse targetDiv" id="Canceled">
					<!-- begin panel-heading -->
					<div class="panel-heading">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
						<h4 class="panel-title">Data Transaction of WIP </h4>
					</div>
					<!-- end panel-heading -->
					<!-- begin panel-body -->
					<div class="panel-body table-responsive">
					<!--
					-->
					</div>
				</div>

			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->
							
						</tbody>
					</table>
				</div>
				<!-- end panel-body -->
			</div>
		</div>
			</div>



			<!-- end row -->
		</div>
		<!-- end #content -->
		
		<!-- begin theme-panel -->
		<div class="theme-panel theme-panel-lg">
		<!--
			<a href="javascript:;" data-click="// theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
		-->
			<div class="theme-panel-content">
				<h5 class="m-t-0">Color Theme</h5>
				<ul class="theme-list clearfix">
					<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="<?php echo base_url();?>assets/css/material/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="<?php echo base_url();?>assets/css/material/theme/pink.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="<?php echo base_url();?>assets/css/material/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="<?php echo base_url();?>assets/css/material/theme/yellow.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="<?php echo base_url();?>assets/css/material/theme/lime.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="<?php echo base_url();?>assets/css/material/theme/green.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-teal" data-theme="teal" data-theme-file="<?php echo base_url();?>assets/css/material/theme/teal.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Teal">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-aqua" data-theme="default" data-theme-file="<?php echo base_url();?>assets/css/material/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
					<li class="active"><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="<?php echo base_url();?>assets/css/material/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="<?php echo base_url();?>assets/css/material/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="<?php echo base_url();?>assets/css/material/theme/indigo.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="<?php echo base_url();?>assets/css/material/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
				</ul>
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Header Styling</div>
					<div class="col-md-6">
						<select name="header-styling" class="form-control form-control-sm">
							<option value="1">default</option>
							<option value="2">inverse</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Header</div>
					<div class="col-md-6">
						<select name="header-fixed" class="form-control form-control-sm">
							<option value="1">fixed</option>
							<option value="2">default</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar Styling</div>
					<div class="col-md-6">
						<select name="sidebar-styling" class="form-control form-control-sm">
							<option value="1">default</option>
							<option value="2">grid</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar</div>
					<div class="col-md-6">
						<select name="sidebar-fixed" class="form-control form-control-sm">
							<option value="1">fixed</option>
							<option value="2">default</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar Gradient</div>
					<div class="col-md-6">
						<select name="content-gradient" class="form-control form-control-sm">
							<option value="1">disabled</option>
							<option value="2">enabled</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Direction</div>
					<div class="col-md-6">
						<select name="direction" class="form-control form-control-sm">
							<option value="1">LTR</option>
							<option value="2">RTL</option>
						</select>
					</div>
				</div>
				<div class="divider"></div>
				<h5>THEME VERSION</h5>
				<div class="theme-version">
					<a href="<?php echo base_url();?>template_html/index_v2.html">
						<span style="background-image: url(<?php echo base_url();?>assets/img/theme/default.jpg);"></span>
					</a>
					<a href="<?php echo base_url();?>template_transparent/index_v2.html">
					<span style="background-image: url(<?php echo base_url();?>assets/img/theme/transparent.jpg);"></span>
					</a>
				</div>
				<div class="theme-version">
					<a href="<?php echo base_url();?>template_apple/index_v2.html">
						<span style="background-image: url(<?php echo base_url();?>assets/img/theme/apple.jpg);"></span>
					</a>
					<a href="<?php echo base_url();?>template_material/index_v2.html" class="active">
						<span style="background-image: url(<?php echo base_url();?>assets/img/theme/material.jpg);"></span>
					</a>
				</div>
				<div class="theme-version">
					<a href="<?php echo base_url();?>template_facebook/index_v2.html">
						<span style="background-image: url(<?php echo base_url();?>assets/img/theme/facebook.jpg);"></span>
					</a>
				</div>
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-md-12">
						<a href="javascript:;" class="btn btn-inverse btn-block btn-rounded" data-click="reset-local-storage"><b>Reset Local Storage</b></a>
					</div>
				</div>
			</div>
		</div>
		<!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="material-icons">keyboard_arrow_up</i></a>
		<!-- end scroll to top btn -->
	</div>
	<div class="modal fade" id="modal-alert">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Login Point of Blended System</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<div class="login-content">
												<form action="" method="POST" class="margin-bottom-0">
													<div class="row form-group m-b-7">
														<label class="col-md-3 col-form-label">Username</label>
														<div class="col-md-9">
															<div class="input-group">
																<div class="input-group-prepend"><span class="input-group-text">@</span></div>
																<input type="text" name="username" class="form-control is-valid" required autofocus />
																
															</div>
														</div>
													</div>

													<div class="row form-group m-b-7">
														<label class="col-md-3 col-form-label">Password</label>
														<div class="col-md-9">
															<div class="input-group">
																<div class="input-group-prepend"><span class="input-group-text">@</span></div>
																<input type="password" name="password" class="form-control is-valid" required />
																
															</div>
														</div>
													</div>
													<!--
													<div class="checkbox checkbox-css m-b-10">
														<input type="checkbox" id="remember_me_checkbox" value="" />
														
														<label for="remember_me_checkbox">
														Remember Me
														</label>
														
													</div>
													-->
													<div class="form-group">
													<button type="submit" name="login" class="btn btn-success pull-right">Sign In</button>
													</div>
												</form>
											</div>
										</div>
										
									</div>
								</div>
							</div>
	<!-- end page container -->
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url();?>assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url();?>assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url();?>assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url();?>assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url();?>assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url();?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?php echo base_url();?>assets/js/theme/material.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<!--<script src="<?php echo base_url();?>assets/plugins/gritter/js/jquery.gritter.js"></script>-->
	<script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>assets/js/demo/dashboard.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url();?>assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url();?>assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/demo/table-manage-default.demo.min.js"></script>


	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-autofill/js/dataTables.autofill.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-autofill-bs4/js/autofill.bootstrap4.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/js/demo/table-manage-autofill.demo.js"></script>
	
	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-colreorder/js/dataTables.colreorder.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-colreorder-bs4/js/colreorder.bootstrap4.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/js/demo/table-manage-colreorder.demo.js"></script>
	
	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-fixedheader/js/dataTables.fixedheader.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/plugins/datatables.net-fixedheader-bs4/js/fixedheader.bootstrap4.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets/js/demo/table-manage-fixed-header.demo.js"></script>
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
			TableManageResponsive.init();
/*
		  $("#weighing-btn").click(function(){
		    $("#OnWeighing").show();
		    $("#ReadyScan").hide();
		    $("#CompleteScan").hide();
		    $("#Canceled").hide();
		  });
		  $("#ready-btn").click(function(){
		    $("#OnWeighing").hide();
		    $("#ReadyScan").show();
		    $("#CompleteScan").hide();
		    $("#Canceled").hide();
		  });
		  $("#complete-btn").click(function(){
		    $("#OnWeighing").hide();
		    $("#ReadyScan").hide();
		    $("#CompleteScan").show();
		    $("#Canceled").hide();
		  });
		  $("#cancel-btn").click(function(){
		    $("#OnWeighing").hide();
		    $("#ReadyScan").hide();
		    $("#CompleteScan").hide();
		    $("#Canceled").show();
		  });
*/
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