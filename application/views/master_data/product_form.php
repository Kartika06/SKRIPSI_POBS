
<!-- begin #content -->
</br>
</br>
<div id="content" class="content">
<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Product Form</li>
	</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
<h3 class="page-header"><b><?=ucfirst($page)?> Product</b><small> <b>||</b> Point of Blended System <b>||</b></small></h3>
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
					<h4 class="panel-title">Form <?=ucfirst($page)?> Product</h4>
				</div>
					</br>
					<div>
					</div>
				<!-- end panel-heading -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<form action="<?=site_url('c_product/process')?>" method="post" class="form-horizontal" data-parsley-validate="true" name="demo-form">
								<div class="form-group row m-b-15">
									<input type="hidden" name="id" value="<?=$row->product_id?>">
									<label class="col-md-4 col-sm-4 col-form-label">Art Code *</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" name="art_code" value="<?=$row->art_code?>" placeholder="Art Code" required/>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label">Product Name *</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" name="product_name" value="<?=$row->product_name?>" placeholder="Product Name" required/>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label">Abbreviation *</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" name="abbreviation" value="<?=$row->abbreviation?>" placeholder="Abbreviation" required/>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label">Prinsipal *</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" name="prinsipal" value="<?=$row->prinsipal?>" placeholder="Prinsipal" required/>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label">Batch Size *</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" name="batchsize" value="<?=$row->batchsize?>" placeholder="Batch Size" required/>
									</div>
								</div>
									<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label">Description</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" name="description" value="<?=$row->description?>" placeholder="Description"/>
									</div>
								</div>
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">		
										<button type="reset" class="btn btn-danger fa fa-save"> Reset</button>
										<button type="submit" name="<?=$page?>" class="btn btn-success fa fa-save"> <?=ucfirst($page)?></button>
										<a href="<?=site_url('c_product')?>" class="btn btn-warning fa fa-times-circle pull-right"> Cancel </a>
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