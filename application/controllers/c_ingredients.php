<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_ingredients extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('ingredients_m');
	}

	public function index()
	{
		$data['row'] = $this->ingredients_m->get();
		$this->template->load('template', 'master_data/ingredients_data',$data);
	}

	public function add() 
	{
		$ingredients = new stdClass();
		$ingredients->ingredients_id = null;
		$ingredients->ingredients_code = null;
		$ingredients->item = null;
		$ingredients->quantity = null;
		$ingredients->uom_id = null;
		$ingredients->product_id = null;
		$ingredients->description = null;
		$data = array(
			'page' => 'add',
			'row' => $ingredients
		);

		$this->template->load('template', 'master_data/ingredients_form', $data);
	}

	public function edit($id)
	{
		$query = $this->ingredients_m->get($id);
		if($query->num_rows() > 0){
			$product = $query->row();
			$data = array(
				'page' => 'edit',
				'row'  => $product
			);

			$this->template->load('template', 'master_data/ingredients_form', $data);
		}else{
			echo "<script> alert('Data not found !!'); </script>";
			echo "<script>window.location='".site_url('c_ingredients')."'; </script>";
		}

	}

	public function delete_ingredients($id)
	{
		$this->ingredients_m->delete_ingredients($id);
		if($this->db->affected_rows() > 0){
            	echo "<script> alert('Data successfully deleted'); </script>";
                }
                echo "<script>window.location='".site_url('c_ingredients')."'; </script>";
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->ingredients_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->ingredients_m->edit($post);
		}

		if($this->db->affected_rows() > 0){
            	echo "<script> alert('Data successfully saved'); </script>";
                }
                echo "<script>window.location='".site_url('c_ingredients')."'; </script>";
	}
}