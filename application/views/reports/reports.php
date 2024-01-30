<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=report_".$batch_no.".xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table ">
		<thead>
			<tr>
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
				foreach ($export->result() as $data) { 
			?>
			<tr>
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
</body>
</html>
