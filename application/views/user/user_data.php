
<!-- begin #content -->
</br>
</br>
<div id="content" class="content">
<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Users</li>
	</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
<h3 class="page-header"><b>User Data</b><small> <b>||</b> Point of Blended System <b>||</b></small></h3>
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
					<h4 class="panel-title">Users Data </h4>
				</div>
					</br>
					<div>
						&nbsp;&nbsp;&nbsp;&nbsp;

						<a href="<?=site_url('c_user/add_user')?>" class="btn btn-purple fa fa-user-plus"> Add Users 
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
								<th class="text-nowrap">Name</th>
								<th class="text-nowrap">Username</th>
								<th class="text-nowrap">Level</th>
								<th class="text-nowrap"><center>Action</center></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach($row->result() as $key => $data) {?>
							<tr class="odd gradeX">
								<td width="1%" class="f-s-600 text-inverse"><?=$no++?>.</td>
								<td><?=$data->name ?> </td>
								<td><?=$data->username ?> </td>
								<td><?php $level = $data->level;  
										if($level == 1) {
											echo "Admin";
										}elseif($level == 2) {
											echo "Operator";
										}elseif($level == 3) {
											echo "cg";
										}elseif ($level == 4) {
											echo "Supervisor";
										}else{
											echo "Manager";
										}
								?> </td>
								<td class="text-center" width="160px">
									<form action="<?=site_url('c_user/delete_user')?>" method="post">
									<a href="<?=site_url('c_user/edit_user/'.$data->user_id)?>" class="btn btn-success btn-xs fa fa-pencil-alt"> Update </a>
									<input type="hidden" name="user_id" value="<?=$data->user_id?>">
									<button onclick="return confirm('Are you sure ??')" class="btn btn-danger btn-xs fa fa-trash"> Delete
									</button>
								</form>
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
		