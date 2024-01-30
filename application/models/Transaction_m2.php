<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaction_m2 extends CI_Model {
	public function get($batch_no = null,$count_no = null)
	{
		$kriteria = array(NULL);
		$month = date('m'); 
		$year = date('Y');
		$tes = $month.'/'.$year;
		$date = date("Y-m-d");
		$this->db->select('*');
		$this->db->from('transaction_weighing');
		//$this->db->join('transaction_detail as b', 'a.id_transact = b.id_transact_master','left');
		//$this->db->join('transaction_weighing a');
	    //$line_type = 1;
		if($batch_no != null){
			$this->db->where('batch_no',$batch_no);
			
		}
		//$this->db->where('creation_date',$month);
		//$this->db->where('a.line_type', $line_type);
		//$this->db->where('uom_formula', 'BLD');
		$this->db->where('count_no !=', 0);
		$this->db->like('batch_no','PD');
		$this->db->not_like('batch_no','PDE');
//		$this->db->where("month(creation_date)",date('m'));
//		$this->db->where("month(creation_date)-1",date('m')-1);
//		$this->db->like('creation_date',$tes);
		$this->db->where('is_finish_batch', 1);
		$this->db->where("month(creation_date) IN (date('m'), date('m')-1) ");
 		$this->db->group_by('batch_no', $batch_no); 
		$this->db->order_by('creation_date','DESC');
		$this->db->limit(200);

		//$this->db->group_by('id_transact');
		//var_dump($tes);
		//semua batch_no yang awalannya PD dan juga setelah angka terdiri 1 huruf (selain itu bukan ke proses Blending)
		$query = $this->db->get();

		return $query;
	}

/*
	public function get2($batch_no = null,$count_no = null)
	
	{
		$ignore = array('T70','T60','T50');
		$this->db->select('a.uom_ingredient,b.actual_weight,b.data_barcode,a.item_code,a.item_description,a.batch_no,a.line_type,a.uom_ingredient,b.count_no');
		$this->db->from('transaction_weighing a');
		$this->db->join('transaction_detail as b', 'a.id_transact=b.id_transact_master');
	    $line_type = -1;
		$this->db->where('a.batch_no',$batch_no);
		$this->db->where('a.line_type',$line_type);
		$this->db->where_not_in('a.uom_ingredient', $ignore);
		$this->db->where('b.count_no', $count_no);
		//$this->db->group_by('b.id_transact');
		$query = $this->db->get();
		return $query;
	}

	public function get3($batch_no = null) {
		$this->db->from('transaction_weighing');
		$line_type = 1;
		$this->db->where('batch_no',$batch_no);
		$this->db->where('line_type',$line_type);
		$query = $this->db->get();
		return $query;
	}
*/
	public function gets($batch_no = null){
 		$sekarang = date('m');
 		$kemaren = date('m',strtotime('-1 month'));
		if($batch_no == null){
	 		$data="SELECT * FROM trdwms_transaction_weighingheader 
        	       WHERE bitCloseHeader = 1
        	       AND MONTH(dtmInsertedHeader) <= $sekarang
        	       AND MONTH(dtmInsertedHeader) >= $kemaren
	 			   AND txtbatch_no LIKE 'PD%' 
            	   AND txtbatch_no NOT LIKE 'PDE%'
            	   GROUP BY txtbatch_no 
            	   ORDER BY txtWeighingHeaderID DESC
            	   LIMIT 200";
		}else{
	 		$data="SELECT * FROM trdwms_transaction_weighingheader
	               WHERE txtBatch_no = '$batch_no'
            	   GROUP BY txtBatch_no 
            	   ORDER BY txtWeighingHeaderID DESC
            	   LIMIT 200";
		}

 		$query = $this->dwms->query($data);
		return $query;
	}

	public function get_item($batch_no,$counter){
		$this->db->select('*');
		$this->db->from('transaction_weighing');
		$this->db->join('transaction_detail','transaction_detail.id_transact_master=transaction_weighing.id_transact');
		$this->db->where('transaction_detail.count_no',$counter);
		$this->db->where('transaction_weighing.batch_no',$batch_no);
		$this->db->group_by('transaction_weighing.item_code');
		$this->db->order_by('transaction_detail.count_no','ASC');
		$query = $this->db->get();
		return $query;
	}

	public function get_item2($batch_no,$counter){
		$this->db->select('*');
		$this->db->from('blend_transaction_checklist2');
		$this->db->where('count_no',$counter);
		$this->db->where('batch_no',$batch_no);
//		$this->db->group_by('item_code');
		$this->db->order_by('count_no','ASC');
		$query = $this->db->get();
		return $query;
	}

	public function get_batch2($batch_no){
		$this->db->select('batch_no, sum(status) as complete_batch,data_barcode');
		$this->db->from('blend_transaction_checklist2');
		$this->db->where('batch_no',$batch_no);
		$query = $this->db->get();
		return $query;
	}

	public function get_batch($batch_no){
		$this->db->select('max(count_no) as count_max, batch_no, sum(status) as complete_batch,data_barcode');
		$this->db->from('blend_transaction_checklist2');
		$this->db->where('batch_no',$batch_no);
		$this->db->group_by('count_no');
		$query = $this->db->get();
		return $query;
	}

	public function validasi($kode){
		$this->db->select('*');
		$this->db->from('blend_transaction_checklist2');
		$this->db->where('data_barcode',$kode);
		$this->db->where('status',1);
		$query = $this->db->get();
		return $query;
	}

	public function validasi_blend($batch,$kode){
		$this->db->select('*');
		$this->db->from('blend_transaction_checklist2');
		$this->db->where('batch_no',$batch);
		$this->db->where('data_barcode',$kode);
		$query = $this->db->get();
		return $query;
	}

	public function get_okp($kode){
		$this->db->select('*');
		$this->db->from('blend_transaction_checklist2');
		// $this->db->from('transaction_detail');
		// $this->db->join('transaction_weighing','transaction_detail.id_transact_master=transaction_weighing.id_transact');
		$this->db->where('data_barcode',$kode);
		$query = $this->db->get();
		return $query;
	}

	public function get_okp_data($okp){
		$this->db->select('*');
		$this->db->from('transaction_weighing');
		$this->db->where('batch_no',$okp);
		$query = $this->db->get();
		return $query;
	}
/*
	public function counter_item($batch_no){
//		exit(var_dump($batch_no));
		$ignore = array('T70','T60','T50');
		$line= -1;
		$this->db->select('count(a.item_description) as jml_item, count(a.id_transact) as total_item');
		$this->db->from('transaction_weighing as a');
		$this->db->join('transaction_detail as b','a.id_transact=b.id_transact_master');
		$this->db->where('batch_no',$batch_no);
		$this->db->where('line_type',$line);
		$this->db->where_not_in('uom_ingredient', $ignore);
		$query = $this->db->get();
		return $query;
	}

	public function counter_batch($batch_no){
		$this->db->select('count(id_checklist) as complete_batch, total_blend');
		$this->db->from('transaction_weighing');
		$this->db->join('blend_transaction_checklist','transaction_weighing.batch_no=blend_transaction_checklist.batch_no','LEFT');
		$this->db->where('transaction_weighing.batch_no',$batch_no);
		$this->db->where('line_type',-1);
		$this->db->where_not_in('uom_ingredient', array('T70','T60','T50'));
		$this->db->group_by('transaction_weighing
			.id_transact');
		$query = $this->db->get();
		return $query;
	}
*/
	public function item_insert($batch_no)
	{
		$data="SELECT * FROM trdwms_transaction_checklist
			   WHERE txtBatchNo = '$batch_no'";
 		$query = $this->dwms->query($data);
		return $query->result();
	}

	public function count_item($batch_no = null)
	
	{
// 		$this->db->select('a.uom_ingredient,b.actual_weight,b.data_barcode,a.item_code,count(a.item_description) as jml_item,a.batch_no,a.line_type,a.uom_ingredient,b.count_no,max(a.total_blend) as total_blend');
// 		$this->db->from('transaction_weighing a');
// 		$this->db->join('transaction_detail as b', 'a.id_transact=b.id_transact_master');
// 	    $line_type = -1;
// 		$this->db->where('a.batch_no',$batch_no);
// 		$this->db->where('a.line_type',$line_type);
// 		$this->db->where_not_in('a.uom_ingredient', array('T70','T60','T50'));
// //		$this->db->where('b.count_no', $count_no);
// 		$query = $this->db->get();
// 		return $query;
		$this->dwms->select('txtUomIngredient,
						   fltActualWeight,
						   txtDataBarcode,
						   txtItemCode,
						   count(txtItemDescription) as jml_item,
						   txtBatchNo,
						   intCountNo,
						   MAX(intCountNo) AS total_blend,
						  ');
		$this->dwms->from('trdwms_transaction_checklist');
		$this->dwms->where('txtBatchNo',$batch_no);
		$query = $this->dwms->get();
		return $query;
	}

	public function count_item_actual($batch_no = null)
	
	{
		// $line_type = -1;
		// $ignore = array('T70','T60','T50');
		// $this->db->select('count(id_transact) as total_item, total_blend');
		// $this->db->from('transaction_weighing');
		// $this->db->where('batch_no',$batch_no);
		// $this->db->where('line_type', -1);
		// $this->db->where_not_in('uom_ingredient', array('T70','T60','T50'));
		// $query = $this->db->get();
		// return $query;
		$this->dwms->select('count(txtWeighingHeaderID) as total_item, intTotalBlend');
		$this->dwms->from('trdwms_transaction_weighingheader');
		$this->dwms->where('txtBatch_No',$batch_no);
		$query = $this->dwms->get();
		return $query;
	}

	public function edit($post)
	{
		$params = [
			'batch_name' 	=> $post['batch_name'],
			'product_id'  	=> $post['product_id'],
			'qty' 			=> $post['qty'],
			'updated' 		=> date('Y-m-d H:i:s')
		];
		$this->db->where('transaction_id', $post['id']);
		$this->db->update('mst_transaction', $params);
	}

	public function scan_qr() {
		$query = "SELECT a.id_transact,a.item_description,a.qty_formula,a.uom_scale,b.data_barcode 
					FROM transaction_weighing a 
					INNER JOIN transaction_detail b
						ON a.id_transact = b.id_transact 
					WHERE a.line_type = -1";
		$this->db->get($query);

	}

	function get_data_barang_bykode($batch_no){
        $hsl=$this->db->query("SELECT a.qty_formula,a.item_code,a.id_transact,a.item_description,a.qty_formula,a.uom_scale,b.data_barcode 
					FROM transaction_weighing a 
					INNER JOIN transaction_detail b
						ON a.id_transact = b.id_transact 
					WHERE a.line_type = -1 and batch_no='$batch_no'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'item_code' => $data->item_code,
                    'batch_no' => $data->batch_no,
                    'item_description' => $data->item_description,
                    'uom_scale' => $data->uom_scale,
                    'qty_formula' => $data->qty_formula,
                    );
            }
        }
        return $hasil;
    }

    
    function export_data($batch_no){
    	$this->db->select('*');
    	$this->db->from('blend_transaction_checklist2');
    	$this->db->where('batch_no',$batch_no);
    	$this->db->order_by('count_no','ASC');
    	return $this->db->get();;
    }


    function max_count_no($batch_no){
		$this->db->select('max(count_no) as counter');
		$this->db->from('blend_transaction_checklist2');
		$this->db->where('batch_no',$batch_no);
		$this->db->where('status',1);
		// $this->db->group_by('count_no');
		$query = $this->db->get();
		return $query;
    }


    public function cek_bin_tracebin($txtBinNumber)
    {
    	$this->db_stb->select('txtNomorBin,txtBatchNo,txtDescription');
    	$this->db_stb->from('trTransactionHead');
    	$this->db_stb->join('trTransactionDetail2','trTransactionHead.intTransactionHeadID=trTransactionDetail2.intTransactionHeadID');
    	$this->db_stb->where('txtNomorBin',$txtBinNumber);
    	$this->db_stb->where('intStationID',2);
    	$this->db_stb->order_by('trTransactionHead.intTransactionHeadID','DESC');
    	return $this->db_stb->get();
    }

    public function cek_bin_blending($txtBinNumber,$txtBatchNo)
    {
    	$this->db_stb->select('txtNomorBin,txtBatchNo,bitBlended');
    	$this->db_stb->from('trTransactionDetail3_pobs');
    	// $this->db_stb->from('trTransactionHead');
    	// $this->db_stb->join('trTransactionDetail3_pobs','trTransactionHead.intTransactionHeadID=trTransactionDetail3_pobs.intTransactionHeadID');
    	$this->db_stb->where('txtNomorBin',$txtBinNumber);
    	$this->db_stb->where('txtBatchNo',$txtBatchNo);
    	$this->db_stb->where('bitBlended',1);
    	return $this->db_stb->get();
    }
}
