<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_preparation extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('preparation_m');
	}

	public function index()
	{
		$data['row'] = $this->preparation_m->get();
		$this->template->load('template', 'preparation/preparation', $data);
	}


//Function Add preparation
	public function add() 
	{
		$preparation = new stdClass();
		$preparation->preparation_id = null;
		$preparation->art_code = null;
		$preparation->preparation_name = null;
		$preparation->abbreviation = null;
		$preparation->prinsipal = null;
		$preparation->batchsize = null;
		$preparation->description = null;
		$data = array(
			'page' => 'add',
			'row' => $preparation
		);

		$this->template->load('template', 'preparation/preparation_form', $data);
	}

//Function Edit preparation
	public function edit($id)
	{
		$query = $this->preparation_m->get($id);
		if($query->num_rows() > 0){
			$preparation = $query->row();
			$data = array(
				'page' => 'edit',
				'row'  => $preparation
			);
			$this->template->load('template', 'preparation/preparation_form', $data);
		}else{
			echo "<script> alert('Data not found !!'); </script>";
			echo "<script>window.location='".site_url('c_preparation')."'; </script>";
		}

	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->preparation_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->preparation_m->edit($post);
		}

		if($this->db->affected_rows() > 0){
            	echo "<script> alert('Data successfully saved'); </script>";
                }
                echo "<script>window.location='".site_url('c_preparation')."'; </script>";
	}

//Function Delete preparation
	public function delete_preparation($id)
	{
		$this->preparation_m->delete_preparation($id);
		if($this->db->affected_rows() > 0){
            	echo "<script> alert('Data successfully deleted'); </script>";
                }
                echo "<script>window.location='".site_url('c_preparation')."'; </script>";
	}

}