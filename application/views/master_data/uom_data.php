
<!-- begin #content -->
</br>
</br>
<div id="content" class="content">
<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Uom</li>
	</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
<h3 class="page-header"><b>Data Uom</b><small> <b>||</b> Point of Blended System <b>||</b></small></h3>
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
					<h4 class="panel-title">Data Uom </h4>
				</div>
					</br>
					<div>
						&nbsp;&nbsp;&nbsp;&nbsp;

						<a href="<?=site_url('c_uom/add')?>" class="btn btn-purple fa fa-plus-square"> Add Data Uom 
						</button>
						</a>
					</div>
				<!-- end panel-heading -->
				<!-- begin panel-body -->
				<div class="panel-body table-responsive">
					<table id="data-table-default" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="1%">No</th>
								<th class="text-nowrap">Uom Name</th>
								<th class="text-nowrap">Description</th>
								<th class="text-nowrap"><center>Action</center></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach($row->result() as $key => $data) {?>
							<tr class="odd gradeX">
								<td width="1%" class="f-s-600 text-inverse"><?=$no++?>.</td>
								<td><?=$data->uom_name ?> </td>
								<td><?=$data->description ?> </td>
								<td class="text-center" width="15%">
									<a href="<?=site_url('c_uom/edit/'.$data->uom_id)?>" class="btn btn-success btn-xs fa fa-pencil-alt"> Update </a>
									<a href="<?=site_url('c_uom/delete_uom/'.$data->uom_id)?>" onclick="return confirm('Are you sure ??')" class="btn btn-danger btn-xs fa fa-trash"> Delete
									</a>
								</td>
							</tr>
							<?php
						} ?>
						</tbody>
					</table>
				</div>
			</div>
				<!-- end panel-body -->
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