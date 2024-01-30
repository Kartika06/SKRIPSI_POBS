<!-- begin #content -->
</br>
</br>
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
						<h4 class="panel-title">PREVIEW EXPORT DATA </h4>
					</div>
					<!-- end panel-heading -->
					<!-- begin panel-body -->
					<div class="panel-body">
						<div class="col-md-12">
							<a href="<?=base_url('c_transaction2/data_excel/').$batch_no?>" class="btn btn-success" target="_blank"><i class="fa fa-file-excel"></i> Export</a>
							<div class="table-responsive">
								<table class="table ">
									<thead>
										<tr>
											<th>No</th>
											<th>Batch No</th>
											<th>Item Code</th>
											<th>Item Description</th>
											<th>UOM</th>
											<th>Count No</th>
											<th>Actual Weight</th>
											<th>Status</th>
											<th>Date</th>
											<th>Time</th>
											<th>Bin Number</th>
											<th>Operator</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no=1;
											foreach ($export->result() as $data) { 
										?>
										<tr>
											<td><?=$no++?></td>
											<td><?=$data->batch_no?></td>
											<td><?=$data->item_code?></td>
											<td><?=$data->item_description?></td>
											<td><?=$data->uom_ingredient?></td>
											<td><?=$data->count_no?></td>
											<td><?=$data->actual_weight?></td>
											<td><?=$data->status?></td>
											<td><?=date('d-F-Y',strtotime($data->datetime_check))?></td>
											<td><?=date('h:i:s',strtotime($data->datetime_check))?></td>
											<td><?=$data->bin_no?></td>
											<td><?=$data->operator?></td>
										</tr>
										<?php
											}
										?>
									</tbody>
								</table>
							</div>
							<a href="<?=base_url('c_transaction2/data_excel/').$batch_no?>" class="btn btn-success" target="_blank"><i class="fa fa-file-excel"></i> Export</a>
						</div>
					</div>
					<!-- end panel-body -->
				</div>
			</div>
			<!-- end panel -->
		</div>
