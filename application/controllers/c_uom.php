<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_uom extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('uom_m');
	}

	public function index()
	{
		$data['row'] = $this->uom_m->get();
		$this->template->load('template', 'master_data/uom_data', $data);
	}


//Function Add uom
	public function add() 
	{
		$uom = new stdClass();
		$uom->uom_id = null;
		$uom->uom_name = null;
		$uom->description = null;
		$data = array(
			'page' => 'add',
			'row' => $uom
		);

		$this->template->load('template', 'master_data/uom_form', $data);
	}

//Function Edit uom
	public function edit($id)
	{
		$query = $this->uom_m->get($id);
		if($query->num_rows() > 0){
			$uom = $query->row();
			$data = array(
				'page' => 'edit',
				'row'  => $uom
			);
			$this->template->load('template', 'master_data/uom_form', $data);
		}else{
			echo "<script> alert('Data not found !!'); </script>";
			echo "<script>window.location='".site_url('c_uom')."'; </script>";
		}

	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->uom_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->uom_m->edit($post);
		}

		if($this->db->affected_rows() > 0){
            	echo "<script> alert('Data successfully saved'); </script>";
                }
                echo "<script>window.location='".site_url('c_uom')."'; </script>";
	}

//Function Delete uom
	public function delete_uom($id)
	{
		$this->uom_m->delete_uom($id);
		if($this->db->affected_rows() > 0){
            	echo "<script> alert('Data successfully deleted'); </script>";
                }
                echo "<script>window.location='".site_url('c_uom')."'; </script>";
	}

}