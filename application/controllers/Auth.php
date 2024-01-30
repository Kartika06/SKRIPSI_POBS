<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$query = $this->user_m->login($post);
			if ($query->num_rows() > 0) {
				$row    = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'nama'	 => $row->name,
					'level'  => $row->level
				);
				$this->session->set_userdata($params);
				if ($params['level']==2) {
					$link = site_url('c_transaction2');
				}else{
					$link = site_url('dashboard');
				}
				echo "<script>
					alert ('Congratulations, you have successfully logged in !!');
					window.location='".$link."';
				</script>";
			}else{
				echo "<script>
					alert ('Your login failed !!');
					window.location='".site_url('dashboard')."';
				</script>";
			}
		}else{
			$this->load->view('login2',$data);
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if ($query->num_rows() > 0) {
				$row    = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level'  => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert ('Congratulations, you have successfully logged in !!');
					window.location='".site_url('dashboard')."';
				</script>";
			}else{
				echo "<script>
					alert ('Your login failed !!');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		}

	}

	public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
		
	}
}
