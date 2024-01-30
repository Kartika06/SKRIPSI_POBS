
<!-- begin #content -->
</br>
</br>
<div id="content" class="content">
<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Add Users</li>
	</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
<h3 class="page-header"><b>Add Users</b><small> <b>||</b> Point of Blended System <b>||</b></small></h3>
<!-- end page-header -->
		<!-- end col-3 -->
				<div class="col-md-12">				
			<div class="panel panel-inverse">
				<!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Form Add Users</h4>
				</div>
					</br>
					<div>
					</div>
				<!-- end panel-heading -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<form action="" method="post" class="form-horizontal" data-parsley-validate="true" name="demo-form">
								<div class="form-group row m-b-15 <?=form_error('name') ? 'has-error' : null?>">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Full Name * :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="name" name="fullname" value="<?=set_value('name')?>" placeholder="Fullname" data-parsley-required="true" />
										<?=form_error('name')?>
									</div>
								</div>
								<div class="form-group row m-b-15 <?=form_error('username') ? 'has-error' : null?>">
									<label class="col-md-4 col-sm-4 col-form-label" for="username">Username * :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="username" name="username" value="<?=set_value('username')?>" data-parsley-type="username" placeholder="Username" data-parsley-required="true" />
										<?=form_error('username')?>
									</div>
								</div>
								<div class="form-group row m-b-15 <?=form_error('password') ? 'has-error' : null?>">
									<label class="col-md-4 col-sm-4 col-form-label" for="website">Password * :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="Password" id="website" name="password" value="<?=set_value('password')?>"  data-parsley-type="password" placeholder="Password" />
										<?=form_error('password')?>
									</div>
								</div>
								<div class="form-group row m-b-15 <?=form_error('passconf') ? 'has-error' : null?>">
									<label class="col-md-4 col-sm-4 col-form-label" for="message">Confirmation Password * :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="Password" id="digits" name="passconf" value="<?=set_value('passconf')?>" data-parsley-type="password_confirmation" placeholder="Confirmation Password" />
										<?=form_error('passconf')?>
									</div>
								</div>
								<div class="form-group row m-b-15 <?=form_error('level') ? 'has-error' : null?>">
									<label class="col-md-4 col-sm-4 col-form-label" for="message">Level * :</label>
									<div class="col-md-8 col-sm-8">
									<select class="form-control" type="text" id="number" name="level" data-parsley-type="level" placeholder="Level" />
										<option value="">--Opsi--</option>
										<option value="1"value="<?=set_value('level') == 1? "selected" : null?>" >Admin</option>
										<option value="2"<?=set_value('level') == 2? "selected" : null?>>Operator</option>
										<option value="3"<?=set_value('level') == 3? "selected" : null?>>Circle Group</option>
										<option value="4"<?=set_value('level') == 4? "selected" : null?>>Supervisor</option>
										<option value="5"<?=set_value('level') == 5? "selected" : null?>>Manager</option>
								</select>
								<?=form_error('level')?>
									</div>
								</div>
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">		
										<button type="reset" class="btn btn-danger fa fa-save"> Reset</button>
										<button type="submit" class="btn btn-success fa fa-save"> Save</button>
										<a href="<?=site_url('c_user')?>" class="btn btn-warning fa fa-times-circle pull-right"> Cancel </a>
									</div>
								</div>
							</form>
						</div>
						<!-- end panel-body -->
				</div>
			</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->			
						</tbody>
				</div>
				<!-- end panel-body -->
			</div>
		</div>
			</div>



			<!-- end row -->
		</div>
		<!-- end #content -->