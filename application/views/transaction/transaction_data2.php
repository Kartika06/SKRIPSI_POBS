
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
<h3 class="page-header"><b>List OKP Waiting To Blend </b> </h3>
<div class="row">			

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
						<?php 
							$no = 1;
          					foreach($row->result() as $key => $data) {
          				?>
							<tr class="odd gradeX">
								<td><?=$no++ ?>.</td>
								<td><?=$data->txtbatch_no ?> </td>
								<!--<td><?=$data->item_description ?> </td>-->
								<td><?=$data->intTotalBlend ?> </td>
								<td><?=$data->txtUomScale ?> </td>
								
								<td class="text-center" width="15%">
									<a href="<?=site_url('c_transaction2/transaction/'.$data->txtbatch_no.'')?>" class="btn btn-success btn-xs fa fa-shopping-cart"> Transaction </a>
									</a>
								</td>
								<td class="text-center" width="15%">
									<a href="#)?>" class="btn btn-success btn-xs fa fa-file-excel"> Excel </a>
									</a>
								</td>
							</tr>
						<?php } ?>
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
		