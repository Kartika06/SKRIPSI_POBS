<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_transaction extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		error_reporting(E_ALL ^  E_NOTICE);
		$this->load->model('transaction_m2');
		$this->db2 = $this->load->database('db2', TRUE);
	}

	public function index()
	{
		$data['row'] = $this->transaction_m2->gets();
//		exit(var_dump($data['row']->result()));
		$this->template->load('template', 'transaction/transaction_data',$data);
	}

	//Function transaction
	public function transaction($batch_no)
	{
		$data['row'] = $this->transaction_m2->gets($batch_no);
//		$data['items'] = $this->transaction_m2->get_item($batch_no,1);
		$data['batch'] = $this->transaction_m2->get_batch($batch_no);
		$data['count_item'] = $this->transaction_m2->count_item($batch_no);
		$data['count_item_actual'] = $this->transaction_m2->count_item_actual($batch_no);
//		$data['counter'] = $this->transaction_m2->counter_batch($batch_no);
//		$data['counter'] = $this->transaction_m2->counter($batch_no);
//		$data['row2'] = $this->transaction_m->get2($batch_no,$count_no);
//		$data['batch_no'] = $this->transaction_m->get3($batch_no);



	$value=$data['row']->row_array();
	$value2=$data['count_item']->row_array();
	$value3=$data['count_item_actual']->row_array();
	$value4=$data['batch']->row_array();
//		foreach ($data['row']->result() as $value) {}
//		foreach ($data['count_item']->result() as $value2) {}
//		foreach ($data['count_item_actual']->result() as $value3) {}
//		foreach ($data['batch']->result() as $value4) {}
		$batch=$data['batch']->num_rows();
		$hitung=$value2['jml_item'] / $value2['total_blend'];
	    $item=round($hitung);
//	    exit(var_dump($value['total_blend']));
			 if ($batch>=$value2['total_blend']) {
            	echo "<script> alert('Produk ".$batch_no." telah selsai di proses'); </script>";
            	echo "<script>window.location='".site_url('c_transaction')."'; </script>";
			}else if ($value3['total_item'] > $item) {
            	echo "<script> alert('Item baru tersedia ".$item." dari ".$value3['total_item']." item seharusnya '); </script>";
            	echo "<script>window.location='".site_url('c_transaction')."'; </script>";
			}

		$this->template->load('template', 'transaction/transaction_form',$data);
	}

	public function status_blend()
	{
		//$data['row1'] = $this->transaction_m->get($batch_no,$count_no);
		//$data['row2'] = $this->transaction_m->get2($batch_no,$count_no);
		//$data['batch_no'] = $this->transaction_m->get3($batch_no);
		//$data['count_item'] = $this->transaction_m->count_item($batch_no,$count_no);
		//$data['count_item_actual'] = $this->transaction_m->count_item_actual($batch_no);

		$this->template->load('template', 'transaction/status_blend');
	}

	public function get_item() {
		$kode=$this->input->post('data_barcode');
        $data=$this->transaction_m->get_item($kode);
        echo json_encode($data);
	}

	function simpan_data() {
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = date("Y-m-d");
		$jam = date("h:i:s");
	    $data = array();
	    $batch_no = $this->input->post('batch_no');
	    $count_no = $this->input->post('count_no');
	    $banyak=count($this->input->post('check-tab1'));
//	    $url_count = $count_no + 1;
	    //$tes_url = redirect("c_transaction/transaction/$batch_no/$url_count");
	    foreach($this->input->post('check-tab1') as $data_barcode) {
	        $data[] = array('data_barcode' => $data_barcode,
	        				'batch_no' => $batch_no,
	        				'datetime_check' => date('Y-m-d H:i:s'),
	        				'counter' => $count_no,
	        				'time_check' => $jam,
	        				'date_check' => $tanggal
	        				);
	    }
	    //echo "<pre>";
	    //print_r($data);
	    //echo "</pre>";
	    //die();
//	    exit(var_dump($data));
	    $this->db->insert_batch('blend_transaction_checklist', $data);

	    redirect("c_transaction/transaction/$batch_no");
	    
	}

}

