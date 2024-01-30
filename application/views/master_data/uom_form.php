
<!-- begin #content -->
</br>
</br>
<div id="content" class="content">
<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Form <?=ucfirst($page)?> Uom</li>
	</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
<h3 class="page-header"><b>Form <?=ucfirst($page)?> Uom</b><small> <b>||</b> Point of Blended System <b>||</b></small></h3>
<!-- end page-header -->
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
					<h4 class="panel-title">Form <?=ucfirst($page)?> Uom</h4>
				</div>
					</br>
					<div>
					</div>
				<!-- end panel-heading -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<form action="<?=site_url('c_uom/process')?>" method="post" class="form-horizontal" data-parsley-validate="true" name="demo-form">
								<!-- begin step-1 -->
						<div id="step-1">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Please complete the data !!</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<input type="hidden" name="id" value="<?=$row->uom_id?>">
											<label class="col-md-3 col-form-label text-md-right">Uom Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="uom_name" placeholder="Uom Name" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Description <span class="text-danger"></span></label>
											<div class="col-md-6">
												<textarea type="text" name="description" placeholder="Description" data-parsley-group="step-1" data-parsley-required="true" class="form-control" /> </textarea>
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-1 -->
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">		
										<button type="reset" class="btn btn-danger fa fa-save"> Reset</button>
										<button type="submit" name="<?=$page?>" class="btn btn-success fa fa-save"> <?=ucfirst($page)?></button>
										<a href="<?=site_url('c_uom')?>" class="btn btn-warning fa fa-times-circle pull-right"> Cancel </a>
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
						
						