<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_m extends CI_Model {
	public function get()
	{
		$this->db->select('finish_scan.*,sum(print_weight) as total_weight, uom_ingredient');
		$this->db->from('finish_scan');
		$this->db->join('blend_transaction_checklist2', 'finish_scan.batch_no=blend_transaction_checklist2.batch_no','LEFT');
		// $this->db->where('MONTH(datetime_check)',date('m'));
		$this->db->where('YEAR(datetime_check)',date('Y'));
		$this->db->group_by('finish_scan.batch_no');
		$query = $this->db->get();
		return $query;
	}

	public function gets($cari = null){
 		$sekarang=date('m')."/".date('Y');
 		$kemaren=(date('m')-1);
 		if ($kemaren <= 0) {
 			$kemaren = 12;
 		}else{
 			$kemaren = $kemaren;
 		}

		if($cari == "proses"){
	 		$data="SELECT * FROM transaction_weighing 
	 			   WHERE batch_no LIKE 'PD%' 
            	   AND batch_no NOT LIKE 'PDE%'
        	       AND is_finish_batch = 0
        	       AND uom_scale LIKE '%BLD%'
    	           AND (creation_date LIKE '%$sekarang%' OR creation_date LIKE '%$kemaren%')
            	   GROUP BY batch_no 
            	   ORDER BY id_transact DESC
            	   LIMIT 500";
        }else if ($cari == "ready") {
	 		$data="SELECT * FROM transaction_weighing 
	 			   WHERE batch_no LIKE 'PD%' 
            	   AND batch_no NOT LIKE 'PDE%'
        	       AND is_finish_batch = 1
    	           AND (creation_date LIKE '%$sekarang%' OR creation_date LIKE '%$kemaren%')
            	   GROUP BY batch_no 
            	   ORDER BY id_transact DESC
            	   LIMIT 300";
        }else if ($cari == "average") {
	 		$data="SELECT * FROM transaction_weighing 
	 			   WHERE batch_no LIKE 'PD%' 
            	   AND batch_no NOT LIKE 'PDE%'
    	           AND (creation_date LIKE '%$sekarang%' OR creation_date LIKE '%$kemaren%')
            	   GROUP BY batch_no 
            	   ORDER BY id_transact DESC
            	   LIMIT 200";
        }
 		$query = $this->weighing->query($data);
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
		$data="SELECT transaction_detail.* FROM transaction_weighing
			   JOIN transaction_detail ON transaction_weighing.`id_transact`=transaction_detail.`id_transact_master`
			   WHERE transaction_weighing.batch_no = '$batch_no'
			   AND transaction_weighing.`line_type`=-1
			   AND uom_ingredient NOT IN ('T70','T60','T50')";
 		$query = $this->db->query($data);
		return $query->result();
	}

	public function count_item($batch_no = null)
	
	{
		$this->db->select('a.uom_ingredient,b.actual_weight,b.data_barcode,a.item_code,count(a.item_description) as jml_item,a.batch_no,a.line_type,a.uom_ingredient,b.count_no,total_blend');
		$this->db->from('transaction_weighing a');
		$this->db->join('transaction_detail as b', 'a.id_transact=b.id_transact_master');
	    $line_type = -1;
		$this->db->where('a.batch_no',$batch_no);
		$this->db->where('a.line_type',$line_type);
		$this->db->where_not_in('a.uom_ingredient', array('T70','T60','T50'));
//		$this->db->where('b.count_no', $count_no);
		$query = $this->db->get();
		return $query;
	}

	public function count_item_actual($batch_no = null)
	
	{
		$line_type = -1;
		$ignore = array('T70','T60','T50');
		$this->db->select('count(id_transact) as total_item, total_blend');
		$this->db->from('transaction_weighing');
		$this->db->where('batch_no',$batch_no);
		$this->db->where('line_type', -1);
		$this->db->where_not_in('uom_ingredient', array('T70','T60','T50'));
		$query = $this->db->get();
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

    


}
