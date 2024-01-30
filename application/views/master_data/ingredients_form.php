
<!-- begin #content -->
</br>
</br>
<div id="content" class="content">
<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Ingredients Form</li>
	</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
<h3 class="page-header"><b><?=ucfirst($page)?> Ingredients</b><small> <b>||</b> Point of Blended System <b>||</b></small></h3>
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
					<h4 class="panel-title">Form <?=ucfirst($page)?> Ingredients</h4>
				</div>
					</br>
					<div>
					</div>
				<!-- end panel-heading -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<form action="<?=site_url('c_ingredients/process')?>" method="post" class="form-horizontal" data-parsley-validate="true" name="demo-form">
								<div class="form-group row m-b-15">
									<input type="hidden" name="id" value="<?=$row->ingredients_id?>">
									<label class="col-md-4 col-sm-4 col-form-label">Ingredients Code *</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" name="ingredients_code" value="<?=$row->ingredients_code?>" placeholder="Code" required/>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label">Item *</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" name="item" value="<?=$row->item?>" placeholder="item" required/>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label">Quantity *</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" name="quantity" value="<?=$row->quantity?>" placeholder="quantity" required/>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label">UOM *</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" name="uom_id" value="<?=$row->uom_id?>" placeholder="Prinsipal" required/>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label">Product Name *</label>
									<div class="col-md-8 col-sm-8">
					                    <select class="form-control" id="select-required" name="product_id" data-parsley-required="true">
					                      <option value="">Please choose</option>
					                      <option value="1">Foo</option>
					                      <option value="2">Bar</option>
					                    </select>
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
										<a href="<?=site_url('c_ingredients')?>" class="btn btn-warning fa fa-times-circle pull-right"> Cancel </a>
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