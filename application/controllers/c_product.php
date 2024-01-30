<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_product extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('product_m');
	}

	public function index()
	{
		$data['row'] = $this->product_m->get();
		$this->template->load('template', 'master_data/product_data', $data);
	}


//Function Add Product
	public function add() 
	{
		$product = new stdClass();
		$product->product_id = null;
		$product->art_code = null;
		$product->product_name = null;
		$product->abbreviation = null;
		$product->prinsipal = null;
		$product->batchsize = null;
		$product->description = null;
		$data = array(
			'page' => 'add',
			'row' => $product
		);

		$this->template->load('template', 'master_data/product_form', $data);
	}

//Function Edit Product
	public function edit($id)
	{
		$query = $this->product_m->get($id);
		if($query->num_rows() > 0){
			$product = $query->row();
			$data = array(
				'page' => 'edit',
				'row'  => $product
			);
			$this->template->load('template', 'master_data/product_form', $data);
		}else{
			echo "<script> alert('Data not found !!'); </script>";
			echo "<script>window.location='".site_url('c_product')."'; </script>";
		}

	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->product_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->product_m->edit($post);
		}

		if($this->db->affected_rows() > 0){
            	echo "<script> alert('Data successfully saved'); </script>";
                }
                echo "<script>window.location='".site_url('c_product')."'; </script>";
	}

//Function Delete Product
	public function delete_product($id)
	{
		$this->product_m->delete_product($id);
		if($this->db->affected_rows() > 0){
            	echo "<script> alert('Data successfully deleted'); </script>";
                }
                echo "<script>window.location='".site_url('c_product')."'; </script>";
	}

}