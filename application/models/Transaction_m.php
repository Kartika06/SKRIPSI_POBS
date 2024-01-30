<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaction_m extends CI_Model {

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

		//$this->db->group_by('id_transact');
		//var_dump($tes);
		//semua batch_no yang awalannya PD dan juga setelah angka terdiri 1 huruf (selain itu bukan ke proses Blending)
		$query = $this->db->get();

		return $query;
	}

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

	public function count_item($batch_no = null,$count_no = null)
	
	{
		$ignore = array('T70','T60','T50');
		$this->db->select('a.uom_ingredient,b.actual_weight,b.data_barcode,a.item_code,count(a.item_description) as jml_item,a.batch_no,a.line_type,a.uom_ingredient,b.count_no');
		$this->db->from('transaction_weighing a');
		$this->db->join('transaction_detail as b', 'a.id_transact=b.id_transact_master');
	    $line_type = -1;
		$this->db->where('a.batch_no',$batch_no);
		$this->db->where('a.line_type',$line_type);
		$this->db->where_not_in('a.uom_ingredient', $ignore);
		$this->db->where('b.count_no', $count_no);
		$query = $this->db->get();
		return $query;
	}

	public function count_item_actual($batch_no = null)
	
	{
		$line_type = -1;
		$ignore = array('T70','T60','T50');
		$this->db->select('count(id_transact) as jml_item, total_blend');
		$this->db->from('transaction_weighing');
		$this->db->where('batch_no',$batch_no);
		$this->db->where('line_type', $line_type);
		$this->db->where_not_in('uom_ingredient', $ignore);
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
