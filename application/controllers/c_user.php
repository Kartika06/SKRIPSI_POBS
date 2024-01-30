<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
//		check_admin();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['row'] = $this->user_m->get();

		$this->template->load('template', 'user/user_data', $data);
	}


//Function Add User 
	public function add_user()
	{
		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[blend_mst_user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('passconf', 'Confirmation Password', 'required|matches[password]',
			 array('matches' => '%s. :Does not match the password !!')
		);
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_message('required', '%s : Data Empty !!');
		$this->form_validation->set_message('min_length', '%s : Min 5 Caracter !!');
		$this->form_validation->set_message('is_unique', '%s : Data already exists !!');

		$this->form_validation->set_error_delimiters('<span class="help=-block">', '</span>');

		if ($this->form_validation->run() == FALSE)
                {
			$this->template->load('template', 'user/user_form_add');
        } else{
            $post = $this->input->post(null, TRUE);
            $this->user_m->add_user($post);
            if($this->db->affected_rows() > 0){
            	echo "<script> alert('Data successfully saved !!'); </script>";
                }
                echo "<script>window.location='".site_url('c_user')."'; </script>";
            }
	}

//Function Edit User 
	public function edit_user($id)
	{
		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
		if($this->input->post('password')){
			$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
			$this->form_validation->set_rules('passconf', 'Confirmation Password', '|matches[password]',
				 array('matches' => '%s. :Does not match the password !!')
		);
		}
		if($this->input->post('passconf')){
			$this->form_validation->set_rules('passconf', 'Confirmation Password', 'matches[password]',
				 array('matches' => '%s. :Does not match the password !!')
		);
		}
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_message('required', '%s : Data Empty !!');
		$this->form_validation->set_message('min_length', '%s : Min 5 Caracter !!');
		$this->form_validation->set_message('is_unique', '%s : Data already exists !!');

		$this->form_validation->set_error_delimiters('<span class="help=-block">', '</span>');

		if ($this->form_validation->run() == FALSE){
			$query= $this->user_m->get($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->template->load('template', 'user/user_form_edit', $data);
			}else{
				echo "<script> alert('Data not found !!'); </script>";
				echo "<script>window.location='".site_url('c_user')."'; </script>";
			}

        } else{
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit_user($post);
            if($this->db->affected_rows() > 0){
            	echo "<script> alert('Updated successfully !!'); </script>";
                }
                echo "<script>window.location='".site_url('c_user')."'; </script>";
            }
	}
	function username_check(){
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM blend_mst_user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");
		if($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '%s : This has been used, please change !!');
			return FALSE;
		}else{
			return TRUE;
		}

	}


//Function Delete User 
	public function delete_user()
	{
		$id = $this->input->post('user_id');
		$this->user_m->delete_user($id);

		 if($this->db->affected_rows() > 0){
            	echo "<script> alert('Data successfully deleted'); </script>";
                }
                echo "<script>window.location='".site_url('c_user')."'; </script>";

	}
}
