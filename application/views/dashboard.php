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
								<?php echo round($complete->num_rows()/date('d'),2);?> OKP/ DAY
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
						<h4 class="panel-title">Data Ready To Blend </h4>
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
						<h4 class="panel-title">Data Weighing Process </h4>
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

				<div class="panel panel-inverse targetDiv" id="CompleteScan">
					<!-- begin panel-heading -->
					<div class="panel-heading">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
						<h4 class="panel-title">Data Complete Scan </h4>
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
									<th class="text-nowrap">Print</th>
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
									<td><a href="<?php echo base_url('c_transaction2/export/').$data->batch_no;?>" class="btn btn-success btn-sm"><i class="fa fa-file-excel"></i> Excel</a></td>
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
