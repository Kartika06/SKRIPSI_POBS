<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_transaction2 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		error_reporting(E_ALL ^  E_NOTICE);
		$this->load->model('dashboard_m');
		$this->load->model('transaction_m2');
		$this->load->model('user_m');
		$this->dwms = $this->load->database('dwms', TRUE);
		// $this->db_stb = $this->load->database('db_stb', TRUE);
	}

	public function index()
	{
		set_time_limit(0);
		$data['row'] = $this->transaction_m2->gets();
		// $data['proses'] = $this->dashboard_m->gets("proses");
		// $data['ready'] = $this->dashboard_m->gets("ready");
		// $data['complete'] = $this->dashboard_m->get();
//		exit(var_dump($data['row']->result()));
		// exit(var_dump($data['row']));
		$this->template->load('template', 'transaction/transaction_data2',$data);
	}

	//Function transaction
	public function transaction($batch_no)
	{
		set_time_limit(500);
		$data['row'] = $this->transaction_m2->gets($batch_no);
//		$data['items'] = $this->transaction_m2->get_item($batch_no,1);
		$data['batch'] = $this->transaction_m2->get_batch2($batch_no);
		$data['count_item'] = $this->transaction_m2->count_item($batch_no);
		$data['count_item_actual'] = $this->transaction_m2->count_item_actual($batch_no);
		$data['max_count_no'] = $this->transaction_m2->max_count_no($batch_no)->row_array();
    	// exit(var_dump($data['max_count_no']->row_array()));
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

/*
		$batch=$data['batch']->num_rows();
		$cek_complete=$value4['complete_batch']/$value2['jml_item'];
		$hitung=$value2['jml_item'] / $value2['total_blend'];
	    $item=round($hitung);
//	    exit(var_dump($cek_complete));
			 if ($cek_complete>$value['total_blend']) {
            	echo "<script> alert('Produk ".$batch_no." telah selsai di proses'); </script>";
            	echo "<script>window.location='".site_url('c_transaction2')."'; </script>";
			}else if ($value3['total_item'] > $item) {
            	echo "<script> alert('Item baru tersedia ".$item." dari ".$value3['total_item']." item seharusnya '); </script>";
            	echo "<script>window.location='".site_url('c_transaction2')."'; </script>";
			}
*/

			// exit(var_dump($value2));
		if ($batch_no==$value4['batch_no']) {
			$this->template->load('template', 'transaction/transaction_form2',$data);
		}else{
			foreach ($this->transaction_m2->item_insert($value['txtbatch_no']) as $row) {
				$array[] = array(
					'batch_no' 		=> $value['txtbatch_no'], 
					'item_code' 		=> $row->txtItemCode, 
					'item_description' 	=> $row->txtItemDescription, 
					'data_barcode' 		=> $row->txtDataBarcode, 
					'count_no' 		=> $row->intCountNo, 
					'actual_weight' 	=> $row->fltActualWeight, 
					'print_weight'	 	=> $row->txtPrintWeight, 
					'uom_ingredient'	=> $row->txtUomIngredient, 
				);
			}
			// exit(var_dump($array));
		    $this->db->insert_batch('blend_transaction_checklist2', $array);
			// exit(var_dump($this->db));
			$this->template->load('template', 'transaction/transaction_form2',$data);
		}
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

	public function validasi() {
		$kode=$this->input->post('kode');
		$status=1;
        $data=$this->transaction_m2->validasi($kode);
        echo $data->num_rows();
	}

	public function validasi_blend() {
		$batch=$this->input->post('batch');
		$blend=$this->input->post('blend');
//		$status=1;
        $data=$this->transaction_m2->validasi_blend($batch,$blend);
        echo $data->num_rows();
	}

	public function get_batch_no() {
		$kode=$this->input->post('kode');
        $data=$this->transaction_m2->get_okp($kode)->row_array();
        echo $data['batch_no'];
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
	    //$tes_url = redirect("c_transaction2/transaction/$batch_no/$url_count");
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

	    redirect("c_transaction2/transaction/$batch_no");
	    
	}

	function update_checklist() {
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = date("Y-m-d");
		$jam = date("h:i:s");
	    $data = array();
	    $batch_no = $this->input->post('batch_no');
	    $count_no = $this->input->post('count_no');
	    $banyak=count($this->input->post('check-tab1'));
//	    $url_count = $count_no + 1;
	    //$tes_url = redirect("c_transaction2/transaction/$batch_no/$url_count");
	        $data = array('datetime_check'	=> date('Y-m-d H:i:s'),
	        			  'bin_no'			=> $this->input->post('bin'),
	        			  'line_proses'		=> $this->input->post('line_proses'),
	        			  'status' 			=> 1,
	        			  'operator'		=> $this->session->userdata('nama')
	        			  );
	    //echo "<pre>";
	    //print_r($data);
	    //echo "</pre>";
	    //die();
//	    exit(var_dump($_POST));
	    $this->db->where('data_barcode',$this->input->post('kode'));
	    $this->db->update('blend_transaction_checklist2', $data);

//	    redirect("c_transaction2/transaction/$batch_no");
	    
	}

	function manual_ingredient(){
		$post = $this->input->post(null, TRUE);
		$query = $this->user_m->validasi_spv($post);
			if ($query->num_rows() > 0) {
				echo "berhasil";
			}else{
				echo "gagal";
			}
	}

	function complete() {
		date_default_timezone_set("Asia/Jakarta");
	    $data = array('batch_no'			=> $this->input->post('batch_no'),
	    			  'formula_no'			=> $this->input->post('formula_no'),
	    			  'formula_description'	=> $this->input->post('formula_desc'),
	    			  'formula_version'		=> $this->input->post('formula_ver'),
//	    			  'formula_code'		=> $this->input->post('formula_code'),
	    			  'item_code'			=> $this->input->post('item_code'),
	    			  'item_description'	=> $this->input->post('item_desc'),
	    			  'qty_actual'			=> $this->input->post('qty_actual'),
	    			  'uom_scale'			=> $this->input->post('uom_scale'),
	    			  'total_blend'			=> $this->input->post('total_blend'),
	    			  'date_finish'			=> date('Y-m-d H:i:s'),
	    			  'operator'			=> $this->session->userdata('nama')
	    			);
	    $this->db->insert('finish_scan', $data);	    
	}

	function error_scan() {
		date_default_timezone_set("Asia/Jakarta");
		if ($this->input->post('batch') == '') {
	        $data=$this->transaction_m2->get_okp($this->input->post('kode'))->row_array();
	        $batch_no = $data['batch_no'];
		}else{
			$batch_no = $this->input->post('batch');
		}
	    $data = array('batch_no'			=> $batch_no,
	    			  'data_barcode'		=> $this->input->post('kode'),
	    			  'keterangan'			=> $this->input->post('error'),
	    			  'date_error'			=> date('Y-m-d H:i:s'),
	    			  'operator'			=> $this->session->userdata('nama')
	    			);
	    $this->db->insert('error_scan', $data);	    
	}

	function export($batch_no){
		$data['batch_no'] = $batch_no;
		$data['export'] = $this->transaction_m2->export_data($batch_no);
//		exit(var_dump($data['export']->result()));
		$this->template->load('template', 'reports/export',$data);

	}

	function data_excel($batch_no){
		$data['batch_no'] = $batch_no;
		$data['export'] = $this->transaction_m2->export_data($batch_no);
//		exit(var_dump($data['export']->result()));
		$this->load->view('reports/reports',$data);
	}

	function input_tracebin_old()
	{
		date_default_timezone_set('Asia/Jakarta');
		$post = $this->input->post();
		$params['txtNomorBin'] 			= $post['bin_no'];
		$params['intStationID'] 		= 11;
		$params['intUserID'] 			= 48;
		$params['bitActive']			= 1; //tambahan untuk identifikasi bahwa transaksi masih aktif
		$params['dtmTransactionDate']		= date('Y-m-d H:i:s');
		$params['txtInsertedBy'] 		= "System POBS";
		$params['dtmInsertedDate'] 		= date('Y-m-d H:i:s');
		$this->db_stb->insert('trTransactionHead', $params);

		$this->db_stb->select('MAX(intTransactionHeadID) AS intTransactionHeadID');
		$this->db_stb->from('trTransactionHead');
		$rows=$this->db_stb->get()->row();

		// exit(var_dump($post['okp']));
		$okp = $this->transaction_m2->get_okp_data($post['okp'])->row_array();
		// $intTransactionHeadID = $rows->intTransactionHeadID + 1;
		// $get = $this->Transaction_m->get_blending_data($this->input->post('kode'),$this->input->post('count_no'))->row_array();
		// exit(var_dump($post));
		$data_input = array(
						'intTransactionHeadID' 	=> $rows->intTransactionHeadID,
						'txtBatchNo'		=> $okp['batch_no'],
						'txtItemCode'		=> $okp['item_code'],
						'txtItemDescription'	=> $okp['item_description'],
						'txtLineProses'		=> $post['line_proses'],
						'intCountNo'		=> $post['count_no'],
						'txtNomorBin'		=> $post['bin_no'],
						'txtOperator'		=> $this->session->userdata('nama'),
						'txtInsertedBy'		=> "System POBS",
						'dtmInsertedDate'	=> date('Y-m-d H:i:s'),
					);
		
		$simpan = $this->db_stb->insert('trTransactionDetail3_pobs',$data_input);
		$simpan2 = $this->db->insert('blend_trTransactionDetail3_pobs',$data_input);
		if ($simpan) {
			echo "berhasil";
		}else{
			echo "yaaaaaah :(";
		}
	}

	function input_tracebin()
	{
		date_default_timezone_set('Asia/Jakarta');
		$post = $this->input->post();
		// $params['txtNomorBin'] 			= $post['bin_no'];
		// $params['intStationID'] 		= 11;
		// $params['intUserID'] 			= 48;
		// $params['bitActive']			= 1; //tambahan untuk identifikasi bahwa transaksi masih aktif
		// $params['dtmTransactionDate']		= date('Y-m-d H:i:s');
		// $params['txtInsertedBy'] 		= "System POBS";
		// $params['dtmInsertedDate'] 		= date('Y-m-d H:i:s');
		// $this->db_stb->insert('trTransactionHead', $params);

		// $this->db_stb->select('MAX(intTransactionHeadID) AS intTransactionHeadID');
		// $this->db_stb->from('trTransactionHead');
		// $rows=$this->db_stb->get()->row();

		// exit(var_dump($post['okp']));
		$okp = $this->transaction_m2->get_okp_data($post['okp'])->row_array();
		// $intTransactionHeadID = $rows->intTransactionHeadID + 1;
		// $get = $this->Transaction_m->get_blending_data($this->input->post('kode'),$this->input->post('count_no'))->row_array();
		// exit(var_dump($post));
		$data_input = array(
						'intTransactionHeadID' 	=> '-',
						'txtBatchNo'		=> $okp['batch_no'],
						'txtItemCode'		=> $okp['item_code'],
						'txtItemDescription'	=> $okp['item_description'],
						'txtLineProses'		=> $post['line_proses'],
						'intCountNo'		=> $post['count_no'],
						'txtNomorBin'		=> $post['bin_no'],
						'txtOperator'		=> $this->session->userdata('nama'),
						'txtInsertedBy'		=> "System POBS",
						'dtmInsertedDate'	=> date('Y-m-d H:i:s'),
					);
		
		// $simpan = $this->db_stb->insert('trTransactionDetail3_pobs',$data_input);
		$simpan = $this->db->insert('blend_trTransactionDetail3_pobs',$data_input);
		if ($simpan) {
			echo "berhasil";
		}else{
			echo "yaaaaaah :(";
		}
	}












// TRIAL VALIDASI BIN
	public function okp_validasi()
	{
		set_time_limit(0);
		$data['row'] = $this->transaction_m2->gets();
		// $data['proses'] = $this->dashboard_m->gets("proses");
		// $data['ready'] = $this->dashboard_m->gets("ready");
		// $data['complete'] = $this->dashboard_m->get();
//		exit(var_dump($data['row']->result()));
		$this->template->load('template', 'transaction/transaction_data2_validasi',$data);
	}


	public function transaction_validasi($batch_no)
	{
		set_time_limit(0);
		$data['row'] = $this->transaction_m2->gets($batch_no);
//		$data['items'] = $this->transaction_m2->get_item($batch_no,1);
		$data['batch'] = $this->transaction_m2->get_batch2($batch_no);
		$data['count_item'] = $this->transaction_m2->count_item($batch_no);
		$data['count_item_actual'] = $this->transaction_m2->count_item_actual($batch_no);
		$data['max_count_no'] = $this->transaction_m2->max_count_no($batch_no)->row_array();
    	// exit(var_dump($data['max_count_no']->row_array()));
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

/*
		$batch=$data['batch']->num_rows();
		$cek_complete=$value4['complete_batch']/$value2['jml_item'];
		$hitung=$value2['jml_item'] / $value2['total_blend'];
	    $item=round($hitung);
//	    exit(var_dump($cek_complete));
			 if ($cek_complete>$value['total_blend']) {
            	echo "<script> alert('Produk ".$batch_no." telah selsai di proses'); </script>";
            	echo "<script>window.location='".site_url('c_transaction2')."'; </script>";
			}else if ($value3['total_item'] > $item) {
            	echo "<script> alert('Item baru tersedia ".$item." dari ".$value3['total_item']." item seharusnya '); </script>";
            	echo "<script>window.location='".site_url('c_transaction2')."'; </script>";
			}
*/

			// exit(var_dump($value2));
		if ($batch_no==$value4['batch_no']) {
			$this->template->load('template', 'transaction/transaction_form2_validasi',$data);
		}else{

			foreach ($this->transaction_m2->item_insert($value['batch_no']) as $row) {
				$array[] = array(
					'batch_no' 			=> $value['batch_no'], 
					'item_code' 		=> $row->item_code, 
					'item_description' 	=> $row->item_description, 
					'data_barcode' 		=> $row->data_barcode, 
					'count_no' 			=> $row->count_no, 
					'actual_weight' 	=> $row->actual_weight, 
					'print_weight'	 	=> $row->print_weight, 
					'uom_ingredient'	=> $row->uom_scale, 
				);
			}
		    $this->db->insert_batch('blend_transaction_checklist2', $array);
			// exit(var_dump($this->db));
			$this->template->load('template', 'transaction/transaction_form2_validasi',$data);
		}
	}




	public function cek_bin()
	{
		$post = $this->input->post();
		$cek_bin_tracebin = $this->transaction_m2->cek_bin_tracebin($post['txtBinNumber']);
		$cek_bin_blending = $this->transaction_m2->cek_bin_blending($post['txtBinNumber'],$cek_bin_tracebin->row()->txtBatchNo);
		// echo stristr('(R21)', $cek_bin_tracebin->row()->txtDescription)." - ".$cek_bin_tracebin->row()->txtDescription;
		if ($cek_bin_tracebin->num_rows() >= 1) {
			// exit(var_dump($cek_bin_blending->row()));
			if ($cek_bin_blending->num_rows() >= 1) {
				echo "sudah blend";
			}else{
				echo $cek_bin_tracebin->row()->txtBatchNo;
			}
		}else{
			echo "Wooops";
		}

	}







}

