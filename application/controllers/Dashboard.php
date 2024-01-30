<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('dashboard_m');
		$this->load->model('transaction_m2');
		$this->weighing = $this->load->database('weighing', TRUE);
	}


	public function index()
	{
		check_not_login();
		set_time_limit(0);
		$data['proses'] = $this->dashboard_m->gets("proses");
		$data['ready'] = $this->dashboard_m->gets("ready");
		$data['complete'] = $this->dashboard_m->get();
		// exit(var_dump($data['complete']->num_rows()));
		$this->template->load('template', 'dashboard',$data);
	}

	public function beranda()
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
			$this->load->view('login2');
		}
	}

	public function item_proses()
	{
        $data=$this->dashboard_m->gets("proses");
        echo json_encode($data);
	}

	public function item_ready()
	{
        $data=$this->dashboard_m->gets("proses");
        echo json_encode($data);
	}

	public function item_complete()
	{
        $data=$this->dashboard_m->get();
        echo json_encode($data);
	}

	public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('dashboard/beranda');
		
	}
}
