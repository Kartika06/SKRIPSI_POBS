<?php
session_start();
require_once ("dbconn.php");
require_once ("pos.php");

$term = trim(strip_tags($_GET['term']));
$row_set = array();
$pos = new pos();

$data = $pos->autoCompleteItem($term);
foreach ($data[1] as $row) {
	$row['label']=htmlentities(stripslashes($row['formula_no']));
	$row['value']=htmlentities(stripslashes($row['formula_no']));
	if($row['note'] == '' or $row['note'] == null){
		$row['note']='';
	}else{
		$row['note']='<dd><small> Note : '.$row['note'].'</small></dd>';
	}
	$row['price']='<dd><small> Rp.'.number_format($row['price']).' /'.$row['unit'].'</small></dd>';

	$row['id_item']=$row['id_item'];
	$row['unit']=$row['unit'];
	$row_set[] = $row;
}

echo json_encode($row_set);
?>