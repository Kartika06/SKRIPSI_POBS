
<!-- begin #content -->
</br>
</br>
<div id="content" class="content">
<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Transaction</li>
	</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
<h3 class="page-header"><b>Transaction Data</b></h3>
<div class="row">
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-teal">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">WIP PENDING</div>
							<div class="stats-number">PD-2191A</div>
							<div class="stats-progress progress">
							<div class="progress-bar" style="width: 100%;"></div>
							</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">WIP ON GOING</div>
							<div class="stats-number">PD-2190A</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 100%;"></div>
							</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-purple">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">WIP COMPLETED</div>
							<div class="stats-number">PD-2189A</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 100%;"></div>
							</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-black">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">WIP CLOSED</div>
							<div class="stats-number">PD-2188</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 100%;"></div>
							</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
				<!-- end col-3 -->
			

<!-- end page-header -->
<div class="col-md-12">				
			<div class="panel panel-inverse">
				<!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="  panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">List Data OKP</h4>
				</div>
					</br>
					<div>
					</div>
				<!-- end panel-heading -->
				<!-- begin panel-body -->
				<div class="panel-body table-responsive">
					<table id="data-table-default" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="1%">No</th>
								<th class="text-nowrap">Batch Number</th>
								<!--<th class="text-nowrap">Product Name</th>-->
								<th class="text-nowrap">QTY</th>
								<th class="text-nowrap">UOM</th>
								<th class="text-nowrap"><center>Action</center></th>
								<th class="text-nowrap"><center>Print</center></th>
							</tr>
						</thead>
						
						<tbody>
							<?php $no = 1;
              					foreach($row->result() as $key => $data) {?>
							<tr class="odd gradeX">
								<td><?=$no++ ?>.</td>
								<td><?=$data->batch_no ?> </td>
								<!--<td><?=$data->item_description ?> </td>-->
								<td><?=$data->total_blend ?> </td>
								<td>BLD </td>
								
								<td class="text-center" width="15%">
									<a href="<?=site_url('c_transaction/transaction/'.$data->batch_no.'')?>" class="btn btn-success btn-xs fa fa-shopping-cart"> Transaction </a>
									</a>
								</td>
								<td class="text-center" width="15%">
									<a href="#" class="btn btn-success btn-xs fa fa-file-excel"> Excel </a>
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

		<!-- Scan QRCODE -->
		